<?php
/* Template Name: Custom Sound Editor */
get_header(); 
?>
<div id="editor-container">
  <div class="vertical-panel">
    <div class="section" id="audio-section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M498.8 80.5L274.8 130.3C263.8 132.7 256 142.5 256 153.7L256 238.1L528 177.7L528 104C528 88.6 513.8 77.2 498.8 80.6zM528 355.8L528 194L256 254.4L256 464C256 508.2 213 544 160 544C107 544 64 508.2 64 464C64 419.8 107 384 160 384C193.4 384 222.8 398.2 240 419.8L240 153.7C240 135 253 118.7 271.3 114.7L495.3 64.8C520.3 59.2 544 78.3 544 103.8L544 400C544 444.2 501 480 448 480C395 480 352 444.2 352 400C352 355.8 395 320 448 320C481.4 320 510.8 334.2 528 355.8zM528 400C528 364.7 492.2 336 448 336C403.8 336 368 364.7 368 400C368 435.3 403.8 464 448 464C492.2 464 528 435.3 528 400L528 400zM240 464C240 428.7 204.2 400 160 400C115.8 400 80 428.7 80 464C80 499.3 115.8 528 160 528C204.2 528 240 499.3 240 464L240 464z"/></svg>
      </div>
      <div class="label">Audio</div>
    </div>
    <div class="section" id="templates-section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M129.5 496C107.9 496 92.5 475.1 99 454.5L149 294.5C153.2 281.1 165.5 272 179.5 272L559 272C580.6 272 596 292.9 589.5 313.5L539.5 473.5C535.3 486.9 523 496 509 496L129.5 496zM256.2 512L509 512C530 512 548.6 498.4 554.8 478.3L604.8 318.3C614.5 287.4 591.4 256 559 256L179.6 256C158.6 256 140 269.6 133.8 289.7L83.8 449.7C82.7 453.1 82.1 456.4 81.8 459.8C80.9 456 80.3 452.1 80.3 448L80.3 160C80.3 133.5 101.8 112 128.3 112L267 112C277.4 112 287.5 115.4 295.8 121.6L334.2 150.4C342.5 156.6 352.6 160 363 160L480.3 160C506.8 160 528.3 181.5 528.3 208L544.3 208C544.3 172.7 515.6 144 480.3 144L362.9 144C356 144 349.2 141.8 343.7 137.6L305.3 108.8C294.2 100.5 280.8 96 266.9 96L128.2 96C92.9 96 64.2 124.7 64.2 160L64.2 448C64.2 483.3 92.9 512 128.2 512L256.2 512z"/></svg>
      </div>
      <div class="label">Templates</div>
    </div>
    <div class="section" id="soundwave-section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M217.6 49.7C210.3 47.7 202.6 51.2 199.2 57.9L185.7 84.4C184.5 86.8 182.2 88.4 179.6 88.7C170 89.9 160.8 92.4 152 96.1C149.5 97.1 146.7 96.9 144.5 95.4L119.5 79.1C113.2 75 104.8 75.8 99.4 81.2L81.7 99C76.3 104.4 75.5 112.7 79.6 119.1L95.9 144.1C97.4 146.3 97.6 149.1 96.6 151.6C94.8 155.9 93.2 160.5 92 165.2C90.8 169.9 89.8 174.6 89.2 179.3C88.9 181.9 87.2 184.2 84.9 185.4L58.3 198.8C51.6 202.2 48.1 209.9 50.1 217.2L56.6 241.4C58.6 248.7 65.4 253.6 72.9 253.2L102.7 251.6C105.4 251.5 107.9 252.6 109.5 254.8C115.2 262.4 122 269.2 129.7 275C131.8 276.6 133 279.2 132.9 281.8L131.3 311.5C130.9 319.1 135.8 325.9 143.1 327.8L167.3 334.3C174.6 336.3 182.3 332.8 185.7 326.1L199.2 299.5C200.4 297.1 202.7 295.5 205.3 295.2C214.9 294 224.1 291.5 232.9 287.8C235.4 286.8 238.2 287 240.4 288.5L265.4 304.8C271.7 308.9 280.1 308.1 285.5 302.7L303.1 285C308.5 279.6 309.3 271.3 305.2 264.9L288.9 239.9C287.4 237.7 287.2 234.9 288.2 232.4C290 228.1 291.6 223.5 292.8 218.8C294 214.1 295 209.4 295.6 204.7C295.9 202.1 297.6 199.8 299.9 198.6L326.5 185.1C333.2 181.7 336.7 174 334.7 166.7L328.2 142.5C326.2 135.2 319.4 130.3 311.9 130.7L282.1 132.3C279.4 132.4 276.9 131.3 275.3 129.1C269.6 121.5 262.8 114.7 255.1 108.9C253 107.3 251.8 104.7 251.9 102.1L253.5 72.4C253.9 64.8 249 58 241.7 56.1L217.5 49.6z"/></svg>
      </div>
      <div class="label">Sound Wave</div>
    </div>
    <div class="section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M248 96C252.4 96 256 99.6 256 104C256 108.4 252.4 112 248 112L112 112L112 248C112 252.4 108.4 256 104 256C99.6 256 96 252.4 96 248L96 104C96 99.6 99.6 96 104 96L248 96zM96 392C96 387.6 99.6 384 104 384C108.4 384 112 387.6 112 392L112 528L248 528C252.4 528 256 531.6 256 536C256 540.4 252.4 544 248 544L112 544C99.6 544 96 540.4 96 528L96 392zM528 96C532.4 96 536 99.6 536 104L536 248C536 252.4 532.4 256 528 256C523.6 256 520 252.4 520 248L520 112L384 112C379.6 112 376 108.4 376 104C376 99.6 379.6 96 384 96L528 96zM520 392C520 387.6 523.6 384 528 384C532.4 384 536 387.6 536 392L536 528C536 540.4 532.4 544 528 544C523.6 544 520 540.4 520 528L520 392z"/></svg>
      </div>
      <div class="label">Canvas size</div>
    </div>
    <div class="section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 32C158.8 32 32 158.8 32 320C32 481.2 158.8 608 320 608C481.2 608 608 481.2 608 320C608 158.8 481.2 32 320 32zM320 560C182.8 560 80 457.2 80 320C80 182.8 182.8 80 320 80C457.2 80 560 182.8 560 320C560 457.2 457.2 560 320 560z"/></svg>
      </div>
      <div class="label">Pozadina</div>
    </div>
    <div class="section" id="text-section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 128H512V160H128V128zM128 224H512V256H128V224zM128 320H512V352H128V320zM128 416H512V448H128V416z"/></svg>
      </div>
      <div class="label">Text</div>
    </div>
    <div class="section" id="print-section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M160 96H480V192H160V96zM160 256H480V448H160V256zM128 448H512V512H128V448zM160 512H480V544H160V512z"/></svg>
      </div>
      <div class="label">Print</div>
    </div>
    <div class="section" id="download-section">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 64C309.5 64 301.3 72.2 301.3 82.7V370.7L242.3 311.7C234.9 304.3 220.7 304.3 213.3 311.7C205.9 319.1 205.9 333.3 213.3 340.7L320 447.4L426.7 340.7C434.1 333.3 434.1 319.1 426.7 311.7C419.3 304.3 405.1 304.3 397.7 311.7L338.7 370.7V82.7C338.7 72.2 330.5 64 320 64zM128 512C119.2 512 112 519.2 112 528C112 536.8 119.2 544 128 544H512C520.8 544 528 536.8 528 528C528 519.2 520.8 512 512 512H128z"/></svg>
      </div>
      <div class="label">Preuzmi</div>
    </div>
  </div>

  <div class="vertical-functions-panel" id="functions-panel">
    <div class="functions-section" id="audio-functions" style="display:none;">
      <input type="text" id="song-search" placeholder="Pretraži pesmu">
      <button id="search-button">Pretraži</button>
      <div id="song-results"></div>
      <div id="song-controls" style="display: none;">
        <button id="play-song">Play</button>
        <button id="pause-song">Pause</button>
      </div>
    </div>
    <div class="functions-section" id="upload-functions" style="display:none;">
      <input type="file" id="upload-audio" />
    </div>
    <div class="functions-section" id="record-functions" style="display:none;">
      <button id="start-recording">Start Recording</button>
      <button id="stop-recording" style="display:none;">Stop Recording</button>
    </div>
    <div class="functions-section" id="templates-functions" style="display:none;">
      <h3>Choose a Template</h3>
      <div class="template-container">
        <div class="template-item" data-template="template1">
          <img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 1">
          <p>Template 1</p>
        </div>
        <div class="template-item" data-template="template2">
          <img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_69a9485ceae1aff.png" alt="Template 2">
          <p>Template 2</p>
        </div>
        <!-- Template 3 to 20 use same image as template1 -->
        <div class="template-item" data-template="template3"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 3"><p>Template 3</p></div>
        <div class="template-item" data-template="template4"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 4"><p>Template 4</p></div>
        <div class="template-item" data-template="template5"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 5"><p>Template 5</p></div>
        <div class="template-item" data-template="template6"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 6"><p>Template 6</p></div>
        <div class="template-item" data-template="template7"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 7"><p>Template 7</p></div>
        <div class="template-item" data-template="template8"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 8"><p>Template 8</p></div>
        <div class="template-item" data-template="template9"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 9"><p>Template 9</p></div>
        <div class="template-item" data-template="template10"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 10"><p>Template 10</p></div>
        <div class="template-item" data-template="template11"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 11"><p>Template 11</p></div>
        <div class="template-item" data-template="template12"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 12"><p>Template 12</p></div>
        <div class="template-item" data-template="template13"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 13"><p>Template 13</p></div>
        <div class="template-item" data-template="template14"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 14"><p>Template 14</p></div>
        <div class="template-item" data-template="template15"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 15"><p>Template 15</p></div>
        <div class="template-item" data-template="template16"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 16"><p>Template 16</p></div>
        <div class="template-item" data-template="template17"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 17"><p>Template 17</p></div>
        <div class="template-item" data-template="template18"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 18"><p>Template 18</p></div>
        <div class="template-item" data-template="template19"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 19"><p>Template 19</p></div>
        <div class="template-item" data-template="template20"><img class="template-icon" src="/wp-content/uploads/2025/03/clipboard_image_2ee712829c72758f.png" alt="Template 20"><p>Template 20</p></div>
      </div>
    </div>
    <div class="functions-section" id="soundwave-functions" style="display:none;">
      <h3>Uredi talase</h3>
      <div class="shape-selection">
        <span>Izbor oblika:</span>
        <div class="shape-selection-icons">
          <div class="shape-option" data-shape="rectangular">
            <img src="https://svebojezvuka.com/wp-content/uploads/2025/09/clipboard_image_5f76eb56cf04045e6c4f2acade7ad32a.png" alt="Pravougaoni talas">
            <span>Pravougaoni</span>
          </div>
          <div class="shape-option" data-shape="circular">
            <img src="https://svebojezvuka.com/wp-content/uploads/2025/09/clipboard_image_477473e2494ee8392711930be486b15e.png" alt="Kružni talas">
            <span>Kružni</span>
          </div>
        </div>
      </div>
      <div class="wave-colors-section">
        <span>Boja talasa:</span>
        <div id="soundwave-colors" class="vertical-colors">
          <div class="color-option" style="background-color: #ff0096;" data-target="barColor1"></div>
          <div class="color-option" style="background-color: #00c8ff;" data-target="barColor2"></div>
          <div class="color-option" style="background-color: #00ff64;" data-target="barColor3"></div>
        </div>
      </div>
      <div id="gradient-direction-toggle">
        <label><input type="radio" name="gradientDirection" value="vertical" checked> Y</label>
        <label><input type="radio" name="gradientDirection" value="horizontal"> X</label>
      </div>
      <select id="wave-shape" style="display:none;">
        <option value="rectangular">Pravougaoni</option>
        <option value="circular">Kružni</option>
      </select>
      <div class="controls">
        <label for="barThickness">Debljina:</label>
        <input type="range" id="barThickness" min="1" max="20" value="2">
        <label for="barSpacing">Razmak:</label>
        <input type="range" id="barSpacing" min="0" max="20" value="5">
        <label for="barHeight">Visina:</label>
        <input type="range" id="barHeight" min="20" max="200" value="50">
        <label for="rotationAngle">Ugao rotacije (°):</label>
        <input type="range" id="rotationAngle" min="0" max="360" value="0">
      </div>
      <div style="display: none;">
        <input type="color" id="barColor1" value="#ff0096">
        <input type="color" id="barColor2" value="#00c8ff">
        <input type="color" id="barColor3" value="#00ff64">
      </div>
    </div>
    <div class="functions-section" id="canvas-size-functions" style="display:none;">
      <h3>Veličina Platna</h3>
      <label for="canvas-size-options">Izaberite veličinu:</label>
      <select id="canvas-size-options">
        <option value="small">Mala (800x600)</option>
        <option value="medium">Srednja (1280x720)</option>
        <option value="large">Velika (1920x1080)</option>
        <option value="custom">Prilagođena</option>
      </select>
      <div id="custom-size-inputs" style="display:none;">
        <label for="custom-width">Širina:</label>
        <input type="number" id="custom-width" min="1" placeholder="px">
        <label for="custom-height">Visina:</label>
        <input type="number" id="custom-height" min="1" placeholder="px">
      </div>
      <button id="apply-canvas-size">Primeni</button>
    </div>
    <div class="functions-section" id="background-functions" style="display:none;">
      <h3>Pozadina talasa</h3>
      <div class="background-category">
        <div class="background-color-options">
          <div class="color-option" style="background-color: #FADADD;" data-color="#FADADD"></div>
          <div class="color-option" style="background-color: #FFECB3;" data-color="#FFECB3"></div>
          <div class="color-option" style="background-color: #C8E6C9;" data-color="#C8E6C9"></div>
          <div class="color-option" style="background-color: #BBDEFB;" data-color="#BBDEFB"></div>
          <div class="color-option" style="background-color: #E1BEE7;" data-color="#E1BEE7"></div>
          <div class="color-option" style="background-color: #FFF9C4;" data-color="#FFF9C4"></div>
          <div class="color-option" style="background-color: #FFE0B2;" data-color="#FFE0B2"></div>
          <div class="color-option" style="background-color: #F8BBD0;" data-color="#F8BBD0"></div>
          <div class="color-option" style="background-color: #B2EBF2;" data-color="#B2EBF2"></div>
          <div class="color-option" style="background-color: #DCEDC8;" data-color="#DCEDC8"></div>
          <div class="color-option" style="background-color: #FFCDD2;" data-color="#FFCDD2"></div>
          <div class="color-option" style="background-color: #D1C4E9;" data-color="#D1C4E9"></div>
          <div class="color-option" style="background-color: #FFCCBC;" data-color="#FFCCBC"></div>
          <div class="color-option" style="background-color: #E6EE9C;" data-color="#E6EE9C"></div>
          <div class="color-option" style="background-color: #B3E5FC;" data-color="#B3E5FC"></div>
          <div class="color-option" style="background-color: #CFD8DC;" data-color="#CFD8DC"></div>
          <div class="color-option" style="background-color: #9E9E9E;" data-color="#9E9E9E"></div>
          <div class="color-option" style="background-color: #424242;" data-color="#424242"></div>
          <div class="color-option" style="background-color: #263238;" data-color="#263238"></div>
          <div class="color-option" style="background-color: #1A237E;" data-color="#1A237E"></div>
        </div>
      </div>
      <div class="background-category">
        <h4>Gradijenti</h4>
        <div class="background-gradient-options">
          <div class="gradient-option" style="background: linear-gradient(45deg, #FAD0C4, #FFD1FF);" data-gradient="linear-gradient(45deg, #FAD0C4, #FFD1FF)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #A1FFCE, #FAFFD1);" data-gradient="linear-gradient(45deg, #A1FFCE, #FAFFD1)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #FFDEE9, #B5FFFC);" data-gradient="linear-gradient(45deg, #FFDEE9, #B5FFFC)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #C2FFD8, #465EFB);" data-gradient="linear-gradient(45deg, #C2FFD8, #465EFB)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #F6D365, #FDA085);" data-gradient="linear-gradient(45deg, #F6D365, #FDA085)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #FBC2EB, #A6C1EE);" data-gradient="linear-gradient(45deg, #FBC2EB, #A6C1EE)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #FCE38A, #F38181);" data-gradient="linear-gradient(45deg, #FCE38A, #F38181)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #E0C3FC, #8EC5FC);" data-gradient="linear-gradient(45deg, #E0C3FC, #8EC5FC)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #D4FC79, #96E6A1);" data-gradient="linear-gradient(45deg, #D4FC79, #96E6A1)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #84FAB0, #8FD3F4);" data-gradient="linear-gradient(45deg, #84FAB0, #8FD3F4)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #A18CD1, #FBC2EB);" data-gradient="linear-gradient(45deg, #A18CD1, #FBC2EB)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #FF9A9E, #FAD0C4);" data-gradient="linear-gradient(45deg, #FF9A9E, #FAD0C4)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #89F7FE, #66A6FF);" data-gradient="linear-gradient(45deg, #89F7FE, #66A6FF)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #FFECD2, #FCB69F);" data-gradient="linear-gradient(45deg, #FFECD2, #FCB69F)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #13547A, #80D0C7);" data-gradient="linear-gradient(45deg, #13547A, #80D0C7)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #5EE7DF, #B490CA);" data-gradient="linear-gradient(45deg, #5EE7DF, #B490CA)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #434343, #000000);" data-gradient="linear-gradient(45deg, #434343, #000000)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #232526, #414345);" data-gradient="linear-gradient(45deg, #232526, #414345)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #141E30, #243B55);" data-gradient="linear-gradient(45deg, #141E30, #243B55)"></div>
          <div class="gradient-option" style="background: linear-gradient(45deg, #000000, #434343);" data-gradient="linear-gradient(45deg, #000000, #434343)"></div>
        </div>
      </div>
      <div class="background-category">
        <h4>Kreiraj gradijent</h4>
        <label for="gradient-color1">Boja 1:</label>
        <input type="color" id="gradient-color1" value="#ff0000">
        <label for="gradient-color2">Boja 2:</label>
        <input type="color" id="gradient-color2" value="#0000ff">
        <label for="gradient-angle">Ugao:</label>
        <input type="range" id="gradient-angle" min="0" max="360" value="45">
      </div>
      <div class="background-category">
        <h4>Dodajte sliku</h4>
        <input type="file" id="upload-background" accept="image/*">
      </div>
    </div>
    <div class="functions-section" id="text-functions" style="display:none;">
      <h3>Dodaj tekst</h3>
      <button class="add-text" data-type="title">➕ Dodaj naslov</button>
      <button class="add-text" data-type="subtitle">➕ Dodaj podnaslov</button>
      <button class="add-text" data-type="small">➕ Dodaj mali tekst</button>
    </div>
    <div id="text-controls-panel" style="margin-top: 15px; display:none;">
      <label>Boja: <input type="color" id="text-color"></label><br>
      <label>Veličina: <input type="number" id="text-size" min="10" max="200"></label><br>
      <label>Font: 
        <select id="text-font">
          <option value="Roboto">Roboto</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Lobster">Lobster</option>
          <option value="Open Sans">Open Sans</option>
          <option value="Oswald">Oswald</option>
        </select>
      </label>
    </div>
    <div class="functions-section" id="print-functions" style="display:none;">
      <h3>Poruči kao print</h3>
      <div id="print-product-options">
        <div class="print-product-info">Učitavanje opcija...</div>
      </div>
    </div>
    <div class="functions-section" id="download-functions" style="display:none;">
      <h3>Preuzmi sliku</h3>
      <p>Klikom na dugme dodaćeš preuzimanje dizajna u korpu.</p>
      <button id="download-png-button">⬇️ Dodaj u korpu za preuzimanje</button>
    </div>
  </div>

  <div class="editor-main">
    <div id="wave-display-central">
      <div id="waveform"></div>
      <div id="trim-controls" style="display: none; margin-top: 15px;">
        <label for="trim-start">⏱ Početak (s):</label>
        <input type="number" id="trim-start" step="0.1" min="0" style="width: 60px;">
        <label for="trim-end">Kraj (s):</label>
        <input type="number" id="trim-end" step="0.1" min="0" style="width: 60px;">
        <button id="trim-audio">✂️ Trimuj selektovani deo</button>
      </div>
      <button id="resetEditor" style="display:none; margin-top: 10px;">🔄 Poništi trimovanje</button>
      <div id="wave-display">
        <canvas id="waveCanvas" width="850" height="400"></canvas>
      </div>
    </div>
  </div>
</div>
<div id="youtube-player"></div>
<div id="trim-popup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); z-index: 9999; padding: 50px; box-sizing: border-box;">
  <div style="max-width: 900px; margin: auto; background: #fff; padding: 30px; border-radius: 10px;">
    <h2 style="margin-top: 0;">✂️ Trimuj audio</h2>
    <div id="popup-waveform" style="width: 100%; height: 120px;"></div>
    <div style="margin-top: 20px;">
      <label for="popup-trim-start">Početak (s):</label>
      <input type="number" id="popup-trim-start" step="0.1" min="0" style="width: 80px;">
      <label for="popup-trim-end" style="margin-left: 10px;">Kraj (s):</label>
      <input type="number" id="popup-trim-end" step="0.1" min="0" style="width: 80px;">
      <button id="popup-trim-do" style="margin-left: 10px;">Trimuj</button>
      <button id="popup-close" style="float: right;">Zatvori ✖️</button>
    </div>
    <button id="popup-playpause" style="margin-top: 20px;">▶️ Play / Pause</button>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<?php get_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    let templatePeaksMap = {};
    window.templatePeaksMap = templatePeaksMap;
    let waveformCache = {};
    let currentWaveShape = "rectangular";
    let currentWaveStyle = 'classic';
    let templateBarColor1 = null;
    let templateBarColor2 = null;
    let templateBarColor3 = null;
    let currentTemplateName = "template1";
    let gradientDirection = 'vertical';
    document.querySelectorAll('input[name="gradientDirection"]').forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked) {
                gradientDirection = this.value;
                updateBars();
            }
        });
    });

    function getTemplatePeaks(templateName, totalBars, height) {
        if (!templatePeaksMap[templateName]) {
            templatePeaksMap[templateName] = generateRealisticPeaks(totalBars, height);
        }
        return templatePeaksMap[templateName];
    }

    function hideAllFunctionSections() {
        document.querySelectorAll('.functions-section').forEach(section => {
            section.style.display = 'none';
        });
    }

    document.getElementById('soundwave-section').addEventListener('click', function () {
        hideAllFunctionSections();
        document.getElementById('soundwave-functions').style.display = 'block';
    });

    document.getElementById('templates-section').addEventListener('click', function () {
        hideAllFunctionSections();
        document.getElementById('templates-functions').style.display = 'block';
    });

    const barThicknessControl = document.getElementById('barThickness');
    const barSpacingControl = document.getElementById('barSpacing');
    const barHeightControl = document.getElementById('barHeight');
    const rotationAngleControl = document.getElementById('rotationAngle');
    const barColor1Control = document.getElementById('barColor1');
    const barColor2Control = document.getElementById('barColor2');
    const barColor3Control = document.getElementById('barColor3');

    function generateTemplatePeaks(count = 200, intensity = 1, smoothness = 0.5) {
        let peaks = [];
        for (let i = 0; i < count; i++) {
            let base = Math.sin((i / count) * Math.PI);
            let variation = Math.sin(i * 0.15) * 0.4 + Math.sin(i * 0.05) * 0.2;
            let val = (base + variation * smoothness) * intensity;
            peaks.push(Math.max(0, val));
        }
        return peaks;
    }

    function selectTemplate(templateName) {
        const canvas = document.getElementById('waveCanvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        let barThickness, spaceBetweenBars, height, rotationAngle, waveStyle;
        templateBarColor1 = null;
        templateBarColor2 = null;
        templateBarColor3 = null;
        switch (templateName) {
            case 'template1':
                barThickness = 0.5; spaceBetweenBars = 0.3; height = 280; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#9b5de5'; templateBarColor2 = '#6a0dad'; templateBarColor3 = '#3f0071';
                const waveDisplay = document.getElementById('wave-display');
                if (waveDisplay) { waveDisplay.style.background = '#dacae6'; waveDisplay.style.backgroundColor = '#dacae6'; }
                break;
            case 'template2':
                barThickness = 1; spaceBetweenBars = 2; height = 280; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#000000'; templateBarColor2 = '#444444'; templateBarColor3 = '#888888';
                const waveDisplay2 = document.getElementById('wave-display');
                if (waveDisplay2) { waveDisplay2.style.background = '#f5f5f5'; waveDisplay2.style.backgroundColor = '#f5f5f5'; }
                break;
            case 'template3':
                barThickness = 2; spaceBetweenBars = 2; height = 250; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ff4d6d'; templateBarColor2 = '#ffeb3b'; templateBarColor3 = '#4dffb8';
                const waveDisplay3 = document.getElementById('wave-display');
                if (waveDisplay3) { waveDisplay3.style.background = 'linear-gradient(135deg, #2c2c54, #474787, #3742fa)'; waveDisplay3.style.backgroundColor = 'transparent'; }
                break;
            case 'template4':
                barThickness = 2; spaceBetweenBars = 0.2; height = 280; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#000000'; templateBarColor2 = '#111111'; templateBarColor3 = '#222222';
                const waveDisplay4 = document.getElementById('wave-display');
                if (waveDisplay4) { waveDisplay4.style.background = 'linear-gradient(135deg, #ffffff, #f0f0f0)'; waveDisplay4.style.backgroundColor = '#ffffff'; }
                break;
            case 'template5':
                barThickness = 2; spaceBetweenBars = 2; height = 250; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ff9a9e'; templateBarColor2 = '#fad0c4'; templateBarColor3 = '#a18cd1';
                const waveDisplay5 = document.getElementById('wave-display');
                if (waveDisplay5) { waveDisplay5.style.background = 'linear-gradient(135deg, #fef9ff, #e0c3fc)'; waveDisplay5.style.backgroundColor = 'transparent'; }
                break;
            case 'template6':
                barThickness = 3; spaceBetweenBars = 0; height = 150; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#8e44ad'; templateBarColor2 = '#3498db'; templateBarColor3 = '#1abc9c';
                const waveDisplay6 = document.getElementById('wave-display');
                if (waveDisplay6) { waveDisplay6.style.background = 'linear-gradient(135deg, #1a1a1a, #2c2c2c)'; waveDisplay6.style.backgroundColor = 'transparent'; }
                break;
            case 'template7':
                barThickness = 2; spaceBetweenBars = 1.5; height = 220; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#00c6ff'; templateBarColor2 = '#0072ff'; templateBarColor3 = '#003366';
                const waveDisplay7 = document.getElementById('wave-display');
                if (waveDisplay7) { waveDisplay7.style.background = 'linear-gradient(135deg, #e0f7fa, #80deea, #26c6da)'; }
                break;
            case 'template8':
                barThickness = 3; spaceBetweenBars = 1; height = 260; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ff512f'; templateBarColor2 = '#dd2476'; templateBarColor3 = '#ff9966';
                const waveDisplay8 = document.getElementById('wave-display');
                if (waveDisplay8) { waveDisplay8.style.background = 'linear-gradient(135deg, #ffe259, #ffa751)'; }
                break;
            case 'template9':
                barThickness = 1.5; spaceBetweenBars = 2; height = 180; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#000000'; templateBarColor2 = '#444444'; templateBarColor3 = '#999999';
                const waveDisplay9 = document.getElementById('wave-display');
                if (waveDisplay9) { waveDisplay9.style.background = '#ffffff'; }
                break;
            case 'template10':
                barThickness = 2.5; spaceBetweenBars = 1.2; height = 240; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ff00ff'; templateBarColor2 = '#00ffff'; templateBarColor3 = '#ffff00';
                const waveDisplay10 = document.getElementById('wave-display');
                if (waveDisplay10) { waveDisplay10.style.background = 'linear-gradient(135deg, #000000, #1a1a1a)'; }
                break;
            case 'template11':
                barThickness = 2; spaceBetweenBars = 2; height = 230; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#2ecc71'; templateBarColor2 = '#27ae60'; templateBarColor3 = '#145a32';
                const waveDisplay11 = document.getElementById('wave-display');
                if (waveDisplay11) { waveDisplay11.style.background = 'linear-gradient(135deg, #eafaf1, #d5f5e3)'; }
                break;
            case 'template12':
                barThickness = 3; spaceBetweenBars = 0.8; height = 260; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ff00ff'; templateBarColor2 = '#00ffff'; templateBarColor3 = '#ff6600';
                const waveDisplay12 = document.getElementById('wave-display');
                if (waveDisplay12) { waveDisplay12.style.background = 'linear-gradient(135deg, #1a0033, #33001a)'; }
                break;
            case 'template13':
                barThickness = 2; spaceBetweenBars = 1.5; height = 270; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#6a11cb'; templateBarColor2 = '#2575fc'; templateBarColor3 = '#00f2fe';
                const waveDisplay13 = document.getElementById('wave-display');
                if (waveDisplay13) { waveDisplay13.style.background = 'linear-gradient(135deg, #000428, #004e92)'; }
                break;
            case 'template14':
                barThickness = 2; spaceBetweenBars = 2; height = 200; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ffb199'; templateBarColor2 = '#ff0844'; templateBarColor3 = '#ffb347';
                const waveDisplay14 = document.getElementById('wave-display');
                if (waveDisplay14) { waveDisplay14.style.background = 'linear-gradient(135deg, #fff1eb, #ace0f9)'; }
                break;
            case 'template15':
                barThickness = 3; spaceBetweenBars = 1; height = 250; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#222222'; templateBarColor2 = '#333333'; templateBarColor3 = '#555555';
                const waveDisplay15 = document.getElementById('wave-display');
                if (waveDisplay15) { waveDisplay15.style.background = 'linear-gradient(135deg, #000000, #1c1c1c)'; }
                break;
            case 'template16':
                barThickness = 2; spaceBetweenBars = 1.5; height = 240; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ff9a9e'; templateBarColor2 = '#fecfef'; templateBarColor3 = '#fad0c4';
                const waveDisplay16 = document.getElementById('wave-display');
                if (waveDisplay16) { waveDisplay16.style.background = 'linear-gradient(135deg, #fff, #ffe6f7)'; }
                break;
            case 'template17':
                barThickness = 2; spaceBetweenBars = 2; height = 210; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#00c9ff'; templateBarColor2 = '#92fe9d'; templateBarColor3 = '#38ef7d';
                const waveDisplay17 = document.getElementById('wave-display');
                if (waveDisplay17) { waveDisplay17.style.background = 'linear-gradient(135deg, #e0f7ff, #ffffff)'; }
                break;
            case 'template18':
                barThickness = 3; spaceBetweenBars = 1; height = 250; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#ff6a00'; templateBarColor2 = '#ee0979'; templateBarColor3 = '#f953c6';
                const waveDisplay18 = document.getElementById('wave-display');
                if (waveDisplay18) { waveDisplay18.style.background = 'linear-gradient(135deg, #ffe259, #ffa751)'; }
                break;
            case 'template19':
                barThickness = 2.5; spaceBetweenBars = 1; height = 230; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#8e2de2'; templateBarColor2 = '#4a00e0'; templateBarColor3 = '#ad5389';
                const waveDisplay19 = document.getElementById('wave-display');
                if (waveDisplay19) { waveDisplay19.style.background = 'linear-gradient(135deg, #232526, #414345)'; }
                break;
            case 'template20':
                barThickness = 2; spaceBetweenBars = 2; height = 220; rotationAngle = 0; waveStyle = "mirrorBars";
                templateBarColor1 = '#f7971e'; templateBarColor2 = '#ffd200'; templateBarColor3 = '#ffcc00';
                const waveDisplay20 = document.getElementById('wave-display');
                if (waveDisplay20) { waveDisplay20.style.background = 'linear-gradient(135deg, #fffcdc, #d9a7c7)'; }
                break;
            default: return;
        }
        currentWaveStyle = waveStyle || currentWaveStyle;
        currentTemplateName = templateName;
        const totalBars = Math.floor(canvas.width / (barThickness + spaceBetweenBars));
        const templatePeaks = getTemplatePeaks(templateName, totalBars, height);
        if (barThicknessControl) barThicknessControl.value = barThickness;
        if (barSpacingControl) barSpacingControl.value = spaceBetweenBars;
        if (barHeightControl) barHeightControl.value = height;
        if (rotationAngleControl) rotationAngleControl.value = rotationAngle;
        if (barColor1Control) barColor1Control.value = templateBarColor1 || barColor1Control.value;
        if (barColor2Control) barColor2Control.value = templateBarColor2 || barColor2Control.value;
        if (barColor3Control) barColor3Control.value = templateBarColor3 || barColor3Control.value;
    }

    function drawWave(ctx, canvas, barThickness, spaceBetweenBars, height, rotationAngle, waveShape, waveStyle = 'classic', peaksOverride = null) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.save();
        const centerX = canvas.width / 2;
        const centerY = canvas.height / 2;
        const rotationRadians = (rotationAngle * Math.PI) / 180;
        const c1 = (barColor1Control && barColor1Control.value) || templateBarColor1 || '#000000';
        const c2 = (barColor2Control && barColor2Control.value) || templateBarColor2 || '#777777';
        const c3 = (barColor3Control && barColor3Control.value) || templateBarColor3 || '#BBBBBB';
        ctx.translate(centerX, centerY);
        ctx.rotate(rotationRadians);
        ctx.translate(-centerX, -centerY);
        if (waveShape === "circular") {
            const radius = Math.max(10, Math.min(centerX, centerY) - Math.abs(height));
            const circumference = 2 * Math.PI * radius;
            const numBars = Math.max(40, Math.floor(circumference / (barThickness + spaceBetweenBars)));
            const angleStep = (2 * Math.PI) / numBars;
            for (let i = 0; i < numBars; i++) {
                let variation = Math.sin(i * 0.15) * 0.4 + Math.sin(i * 0.05) * 0.2;
                const barLen = height * (0.5 + variation);
                const x1 = centerX + Math.cos(i * angleStep) * radius;
                const y1 = centerY + Math.sin(i * angleStep) * radius;
                const x2 = centerX + Math.cos(i * angleStep) * (radius + barLen);
                const y2 = centerY + Math.sin(i * angleStep) * (radius + barLen);
                const gradient = ctx.createLinearGradient(x1, y1, x2, y2);
                gradient.addColorStop(0, c1);
                gradient.addColorStop(0.5, c2);
                gradient.addColorStop(1, c3);
                ctx.strokeStyle = gradient;
                ctx.lineWidth = barThickness;
                ctx.beginPath();
                ctx.moveTo(x1, y1);
                ctx.lineTo(x2, y2);
                ctx.stroke();
            }
        } else {
            const totalBars = Math.floor(canvas.width / (barThickness + spaceBetweenBars));
            if (waveStyle === "mirrorBars") {
                let peaksToUse = [];
                if (peaksOverride?.length) peaksToUse = peaksOverride;
                else if (window.currentTrimPeaks?.length) peaksToUse = window.currentTrimPeaks;
                else peaksToUse = templatePeaksMap[currentTemplateName] || [];
                const maxPeak = peaksToUse.length ? Math.max(...peaksToUse) : 1;
                for (let i = 0; i < peaksToUse.length; i++) {
                    const barLen = (peaksToUse[i] / maxPeak) * height;
                    const x = i * (barThickness + spaceBetweenBars);
                    const yTop = canvas.height / 2 - barLen;
                    const yBottom = canvas.height / 2;
                    let barGradient;
                    if (gradientDirection === 'horizontal') {
                        const baseBlend = 0.05;
                        const waveEffect = Math.sin(Date.now() * 0.0005) * 0.02;
                        const blend = baseBlend + waveEffect;
                        const gradient = ctx.createLinearGradient(0, 0, canvas.width, 0);
                        gradient.addColorStop(0, c1);
                        gradient.addColorStop(1/3 - blend, c1);
                        gradient.addColorStop(1/3 + blend, c2);
                        gradient.addColorStop(2/3 - blend, c2);
                        gradient.addColorStop(2/3 + blend, c3);
                        gradient.addColorStop(1, c3);
                        barGradient = gradient;
                    } else {
                        barGradient = ctx.createLinearGradient(0, yTop, 0, yBottom);
                        barGradient.addColorStop(0, c1);
                        barGradient.addColorStop(0.5, c2);
                        barGradient.addColorStop(1, c3);
                    }
                    ctx.fillStyle = barGradient;
                    ctx.fillRect(x, yTop, barThickness, barLen);
                    ctx.fillRect(x, yBottom, barThickness, barLen);
                }
            } else {
                for (let x = 0; x < canvas.width; x += barThickness + spaceBetweenBars) {
                    let yOffset = 0;
                    switch (waveStyle) {
                        case 'classic': yOffset = Math.sin(x * 0.03) * height * 0.5 + Math.sin(x * 0.006) * height * 0.18; break;
                        case 'smooth': yOffset = Math.sin(x * 0.01) * height * 0.7 + Math.sin(x * 0.03) * height * 0.08; break;
                        case 'jagged': yOffset = (Math.sin(x * 0.06) * 0.6 + Math.sin(x * 0.3) * 0.4) * height * 0.5; break;
                        case 'minimal': yOffset = Math.sin(x * 0.05) * height * 0.2; break;
                        case 'chaotic': yOffset = (Math.sin(x * 0.02) + Math.sin(x * 0.09) * 0.6 + Math.sin(x * 0.004) * 0.3) * height * 0.35; break;
                        case 'abstract': yOffset = Math.sin(x * 0.1) * height * Math.cos(x * 0.03); break;
                        default: yOffset = Math.sin(x * 0.03) * height * 0.5;
                    }
                    const yTop = canvas.height / 2 - height / 2 + yOffset;
                    const yBottom = canvas.height / 2 + height / 2 + yOffset;
                    const barGradient = ctx.createLinearGradient(0, yTop, 0, yBottom);
                    barGradient.addColorStop(0, c1);
                    barGradient.addColorStop(0.5, c2);
                    barGradient.addColorStop(1, c3);
                    ctx.fillStyle = barGradient;
                    ctx.fillRect(x, yTop, barThickness, yBottom - yTop);
                }
            }
        }
        ctx.restore();
        window.drawWave = drawWave;
    }

    function redrawWave() {
        const canvas = document.getElementById('waveCanvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        drawWave(ctx, canvas, parseFloat(barThicknessControl.value), parseFloat(barSpacingControl.value), parseFloat(barHeightControl.value), parseFloat(rotationAngleControl.value), currentWaveShape, currentWaveStyle);
    }

    function updateBars() {
        const canvas = document.getElementById('waveCanvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        const barThickness = parseInt(barThicknessControl.value);
        const spaceBetweenBars = parseInt(barSpacingControl.value);
        const barHeight = parseInt(barHeightControl.value);
        const rotationAngle = parseInt(rotationAngleControl.value);
        drawWave(ctx, canvas, barThickness, spaceBetweenBars, barHeight, rotationAngle, currentWaveShape, currentWaveStyle, window.currentTrimPeaks || null);
    }

    document.querySelectorAll('.template-item').forEach(item => {
        item.addEventListener('click', function () {
            const templateName = this.getAttribute('data-template');
            selectTemplate(templateName);
            updateBars();
        });
    });
    barThicknessControl.addEventListener('input', updateBars);
    barSpacingControl.addEventListener('input', updateBars);
    barHeightControl.addEventListener('input', updateBars);
    rotationAngleControl.addEventListener('input', updateBars);
    barColor1Control.addEventListener('input', updateBars);
    barColor2Control.addEventListener('input', updateBars);
    barColor3Control.addEventListener('input', updateBars);
    document.querySelectorAll('#soundwave-colors .color-option').forEach(option => {
        option.addEventListener('click', function () {
            const targetId = this.dataset.target;
            const colorInput = document.getElementById(targetId);
            if (colorInput) {
                colorInput.click();
                colorInput.oninput = () => {
                    this.style.backgroundColor = colorInput.value;
                    updateBars();
                }
            }
        });
    });
    document.querySelectorAll('.shape-option').forEach(option => {
        option.addEventListener('click', function() {
            currentWaveShape = this.dataset.shape;
            updateBars();
        });
    });
    selectTemplate("template1");
    updateBars();
    window.updateBars = updateBars;
    window.selectTemplate = selectTemplate;
    window.getWaveControls = () => ({
        barThickness: parseFloat(document.getElementById('barThickness')?.value || 3),
        barSpacing: parseFloat(document.getElementById('barSpacing')?.value || 2),
        barHeight: parseFloat(document.getElementById('barHeight')?.value || 100),
        rotationAngle: parseFloat(document.getElementById('rotationAngle')?.value || 0),
        currentWaveShape,
        currentWaveStyle
    });
    wavesurfer.on('ready', updateBars);
    document.getElementById('resetEditor')?.addEventListener('click', () => {
        if (originalAudioURL) {
            wavesurfer.load(originalAudioURL);
            popupWaveSurfer.stop();
            document.getElementById('trim-popup').style.display = 'none';
        }
    });
});

function generateRealisticPeaks(count, maxHeight) {
    let peaks = [];
    let lastVal = maxHeight * 0.4;
    for (let i = 0; i < count; i++) {
        let change = (Math.random() - 0.5) * maxHeight * 0.2;
        let val = Math.max(5, Math.min(maxHeight, lastVal + change));
        peaks.push(val);
        lastVal = val * 0.9 + (Math.random() * maxHeight * 0.1);
    }
    return peaks;
}

document.addEventListener("DOMContentLoaded", function() {
    var canvasSizeButton = document.querySelector(".vertical-panel .section:nth-child(4)");
    var canvasSizeSection = document.getElementById("canvas-size-functions");
    canvasSizeButton.addEventListener("click", function() {
        document.querySelectorAll(".functions-section").forEach(section => { section.style.display = "none"; });
        canvasSizeSection.style.display = "block";
    });
    document.getElementById("canvas-size-options").addEventListener("change", function() {
        var customSizeInputs = document.getElementById("custom-size-inputs");
        if (this.value === "custom") customSizeInputs.style.display = "block";
        else customSizeInputs.style.display = "none";
    });
    document.getElementById("apply-canvas-size").addEventListener("click", function() {
        var selectedSize = document.getElementById("canvas-size-options").value;
        var canvas = document.getElementById("waveCanvas");
        if (selectedSize === "small") { canvas.width = 800; canvas.height = 600; }
        else if (selectedSize === "medium") { canvas.width = 1280; canvas.height = 720; }
        else if (selectedSize === "large") { canvas.width = 1920; canvas.height = 1080; }
        else if (selectedSize === "custom") {
            var customWidth = document.getElementById("custom-width").value;
            var customHeight = document.getElementById("custom-height").value;
            if (customWidth && customHeight) { canvas.width = parseInt(customWidth); canvas.height = parseInt(customHeight); }
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const backgroundSection = document.querySelector(".vertical-panel .section:nth-child(5)");
    const backgroundFunctions = document.getElementById("background-functions");
    const functionPanels = document.querySelectorAll(".functions-section");
    const waveDisplay = document.getElementById("wave-display");
    backgroundSection.addEventListener("click", function () {
        functionPanels.forEach(panel => panel.style.display = "none");
        backgroundFunctions.style.display = "block";
    });
    function removeActiveClass() {
        document.querySelectorAll(".color-option, .gradient-option").forEach(el => el.classList.remove("selected"));
    }
    document.querySelectorAll(".color-option").forEach(option => {
        option.addEventListener("click", function () {
            removeActiveClass();
            this.classList.add("selected");
            let color = this.getAttribute("data-color");
            waveDisplay.style.background = "";
            waveDisplay.style.backgroundColor = color;
        });
    });
    document.querySelectorAll(".gradient-option").forEach(option => {
        option.addEventListener("click", function () {
            removeActiveClass();
            this.classList.add("selected");
            let gradient = this.getAttribute("data-gradient");
            waveDisplay.style.background = gradient;
            waveDisplay.style.backgroundColor = "transparent";
        });
    });
    const gradientColor1 = document.getElementById("gradient-color1");
    const gradientColor2 = document.getElementById("gradient-color2");
    const gradientAngle = document.getElementById("gradient-angle");
    function updateCustomGradient() {
        let color1 = gradientColor1.value;
        let color2 = gradientColor2.value;
        let angle = gradientAngle.value;
        let customGradient = `linear-gradient(${angle}deg, ${color1}, ${color2})`;
        waveDisplay.style.background = customGradient;
        waveDisplay.style.backgroundColor = "transparent";
    }
    gradientColor1.addEventListener("input", updateCustomGradient);
    gradientColor2.addEventListener("input", updateCustomGradient);
    gradientAngle.addEventListener("input", updateCustomGradient);
    document.getElementById("upload-background").addEventListener("change", function (event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                waveDisplay.style.background = `url(${e.target.result})`;
                waveDisplay.style.backgroundSize = "cover";
                waveDisplay.style.backgroundPosition = "center";
            };
            reader.readAsDataURL(file);
        }
    });
});

function hideAllFunctionSections() {
    document.querySelectorAll('.functions-section').forEach(sec => sec.style.display = 'none');
}

document.getElementById('print-section')?.addEventListener('click', () => {
    hideAllFunctionSections();
    document.getElementById('print-functions').style.display = 'block';
});
document.getElementById('download-section')?.addEventListener('click', () => {
    hideAllFunctionSections();
    document.getElementById('download-functions').style.display = 'block';
});
document.getElementById('text-section')?.addEventListener('click', () => {
    hideAllFunctionSections();
    document.getElementById('text-functions').style.display = 'block';
});
document.addEventListener("DOMContentLoaded", function () {
    const waveDisplay = document.getElementById("wave-display");
    waveDisplay.style.position = "relative";
    let textElements = [];
    let selectedText = null;
    document.querySelectorAll(".add-text").forEach(btn => {
        btn.addEventListener("click", () => {
            const type = btn.dataset.type;
            addTextElement(type);
        });
    });
    document.querySelectorAll('.shape-option').forEach(option => {
        option.addEventListener('click', function() {
            currentWaveShape = this.dataset.shape;
            document.querySelectorAll('.shape-option').forEach(o => o.classList.remove('selected'));
            this.classList.add('selected');
            updateBars();
        });
    });
    function addTextElement(type) {
        const div = document.createElement("div");
        div.contentEditable = true;
        div.classList.add("canvas-text");
        const deleteBtn = document.createElement("span");
        deleteBtn.innerText = "🗑️";
        deleteBtn.style.marginLeft = "8px";
        deleteBtn.style.cursor = "pointer";
        deleteBtn.style.fontSize = "24px";
        deleteBtn.style.transition = "transform 0.2s";
        deleteBtn.addEventListener("mouseenter", () => { deleteBtn.style.transform = "scale(1.3)"; });
        deleteBtn.addEventListener("mouseleave", () => { deleteBtn.style.transform = "scale(1)"; });
        deleteBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            div.remove();
            textElements = textElements.filter(el => el !== div);
            if(selectedText === div) {
                selectedText = null;
                document.getElementById("text-controls-panel").style.display = "none";
            }
        });
        div.appendChild(deleteBtn);
        switch(type){
            case "title":
                div.innerHTML = "Naslov ";
                div.style.fontSize = "48px";
                div.style.fontWeight = "bold";
                break;
            case "subtitle":
                div.innerHTML = "Podnaslov ";
                div.style.fontSize = "32px";
                div.style.fontWeight = "500";
                break;
            case "small":
                div.innerHTML = "Mali tekst ";
                div.style.fontSize = "20px";
                div.style.fontWeight = "400";
                break;
        }
        div.appendChild(deleteBtn);
        const waveTop = 100 + Math.sin(textElements.length * 0.5) * 50;
        div.style.position = "absolute";
        div.style.top = waveTop + "px";
        div.style.left = "50px";
        div.style.color = "#000000";
        div.style.cursor = "move";
        div.style.fontFamily = "'Roboto', sans-serif";
        waveDisplay.appendChild(div);
        textElements.push(div);
        makeDraggable(div);
        selectText(div);
    }
    function makeDraggable(el) {
        let isDragging = false, startX, startY, origX, origY;
        el.addEventListener("mousedown", function(e){
            if(e.target.tagName === "SPAN") return;
            isDragging = true;
            startX = e.clientX;
            startY = e.clientY;
            origX = parseInt(el.style.left);
            origY = parseInt(el.style.top);
            selectText(el);
            el.style.cursor = "grabbing";
        });
        document.addEventListener("mousemove", function(e){
            if(isDragging){
                const dx = e.clientX - startX;
                const dy = e.clientY - startY;
                el.style.left = origX + dx + "px";
                el.style.top = origY + dy + "px";
            }
        });
        document.addEventListener("mouseup", function(){
            if(isDragging){
                isDragging = false;
                el.style.cursor = "move";
            }
        });
    }
    function selectText(el) {
        selectedText = el;
        const panel = document.getElementById("text-controls-panel");
        panel.style.display = "block";
        document.getElementById("text-color").value = rgbToHex(window.getComputedStyle(el).color);
        document.getElementById("text-size").value = parseInt(window.getComputedStyle(el).fontSize);
        document.getElementById("text-font").value = window.getComputedStyle(el).fontFamily.replace(/['"]/g, "").split(",")[0];
        if(!document.getElementById("text-rotate")){
            const rotateLabel = document.createElement("label");
            rotateLabel.innerText = "Rotacija: ";
            const rotateInput = document.createElement("input");
            rotateInput.type = "range";
            rotateInput.min = -180;
            rotateInput.max = 180;
            rotateInput.value = 0;
            rotateInput.id = "text-rotate";
            rotateInput.addEventListener("input", () => {
                if(selectedText) selectedText.style.transform = `rotate(${rotateInput.value}deg)`;
            });
            rotateLabel.appendChild(rotateInput);
            panel.appendChild(rotateLabel);
        }
    }
    document.getElementById("text-color").addEventListener("input", e => {
        if(selectedText) selectedText.style.color = e.target.value;
    });
    document.getElementById("text-size").addEventListener("input", e => {
        if(selectedText) selectedText.style.fontSize = e.target.value + "px";
    });
    document.getElementById("text-font").addEventListener("change", e => {
        if(selectedText){
            const font = e.target.value;
            selectedText.style.fontFamily = `'${font}', sans-serif`;
            loadGoogleFont(font);
        }
    });
    function loadGoogleFont(fontName){
        const linkId = "gf-" + fontName.replace(/\s+/g,"");
        if(document.getElementById(linkId)) return;
        const link = document.createElement("link");
        link.id = linkId;
        link.rel = "stylesheet";
        link.href = `https://fonts.googleapis.com/css2?family=${fontName.replace(/ /g,"+")}:wght@400;500;700&display=swap`;
        document.head.appendChild(link);
    }
    function rgbToHex(rgb) {
        const result = /^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/.exec(rgb.replace(/\s/g,''));
        return result ? "#" + ((1 << 24) + (parseInt(result[1]) << 16) + (parseInt(result[2]) << 8) + parseInt(result[3])).toString(16).slice(1) : rgb;
    }
});
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".vertical-panel .section");
    sections.forEach(section => {
        section.addEventListener("click", () => {
            sections.forEach(s => s.classList.remove("active"));
            section.classList.add("active");
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    if (window.matchMedia("(max-width: 768px)").matches) {
        const functionButtons = document.querySelectorAll(".vertical-panel .section");
        const functionSections = document.querySelectorAll(".vertical-functions-panel .functions-section");
        function closeAllPanels() {
            functionSections.forEach(section => section.style.display = "none");
            document.body.classList.remove("function-open");
        }
        const audioPanel = document.getElementById("audio-functions");
        if (audioPanel) {
            let scrollZone = audioPanel.querySelector(".audio-scroll-zone");
            if (!scrollZone) {
                scrollZone = document.createElement("div");
                scrollZone.classList.add("audio-scroll-zone");
                while (audioPanel.firstChild) {
                    scrollZone.appendChild(audioPanel.firstChild);
                }
                audioPanel.appendChild(scrollZone);
            }
        }
        functionButtons.forEach(button => {
            button.addEventListener("click", function (e) {
                e.stopPropagation();
                const targetId = this.getAttribute("data-target");
                const targetPanel = document.querySelector(targetId);
                if (!targetPanel) return;
                const isOpen = targetPanel.style.display === "block";
                closeAllPanels();
                if (!isOpen) {
                    targetPanel.style.display = "block";
                    document.body.classList.add("function-open");
                }
            });
        });
        document.addEventListener("click", function (e) {
            const openPanel = document.querySelector(".vertical-functions-panel .functions-section[style*='display: block']");
            if (openPanel && !openPanel.contains(e.target) && !e.target.closest(".vertical-panel")) {
                closeAllPanels();
            }
        });
        functionSections.forEach(section => {
            if (section.querySelector(".close-arrow")) return;
            const closeArrow = document.createElement("div");
            closeArrow.classList.add("close-arrow");
            closeArrow.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#777" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>`;
            closeArrow.addEventListener("click", closeAllPanels);
            section.insertBefore(closeArrow, section.firstChild);
        });
    }
});
</script>
