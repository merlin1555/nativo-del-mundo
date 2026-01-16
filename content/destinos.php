<section class="destinos" id="destinos">
    <div class="seccion_container">
        <p class="sin-linea animate__animated animate__fadeIn">CONOCE NUESTROS</p>
        <h2 class="animate__animated animate__fadeIn">DESTINOS DESTACADOS</h2>

        <div class="cards">

            <!-- TORRES DEL PAINE -->
            <div class="flip-card card--paine">
                <div class="flip-card__inner">

                <div class="flip-card__face flip-card__front">
                    <h3>TORRES DEL PAINE</h3>
                </div>

                <div class="flip-card__face flip-card__back">
                    <h6>TORRES DEL PAINE</h6>
                    <p>
                    Torres del Paine en Chile es uno de los destinos turísticos más
                    famosos de Sudamérica, reconocido por sus montañas, glaciares
                    y paisajes patagónicos.
                    </p>
                    <a class="btn_ btn__ghost" href="#como-funciona">
                    <span>Ver Programa</span>
                    </a>
                </div>

                </div>
            </div>

            <!-- DESIERTO DE ATACAMA -->
            <div class="flip-card card--atacama">
                <div class="flip-card__inner">

                <div class="flip-card__face flip-card__front">
                    <h3>DESIERTO DE ATACAMA</h3>
                </div>

                <div class="flip-card__face flip-card__back">
                    <h6>DESIERTO DE ATACAMA</h6>
                    <p>
                    El Desierto de Atacama es uno de los lugares más áridos del mundo,
                    famoso por sus salares, géiseres, cielos estrellados y paisajes
                    únicos.
                    </p>
                    <a class="btn_ btn__ghost" href="#como-funciona">
                    <span>Ver Programa</span>
                    </a>
                </div>

                </div>
            </div>

            <!-- CHILOÉ -->
            <div class="flip-card card--chiloe">
                <div class="flip-card__inner">

                <div class="flip-card__face flip-card__front">
                    <h3>CHILOÉ</h3>
                </div>

                <div class="flip-card__face flip-card__back">
                    <h6>CHILOÉ</h6>
                    <p>
                    Chiloé es un destino turístico del sur de Chile, destacado por
                    su naturaleza, tradiciones, arquitectura en madera y gastronomía
                    local.
                    </p>
                    <a class="btn_ btn__ghost" href="#como-funciona">
                    <span>Ver Programa</span>
                    </a>
                </div>

                </div>
            </div>

        </div>
    </div>
</section>
<script>
  const isTouchUI = window.matchMedia("(hover: none)").matches;

  if (isTouchUI) {
    const cards = Array.from(document.querySelectorAll(".flip-card"));

    function closeAll(except = null) {
      cards.forEach(c => {
        if (c !== except) c.classList.remove("is-flipped");
      });
    }

    cards.forEach(card => {
      card.addEventListener("click", (e) => {
        // Si el click fue en un link o dentro de un link, deja navegar
        if (e.target.closest("a")) return;

        // Evita que el click burbujee y dispare el "tap fuera"
        e.stopPropagation();

        const willOpen = !card.classList.contains("is-flipped");
        closeAll(card);
        card.classList.toggle("is-flipped", willOpen);
      });
    });

    // Bonus UX: tocar fuera cierra
    document.addEventListener("click", () => closeAll());
    // (Opcional) al hacer scroll/cambiar orientación, cierra
    window.addEventListener("scroll", () => closeAll(), { passive: true });
    window.addEventListener("orientationchange", () => closeAll());
  }
</script>

