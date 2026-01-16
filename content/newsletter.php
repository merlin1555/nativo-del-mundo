<section class="newsletter section" id="newsletter">
    <div class="seccion_container">
        <p class="text-top animate__animated animate__fadeIn">NEWSLETTER</p>
        <h2 class="animate__animated animate__fadeIn">SUSCRÍBETE A NUESTRO NEWSLETTER</h2>
<form class="uform" action="#" method="post" novalidate>
  <div class="uform__row uform__row--2">
    <div class="uform__field">
      <label class="uform__label" for="nombre">Nombre</label>
      <input class="uform__input" id="nombre" name="nombre" type="text" autocomplete="given-name" />
    </div>

    <div class="uform__field">
      <label class="uform__label" for="apellido">Apellido</label>
      <input class="uform__input" id="apellido" name="apellido" type="text" autocomplete="family-name" />
    </div>
  </div>

  <div class="uform__row">
    <div class="uform__field">
      <label class="uform__label" for="correo">Correo<span class="uform__req">*</span></label>
      <input class="uform__input" id="correo" name="correo" type="email" autocomplete="email" required />
    </div>
  </div>

  <!-- Botón opcional (si no lo quieres, bórralo) -->
  <button class="btn_ btn__primary" type="submit"><span>Enviar</span></button>
</form>

<style>
  :root{
    --line: var(--brand-dark);          /* azul de la línea */
    --text: #0b0f1a;
    --muted: rgba(11,15,26,.70);
    --bg: #ffffff;
    --radius: 14px;
    --gap: 22px;
  }

  .uform{
    font-family: "Poppins", system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
    background: var(--bg);
    padding: 26px 28px;
    border-radius: var(--radius);
  }

  .uform__row{
    display: grid;
    gap: var(--gap);
    margin-bottom: 26px;
  }
  .uform__row--2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .uform__label{
    display:block;
    font-size: 18px;
    font-weight: 500;
    color: var(--text);
    margin: 0 0 10px;
  }
  .uform__req{ color:#ff2d2d; margin-left:2px; }

  .uform__input{
    width: 100%;
    border: 0;
    outline: none;
    background: transparent;
    font-size: 18px;
    padding: 14px 2px 12px;
    color: var(--text);

    /* underline */
    border-bottom: 2px solid var(--line);
  }

  /* placeholder sutil */
  .uform__input::placeholder{ color: rgba(11,15,26,.35); }

  /* foco accesible (sin “borde” feo) */
  .uform__input:focus{
    border-bottom-width: 3px;
  }

  /* botón opcional */
  .uform__btn{
    border: 0;
    background: var(--text);
    color: white;
    padding: 12px 16px;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
  }
  .uform__btn:focus-visible{
    outline: 3px solid var(--brand-dark);
    outline-offset: 3px;
  }

  /* responsive */
  @media (max-width: 720px){
    .uform{ padding: 18px 16px; }
    .uform__row--2{ grid-template-columns: 1fr; }
    .uform__label, .uform__input{ font-size: 16px; }
  }
  /* ===== Interacción input (hover / focus) ===== */

.uform__input{
  transition:
    background-color 0.25s ease,
    border-bottom-color 0.25s ease;
}

/* Hover */
.uform__input:hover{
  background-color: rgba(0,0,0,0.03); /* gris muy suave */
  border-bottom-color: var(--brand)
}

/* Focus (click / teclado) */
.uform__input:focus{
  background-color: rgba(0,0,0,0.05); /* un poco más marcado */
  border-bottom-color: var(--brand)
}

/* Evitar highlight raro en mobile */
.uform__input{
  -webkit-tap-highlight-color: transparent;
}

</style>

        
    </div>
</section>

