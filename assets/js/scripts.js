const btnTop = document.getElementById('btnTop');

window.addEventListener('scroll', () => {
  if (window.scrollY === 0) {
    btnTop.classList.remove('hidden');
  } else {
    btnTop.classList.add('hidden');
  }
});

/* ================================  volver arriba  ======================================== */
$(document).ready(function () {
    
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        var btnVolverArriba = document.getElementById("btnVolverArriba");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btnVolverArriba.style.display = "block";
        } else {
            btnVolverArriba.style.display = "none";
        }

        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            btnVolverArriba.style.left = "20px";
        } else {
            btnVolverArriba.style.left = "-100px";
        }
    }

    document.getElementById("btnVolverArriba").onclick = function() {
        document.body.scrollTop = 0; /* Para navegadores que no sean Chrome */
        document.documentElement.scrollTop = 0; /* Para Chrome, Firefox, IE y Opera */
    }
});

/* ================================  Scroll separado  ======================================== */
(() => {
  const hero = document.getElementById('hero');
  if (!hero) return;

  const mountains = hero.querySelector('.hero__mountains');
  const grass = hero.querySelector('.hero__grass');

  const MAX_MOVE = 300;

  const SPEED_M = 2;
  const SPEED_G = 1.20;

  let raf = 0;

  const clamp = (v, a, b) => Math.max(a, Math.min(b, v));

  function update(){
    raf = 0;

    const rect = hero.getBoundingClientRect();
    const vh = window.innerHeight || 1;

    // altura visible real del hero
    const visible =
    Math.min(rect.bottom, vh) -
    Math.max(rect.top, 0);

    // porcentaje visible (0–1)
    const visibleRatio = visible / rect.height;

    // cielo activo solo si el hero está al menos 50% visible
    hero.classList.toggle('is-active', visibleRatio >= 0.7);

    const p = clamp((vh - rect.top) / (vh + rect.height), 0, 1);
    const t = (p - 0.5) * 2;

    const yM = t * MAX_MOVE * SPEED_M;
    const yG = t * MAX_MOVE * SPEED_G;

    mountains.style.transform = `translate3d(0, ${yM}px, 0)`;
    grass.style.transform     = `translate3d(0, ${yG}px, 0)`;
  }

  function onScroll(){
    if (!raf) raf = requestAnimationFrame(update);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', () => requestAnimationFrame(update), { passive: true });

  update();
})();

