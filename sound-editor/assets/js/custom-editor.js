let originalAudioURL = null;
let fakePeaks = null;

let mediaRecorder = null;
let audioChunks = [];

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('youtube-player', {
        height: '0',
        width: '0',
        videoId: '',
        playerVars: { autoplay: 1, controls: 0 },
        events: { onReady: onPlayerReady }
    });
}

function onPlayerReady(event) {
    document.getElementById('youtube-player').style.display = 'block';
}

function playSong(videoId) {
    if (!player || !player.loadVideoById) return;

    player.mute();
    player.loadVideoById({ videoId: videoId, startSeconds: 0 });
    setTimeout(() => {
        player.unMute();
        player.playVideo();
    }, 300);

    const duration = player.getDuration() || 30;
    const samples = Math.floor(duration * 50);
    fakePeaks = new Float32Array(samples).map(() => Math.random() * 2 - 1);

    popupWaveSurfer.empty();
    const tmpCtx = new AudioContext();
    const fakeBuf = tmpCtx.createBuffer(1, fakePeaks.length, tmpCtx.sampleRate);
    fakeBuf.copyToChannel(fakePeaks, 0, 0);
    const wavBlob = bufferToWave(fakeBuf);
    popupWaveSurfer.loadBlob(wavBlob);

    document.getElementById("trim-popup").style.display = 'block';
    document.getElementById("popup-playpause").disabled = false;
    document.getElementById("popup-trim-do").disabled = false;
    popupWaveSurfer.play();
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('audio-section')?.addEventListener('click', () => {
        document.querySelectorAll('.functions-section').forEach(el => el.style.display = 'none');
        document.querySelectorAll('#audio-functions, #upload-functions, #record-functions, #trim-functions')
            .forEach(el => el.style.display = 'block');
    });

    document.getElementById('search-button')?.addEventListener('click', () => {
        const searchQuery = document.getElementById('song-search').value.trim();
        if (searchQuery) searchYouTubeSong(searchQuery);
    });

    window.wavesurfer = WaveSurfer.create({
        container: "#waveform",
        backend: "WebAudio",
        waveColor: "#4F46E5",
        progressColor: "#6366F1",
        cursorColor: "#FF5733",
        barWidth: 2,
        barGap: 1,
        height: 150,
        responsive: true,
        normalize: true,
        plugins: [WaveSurfer.regions.create({ dragSelection: true, slop: 5 })]
    });

    window.popupWaveSurfer = WaveSurfer.create({
        container: "#popup-waveform",
        backend: "WebAudio",
        waveColor: "#10B981",
        progressColor: "#059669",
        cursorColor: "#FF5733",
        barWidth: 2,
        barGap: 1,
        height: 120,
        responsive: true,
        normalize: true,
        plugins: [WaveSurfer.regions.create({ dragSelection: true, slop: 5 })]
    });

    document.getElementById("upload-audio")?.addEventListener("change", function (event) {
        const file = event.target.files?.[0];
        if (!file) return;

        document.getElementById("trim-popup").style.display = "block";

        try { popupWaveSurfer.empty(); } catch(e) {}
        try { popupWaveSurfer.clearRegions(); } catch(e) {}
        try { popupWaveSurfer.drawer && popupWaveSurfer.drawer.clear(); } catch(e) {}

        const audioURL = URL.createObjectURL(file);
        const audio = new Audio();
        audio.src = audioURL;
        audio.crossOrigin = "anonymous";

        audio.addEventListener("canplaythrough", () => {
            try {
                popupWaveSurfer.load(audio);
            } catch (err) {
                popupWaveSurfer.load(audioURL);
            }
        }, { once: true });

        popupWaveSurfer.once("ready", () => {
            const ac = popupWaveSurfer.backend?.ac || popupWaveSurfer.backend?.audioContext;
            if (ac && ac.state === "suspended") ac.resume().catch(()=>{});
            originalAudioURL = audioURL;
            document.getElementById("popup-playpause").disabled = false;
            document.getElementById("popup-trim-do").disabled = false;
            popupWaveSurfer.play();
        });
    });

    document.getElementById('start-recording')?.addEventListener('click', async () => {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            mediaRecorder = new MediaRecorder(stream);
            audioChunks = [];
            mediaRecorder.ondataavailable = event => {
                if (event.data && event.data.size > 0) audioChunks.push(event.data);
            };
            mediaRecorder.start();
            document.getElementById('start-recording').style.display = "none";
            document.getElementById('stop-recording').style.display = "block";
        } catch (error) {
            alert("Microphone access denied or error.");
        }
    });

    document.getElementById('stop-recording')?.addEventListener('click', () => {
        if (!mediaRecorder) return;
        mediaRecorder.stop();
        mediaRecorder.onstop = () => {
            const blob = new Blob(audioChunks, { type: 'audio/wav' });
            const audioUrl = URL.createObjectURL(blob);
            document.getElementById("trim-popup").style.display = "block";

            try { popupWaveSurfer.empty(); } catch(e) {}
            try { popupWaveSurfer.clearRegions(); } catch(e) {}
            try { popupWaveSurfer.drawer && popupWaveSurfer.drawer.clear(); } catch(e) {}

            const audio = new Audio();
            audio.src = audioUrl;
            audio.crossOrigin = "anonymous";
            audio.addEventListener("canplaythrough", () => {
                try {
                    popupWaveSurfer.load(audio);
                } catch (err) {
                    popupWaveSurfer.load(audioUrl);
                }
            }, { once: true });

            popupWaveSurfer.once("ready", () => {
                const ac = popupWaveSurfer.backend?.ac || popupWaveSurfer.backend?.audioContext;
                if (ac && ac.state === "suspended") ac.resume().catch(()=>{});
                if (originalAudioURL) URL.revokeObjectURL(originalAudioURL);
                originalAudioURL = audioUrl;
                document.getElementById("popup-playpause").disabled = false;
                document.getElementById("popup-trim-do").disabled = false;
                popupWaveSurfer.play();
            });

            const existing = document.getElementById('record-download-link');
            if (existing) existing.remove();
            const downloadLink = document.createElement('a');
            downloadLink.href = audioUrl;
            downloadLink.download = "recorded_audio.wav";
            downloadLink.id = 'record-download-link';
            downloadLink.innerText = "Download recording";
            document.getElementById('record-functions')?.appendChild(downloadLink);

            document.getElementById('start-recording').style.display = "block";
            document.getElementById('stop-recording').style.display = "none";
        };
    });

    document.getElementById('trim-audio')?.addEventListener('click', () => {
        const startTime = parseFloat(document.getElementById('trim-start')?.value);
        const endTime = parseFloat(document.getElementById('trim-end')?.value);
        if (!isNaN(startTime) && !isNaN(endTime) && player) {
            if (startTime >= endTime) {
                alert("Start time must be less than end time.");
            } else {
                player.seekTo(startTime, true);
                setTimeout(() => player.pauseVideo(), (endTime - startTime) * 1000);
            }
        } else {
            alert("Invalid time values.");
        }
    });

    document.getElementById('resetEditor')?.addEventListener('click', () => {
        if (!originalAudioURL) return;
        wavesurfer.empty();
        wavesurfer.load(originalAudioURL);
        try { popupWaveSurfer.stop(); } catch(e) {}
        try { popupWaveSurfer.clearRegions(); } catch(e) {}
        try { popupWaveSurfer.empty(); } catch(e) {}
        document.getElementById('trim-popup').style.display = 'none';
        document.getElementById('trim-controls').style.display = 'none';
    });

    document.getElementById("popup-trim-do")?.addEventListener("click", async () => {
        const popup = window.popupWaveSurfer;
        const regionsList = popup?.regions?.list;
        const region = regionsList && Object.values(regionsList)[0];
        if (!region) {
            alert("Drag a region to trim.");
            return;
        }
        try {
            await trimPopupAudio(region.start, region.end);
        } catch (err) {
            alert("Trim failed.");
        }
    });

    document.getElementById("popup-close")?.addEventListener("click", () => {
        popupWaveSurfer.stop();
        document.getElementById("trim-popup").style.display = "none";
    });

    document.getElementById("popup-playpause")?.addEventListener("click", () => {
        popupWaveSurfer.playPause();
    });

    wavesurfer.on('ready', function () {
        let timeline = document.createElement("div");
        timeline.id = "wave-timeline";
        timeline.style.width = "100%";
        timeline.style.textAlign = "center";
        timeline.style.marginTop = "5px";
        document.querySelector("#waveform").appendChild(timeline);
        let duration = wavesurfer.getDuration();
        let markers = "";
        for (let i = 0; i <= duration; i += 5) {
            markers += `<span style="margin-right: 20px;">${i}s</span>`;
        }
        timeline.innerHTML = markers;
    });

    document.getElementById("playPauseBtn")?.addEventListener("click", function () {
        wavesurfer.playPause();
    });
});

function searchYouTubeSong(query) {
    const apiKey = ytSettings.apiKey;
    fetch(`https://www.googleapis.com/youtube/v3/search?part=snippet&q=${encodeURIComponent(query)}&type=video&videoCategoryId=10&key=${apiKey}`)
        .then(response => response.json())
        .then(data => displaySongResults(data.items))
        .catch(() => {});
}

function displaySongResults(songs) {
    const resultsContainer = document.getElementById('song-results');
    if (!resultsContainer) return;
    resultsContainer.innerHTML = '';
    songs.forEach(song => {
        const songElement = document.createElement('div');
        songElement.classList.add('song-item');
        songElement.innerHTML = `<p>${song.snippet.title}</p><button class="play-btn">Play</button>`;
        songElement.querySelector('.play-btn').addEventListener('click', () => playSong(song.id.videoId));
        resultsContainer.appendChild(songElement);
    });
}

function loadAudioToWaveform(audioUrl) {
    wavesurfer.empty();
    wavesurfer.load(audioUrl);
}

function trimAudio(startTime, endTime) {
    if (!wavesurfer.backend.buffer) {
        alert("No audio loaded.");
        return;
    }
    if (startTime >= endTime) {
        alert("Start time must be less than end time.");
        return;
    }
    wavesurfer.once("ready", () => {
        document.getElementById("trim-controls").style.display = "block";
        document.getElementById("resetEditor").style.display = "block";
        if (typeof updateBars === 'function') updateBars();
    });
    const originalBuffer = wavesurfer.backend.buffer;
    const sr = originalBuffer.sampleRate;
    const s0 = Math.floor(startTime * sr);
    const s1 = Math.floor(endTime * sr);
    const len = s1 - s0;
    const trimmedBuffer = new AudioContext().createBuffer(originalBuffer.numberOfChannels, len, sr);
    for (let ch = 0; ch < originalBuffer.numberOfChannels; ch++) {
        trimmedBuffer.copyToChannel(originalBuffer.getChannelData(ch).slice(s0, s1), ch, 0);
    }
    const blob = bufferToWave(trimmedBuffer);
    const trimmedUrl = URL.createObjectURL(blob);
    wavesurfer.empty();
    wavesurfer.load(trimmedUrl);
    wavesurfer.once('ready', () => wavesurfer.play());
    document.getElementById('trimmed-section').innerHTML = `<p>Trimmed: ${startTime}s – ${endTime}s</p>`;
}

function bufferToWave(abuffer) {
    let length = abuffer.length * 2 + 44;
    let buffer = new ArrayBuffer(length);
    let view = new DataView(buffer);
    let channels = 1;
    let sampleRate = abuffer.sampleRate;
    let offset = 0;
    function writeString(s) {
        for (let i = 0; i < s.length; i++) {
            view.setUint8(offset++, s.charCodeAt(i));
        }
    }
    writeString("RIFF");
    view.setUint32(offset, 36 + abuffer.length * 2, true); offset += 4;
    writeString("WAVE");
    writeString("fmt ");
    view.setUint32(offset, 16, true); offset += 4;
    view.setUint16(offset, 1, true); offset += 2;
    view.setUint16(offset, channels, true); offset += 2;
    view.setUint32(offset, sampleRate, true); offset += 4;
    view.setUint32(offset, sampleRate * 2, true); offset += 4;
    view.setUint16(offset, 2, true); offset += 2;
    view.setUint16(offset, 16, true); offset += 2;
    writeString("data");
    view.setUint32(offset, abuffer.length * 2, true); offset += 4;
    let channelData = abuffer.getChannelData(0);
    for (let i = 0; i < channelData.length; i++) {
        let sample = Math.max(-1, Math.min(1, channelData[i]));
        view.setInt16(offset, sample < 0 ? sample * 0x8000 : sample * 0x7FFF, true);
        offset += 2;
    }
    return new Blob([buffer], { type: "audio/wav" });
}

function openPopupWithWaveform(audioSource) {
    popupWaveSurfer.empty();
    if (!originalAudioURL) {
        originalAudioURL = (audioSource instanceof Blob) ? URL.createObjectURL(audioSource) : audioSource;
    }
    popupReadyBuffer = null;
    if (audioSource instanceof Blob) {
        popupWaveSurfer.loadBlob(audioSource);
    } else {
        popupWaveSurfer.load(audioSource);
    }
    popupWaveSurfer.once("ready", () => {
        const ac = popupWaveSurfer.backend?.ac || popupWaveSurfer.backend?.audioContext;
        if (ac && ac.state === "suspended") ac.resume();
        document.getElementById("trim-popup").style.display = "block";
        document.getElementById("popup-playpause").disabled = false;
        document.getElementById("popup-trim-do").disabled = false;
        popupWaveSurfer.play();
    });
}

async function trimPopupAudio(startTime, endTime) {
    const popup = window.popupWaveSurfer;
    if (!popup || !popup.backend || !popup.backend.buffer) {
        alert("Popup waveform not ready.");
        return;
    }
    if (startTime >= endTime) {
        alert("Start time must be less than end time.");
        return;
    }
    const buf = popup.backend.buffer;
    const sr = buf.sampleRate;
    const s0 = Math.floor(startTime * sr);
    const s1 = Math.floor(endTime * sr);
    const len = s1 - s0;
    const trimmedBuf = new AudioContext().createBuffer(buf.numberOfChannels, len, sr);
    for (let ch = 0; ch < buf.numberOfChannels; ch++) {
        trimmedBuf.copyToChannel(buf.getChannelData(ch).slice(s0, s1), ch, 0);
    }
    function bufferToPeaks(audioBuffer, totalBars) {
        const channelData = audioBuffer.getChannelData(0);
        const blockSize = Math.floor(channelData.length / totalBars);
        let peaks = [];
        for (let i = 0; i < totalBars; i++) {
            let start = i * blockSize;
            let end = start + blockSize;
            let max = 0;
            for (let j = start; j < end; j++) {
                max = Math.max(max, Math.abs(channelData[j]));
            }
            peaks.push(max);
        }
        return peaks;
    }
    function normalizeOrFillPeaks(peaks, totalBars) {
        let result = [...peaks];
        while (result.length < totalBars) result.push(Math.random() * 0.5 + 0.2);
        return result;
    }
    const controls = window.getWaveControls?.();
    if (!controls) {
        alert("Wave controls not available.");
        return;
    }
    const c1 = (typeof barColor1Control !== 'undefined' ? barColor1Control.value : null) || '#000000';
    const c2 = (typeof barColor2Control !== 'undefined' ? barColor2Control.value : null) || '#777777';
    const c3 = (typeof barColor3Control !== 'undefined' ? barColor3Control.value : null) || '#BBBBBB';
    const safe = (val, fallback) => (typeof val === 'number' && isFinite(val) && val > 0) ? val : (fallback || 0.5);
    const barThickness = safe(controls.barThickness, 2);
    const barSpacing = safe(controls.barSpacing, 2);
    const barHeight = safe(controls.barHeight, 50);
    const rotationAngle = safe(controls.rotationAngle, 0);
    const canvas = document.getElementById('waveCanvas');
    const ctx = canvas.getContext('2d');
    const totalBars = Math.floor(canvas.width / (barThickness + barSpacing));
    let peaks = bufferToPeaks(trimmedBuf, totalBars);
    peaks = normalizeOrFillPeaks(peaks, totalBars);
    window.currentTrimPeaks = peaks;
    drawWave(
        ctx, canvas,
        barThickness, barSpacing, barHeight, rotationAngle,
        controls.currentWaveShape,
        controls.currentWaveStyle,
        peaks.map(p => (typeof p === 'number' && p > 0) ? p : 0.2)
    );
    try { popup.stop(); } catch(e) {}
    try { popup.clearRegions(); } catch(e) {}
    try { popup.empty(); } catch(e) {}
    document.getElementById("trim-popup").style.display = "none";
}

window.trimPopupAudio = trimPopupAudio;
