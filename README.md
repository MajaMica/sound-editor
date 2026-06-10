# 🎛️ Custom Sound Editor for WordPress & WooCommerce

A fully interactive waveform editor that allows users to upload audio, record from microphone, search YouTube, trim tracks, and customize the wave appearance (shape, colors, thickness, rotation). Includes 20+ design templates, text overlay, background settings, and WooCommerce integration for print/digital products.

> **Project status:** Beta – core features are stable and functional.  
> The project was originally built for a client who later cancelled it, so it's shared as‑is.  
> **Known issue:** audio trimming may not stop playback correctly in some cases; trim UI has minor duplication (to be improved in future refactoring).

---

## ✨ Features

- **Audio sources** – upload file, record mic, search YouTube (API key required)
- **Waveform customization** – shape (rectangular / circular), thickness, spacing, height, rotation, 3‑color gradient
- **20+ presets (templates)** – one‑click style changes
- **Text overlay** – add, drag, edit title/subtitle/small text; change color, size, font, rotation
- **Background** – solid colors, gradients, or custom image
- **Canvas resize** – preset or custom dimensions
- **Print products** – frame, poster, canvas, forex with dynamic pricing (AJAX add‑to‑cart)
- **Digital download** – export design as PNG and add to cart
- **WooCommerce integration** – custom cart item data, meta display, order item meta

---

## 🛠️ Tech Stack

- **WordPress** + **Hello Elementor child theme**
- **WooCommerce**
- **Wavesurfer.js** (v6.6.2) + regions plugin
- **YouTube IFrame API**
- **Canvas API** & **html2canvas**
- **Vanilla JavaScript** (ES6)
- **PHP** (custom plugin‑style functions)

---

## 📂 Repository Structure

sound-editor/
├── assets/
│ ├── js/
│ │ ├── custom-editor.js (main editor logic)
│ │ └── shop-custom.js (print & download cart actions)
│ └── css/
│ └── style.css (editor styles, responsive)
├── inc/
│ └── functions-editor.php (PHP – enqueue scripts, AJAX, shop items, cart filters)
├── template/
│ └── page-editor.php (WordPress page template)
├── functions.php (minimal – includes inc/functions-editor.php)
└── README.md

---

## 📦 Installation (for developers)

1. Install **WordPress**, **WooCommerce**, and the **Hello Elementor** theme.
2. Upload the `sound-editor` folder to `/wp-content/themes/hello-elementor-child/` (create the child theme if needed).
3. Activate the child theme.
4. Create a new page and assign the template **"Custom Sound Editor"**.
5. (Optional) Configure your own **YouTube API key** in `inc/functions-editor.php` – look for `ytSettings`.
6. Ensure that your server supports `file_put_contents` and uploads directory is writable (for saving canvas images).

---

## ⚠️ Known Issues & Limitations

- **Audio trimming** – does not always stop playback correctly. A future refactor is needed.
- **Trim UI** – has some duplicate elements (minor).
- **YouTube API** – you must supply your own API key.
- **WooCommerce product IDs** – currently hardcoded for frame, poster, canvas, forex. Adapt to your store.

---

## 🔮 Possible Improvements (if continued)

- Move inline styles to CSS classes.
- Refactor PHP into OOP plugin.
- Add nonce verification for AJAX calls.
- Implement transaction‑safe point handling (if combined with loyalty system).
- Add admin panel for product IDs and template management.

---
