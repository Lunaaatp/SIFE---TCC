<!-- WIDGET DE ACESSIBILIDADE APERFEIÇOADO -->
<style>
  :root {
    --a11y-primary: var(--primary-red, #d32f2f);
  }

  /* Container do Widget */
  .a11y-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 99999;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
  }

  /* Botão Flutuante Principal */
  .a11y-widget button.a11y-toggle-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: var(--a11y-primary) !important;
    color: #ffffff !important;
    border: 2px solid #ffffff !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    transition: transform 0.2s ease;
  }

  .a11y-widget button.a11y-toggle-btn:hover, 
  .a11y-widget button.a11y-toggle-btn:focus {
    transform: scale(1.1);
    outline: 3px solid #000000;
  }
  
  /* Menu em Modo Normal */
  .a11y-widget .a11y-menu {
    display: none;
    position: absolute;
    bottom: 65px;
    right: 0;
    background-color: #ffffff !important;
    border-radius: 12px;
    padding: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.25);
    border: 1px solid #e0e0e0 !important;
    min-width: 230px;
    flex-direction: column;
    gap: 8px;
    color: #333333 !important;
  }

  .a11y-widget .a11y-menu.active {
    display: flex;
  }
  
  .a11y-widget .a11y-btn-group {
    display: flex;
    gap: 5px;
  }

  /* Botões Internos do Menu (Modo Normal) */
  .a11y-widget button.a11y-btn {
    flex: 1;
    background-color: #f1f3f5 !important;
    background-image: none !important;
    border: 1px solid #ced4da !important;
    padding: 8px 10px;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 600;
    color: #333333 !important;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: background-color 0.2s ease;
    box-shadow: none !important;
  }

  .a11y-widget button.a11y-btn *,
  .a11y-widget button.a11y-btn i,
  .a11y-widget button.a11y-btn span {
    color: #333333 !important;
    background-color: transparent !important;
  }

  .a11y-widget button.a11y-btn:hover, 
  .a11y-widget button.a11y-btn:focus {
    background-color: #e2e6ea !important;
    outline: 2px solid #000000;
  }

  .a11y-widget .a11y-menu small {
    color: #6c757d !important;
  }

  /* ===================================================
     ALTO CONTRASTE (PADRONIZADO EM PRETO E AMARELO)
     =================================================== */

  /* 1. Página Geral */
  body.high-contrast {
    background-color: #000000 !important;
    color: #ffffff !important;
  }

  body.high-contrast *:not(.a11y-widget):not(.a11y-widget *) {
    background-color: #000000 !important;
    color: #ffff00 !important;
    border-color: #ffff00 !important;
  }

  body.high-contrast a:not(.a11y-widget *) {
    color: #00ffff !important;
  }

  /* 2. Menu do Widget no Alto Contraste */
  body.high-contrast .a11y-widget .a11y-menu {
    background-color: #000000 !important;
    border: 2px solid #ffff00 !important;
    color: #ffff00 !important;
    box-shadow: 0 0 10px rgba(255, 255, 0, 0.3) !important;
  }

  body.high-contrast .a11y-widget .a11y-menu small,
  body.high-contrast .a11y-widget .a11y-menu hr {
    color: #ffff00 !important;
    border-color: #ffff00 !important;
  }

  /* 3. Todos os Botões dentro do Widget no Alto Contraste */
  body.high-contrast .a11y-widget button.a11y-btn,
  body.high-contrast .a11y-widget button.a11y-toggle-btn {
    background-color: #000000 !important;
    color: #ffff00 !important;
    border: 1px solid #ffff00 !important;
  }

  /* Força elementos internos dos botões a seguirem as cores de alto contraste */
  body.high-contrast .a11y-widget button.a11y-btn *,
  body.high-contrast .a11y-widget button.a11y-btn i,
  body.high-contrast .a11y-widget button.a11y-btn span,
  body.high-contrast .a11y-widget button.a11y-toggle-btn i {
    color: #ffff00 !important;
    background-color: #000000 !important;
  }

  /* Hover dos botões no modo Alto Contraste (Inverte para fundo amarelo e texto preto) */
  body.high-contrast .a11y-widget button.a11y-btn:hover,
  body.high-contrast .a11y-widget button.a11y-btn:focus {
    background-color: #ffff00 !important;
    color: #000000 !important;
  }

  body.high-contrast .a11y-widget button.a11y-btn:hover *,
  body.high-contrast .a11y-widget button.a11y-btn:hover i,
  body.high-contrast .a11y-widget button.a11y-btn:hover span {
    background-color: #ffff00 !important;
    color: #000000 !important;
  }
</style>

<div class="a11y-widget" id="a11yWidget">
  <button class="a11y-toggle-btn" id="a11yToggleBtn" aria-label="Abrir Opções de Acessibilidade" title="Acessibilidade">
    <i class="fas fa-universal-access"></i>
  </button>

  <div class="a11y-menu" id="a11yMenu" role="region" aria-label="Menu de Acessibilidade">
    <small class="fw-bold text-uppercase mb-1" style="font-size: 0.7rem;">Tamanho do Texto</small>
    <div class="a11y-btn-group">
      <button class="a11y-btn" id="a11yFontIncrease" aria-label="Aumentar Texto"><i class="fas fa-plus"></i> A+</button>
      <button class="a11y-btn" id="a11yFontReset" aria-label="Texto Normal">A</button>
      <button class="a11y-btn" id="a11yFontDecrease" aria-label="Diminuir Texto"><i class="fas fa-minus"></i> A-</button>
    </div>

    <hr class="my-1">

    <small class="fw-bold text-uppercase mb-1" style="font-size: 0.7rem;">Visual & Leitura</small>
    <button class="a11y-btn w-100 justify-content-start" id="a11yContrast">
      <i class="fas fa-adjust"></i> Alto Contraste
    </button>
    <button class="a11y-btn w-100 justify-content-start" id="a11yReadText">
      <i class="fas fa-volume-up"></i> <span id="a11yReadLabel">Ouvir Texto</span>
    </button>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const widget = document.getElementById("a11yWidget");
  const toggleBtn = document.getElementById("a11yToggleBtn");
  const menu = document.getElementById("a11yMenu");
  
  // Alternar menu
  toggleBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    menu.classList.toggle("active");
  });

  // Fechar menu ao clicar fora
  document.addEventListener("click", (e) => {
    if (!widget.contains(e.target)) {
      menu.classList.remove("active");
    }
  });

  // Zoom da Fonte Seguro
  let currentZoom = parseInt(localStorage.getItem("a11y_zoom")) || 100;
  
  function applyZoom(zoom) {
    document.body.style.zoom = zoom !== 100 ? zoom + "%" : "100%";
    localStorage.setItem("a11y_zoom", zoom);
  }

  if (currentZoom !== 100) applyZoom(currentZoom);

  document.getElementById("a11yFontIncrease").addEventListener("click", () => {
    if (currentZoom < 130) { 
      currentZoom += 10; 
      applyZoom(currentZoom); 
    }
  });

  document.getElementById("a11yFontDecrease").addEventListener("click", () => {
    if (currentZoom > 90) { 
      currentZoom -= 10; 
      applyZoom(currentZoom); 
    }
  });

  document.getElementById("a11yFontReset").addEventListener("click", () => {
    currentZoom = 100;
    applyZoom(currentZoom);
  });

  // Alto Contraste
  const contrastBtn = document.getElementById("a11yContrast");
  if (localStorage.getItem("a11y_contrast") === "true") {
    document.body.classList.add("high-contrast");
  }

  contrastBtn.addEventListener("click", () => {
    document.body.classList.toggle("high-contrast");
    localStorage.setItem("a11y_contrast", document.body.classList.contains("high-contrast"));
  });

  // Leitor de Voz Nativo
  const readBtn = document.getElementById("a11yReadText");
  const readLabel = document.getElementById("a11yReadLabel");
  let isSpeaking = false;

  readBtn.addEventListener("click", () => {
    if (!('speechSynthesis' in window)) {
      alert("Seu navegador não suporta leitura em áudio.");
      return;
    }

    if (isSpeaking) {
      window.speechSynthesis.cancel();
      isSpeaking = false;
      readLabel.innerText = "Ouvir Texto";
      return;
    }

    let selectedText = window.getSelection().toString().trim();
    let textToRead = selectedText || document.getElementById("content")?.innerText || document.body.innerText;

    if (!textToRead) return;

    const utterance = new SpeechSynthesisUtterance(textToRead);
    utterance.lang = "pt-BR";
    utterance.onend = () => {
      isSpeaking = false;
      readLabel.innerText = "Ouvir Texto";
    };

    window.speechSynthesis.speak(utterance);
    isSpeaking = true;
    readLabel.innerText = "Parar Leitura";
  });
});
</script>