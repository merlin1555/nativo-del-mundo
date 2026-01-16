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
