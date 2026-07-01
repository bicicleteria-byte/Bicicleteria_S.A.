<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bicicleteria S.A</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="navbar">
  <div class="logo-contenedor">
    <img src="./Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
    <h1 class="logo-texto">Bicicleteria S.A</h1>
  </div>
  <nav class="menu">
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#productos">Productos</a></li>
      <li><a href="./paginas/registro.php">Registro</a></li>
         <li><a href="./paginas/perfil.php">perfil</a></li>
      <li><a href="./paginas/beneficios.html">Contacto</a></li>
    </ul>
  </nav>
</header>

<!-- 1. HERO PRINCIPAL -->
<section class="hero-main" id="inicio">
  <div class="hero-main-contenido">
    <span class="seccion-eyebrow">Bicicleteria S.A · Desde siempre rodando contigo</span>
    <h1>Vive el camino sobre <span>dos ruedas</span></h1>
    <p>Bicicletas, repuestos y mantenimiento experto para que cada salida sea perfecta. Calidad premium, asesoría real.</p>
    <div class="hero-main-ctas">
      <a href="#productos" class="btn-primario">Ver productos</a>
      <a href="./paginas/registro.php" class="btn-secundario">Crear cuenta</a>
    </div>
  </div>
  <span class="hero-main-scroll"></span>
</section>

<!-- 2. CATEGORÍAS DESTACADAS -->
<section class="categorias">
  <span class="seccion-eyebrow">Explora</span>
  <h2>Categorías destacadas</h2>
  <p class="seccion-subtitulo">Todo lo que necesitas para rodar, mantenerte y mejorar tu bicicleta en un solo lugar.</p>

  <div class="categorias-grid">
    <a href="#productos" class="categoria-card">
      <img src="./productos/BicicletaAzul.jpg" alt="Bicicletas" />
      <div class="categoria-card-info">
        <span>Catálogo</span>
        <h3>Bicicletas</h3>
        <p>Modelos urbanos, montaña y ruta para cada estilo.</p>
      </div>
    </a>
    <a href="#productos" class="categoria-card">
      <img src="./productos/casco.jpg" alt="Repuestos y accesorios" />
      <div class="categoria-card-info">
        <span>Accesorios</span>
        <h3>Repuestos</h3>
        <p>Cascos, llantas, frenos, cadenas y mucho más.</p>
      </div>
    </a>
    <a href="./paginas/beneficios.html" class="categoria-card">
      <img src="./Imagenes/baisicol.png" alt="Servicios de mantenimiento" />
      <div class="categoria-card-info">
        <span>Taller</span>
        <h3>Mantenimiento</h3>
        <p>Servicio preventivo y correctivo con técnicos expertos.</p>
      </div>
    </a>
  </div>
</section>

<!-- 4. PRODUCTOS DESTACADOS -->
<section class="destacados" id="productos">
  <span class="seccion-eyebrow">Catálogo</span>
  <h2>Productos Destacados</h2>
  <p class="seccion-subtitulo">Una selección de nuestras bicicletas y accesorios más vendidos.</p>
  <div class="productos-grid" style="margin-top:50px;">
    <div class="producto">
      <img src="./productos/BicicletaAzul.jpg" alt="Bicicleta Azul" />
      <h3>Bicicleta Azul</h3>
      <p class="precio">$299.000</p>
      <button>Ver más</button>
    </div>
    <div class="producto">
      <img src="./productos/bicicletaamarilla.jpg" alt="Bicicleta Amarilla" />
      <h3>Bicicleta Amarilla</h3>
      <p class="precio">$259.000</p>
      <button>Ver más</button>
    </div>
    <div class="producto">
      <img src="./productos/bicicletaverde.png" alt="Bicicleta Verde" />
      <h3>Bicicleta Verde</h3>
      <p class="precio">$319.000</p>
      <button>Ver más</button>
    </div>
    <div class="producto">
      <img src="./productos/casco.jpg" alt="Casco Bicicleta" />
      <h3>Casco Bicicleta</h3>
      <p class="precio">$319.000</p>
      <button>Ver más</button>
    </div>
  </div>
</section>


<!-- 5. POR QUÉ ELEGIRNOS -->
<section class="elegirnos">
  <span class="seccion-eyebrow">Nuestro compromiso</span>
  <h2>Por qué elegirnos</h2>
  <p class="seccion-subtitulo">Más de un negocio: un equipo que conoce de bicicletas tanto como tú.</p>

  <div class="elegirnos-grid">
    <div class="elegirnos-card">
      <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 5v3h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>
        </svg>
      </div>
      <h3>Envío rápido</h3>
      <p>Tu pedido llega a tiempo, bien embalado y listo para rodar.</p>
    </div>
    <div class="elegirnos-card">
      <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/>
        </svg>
      </div>
      <h3>Pago seguro</h3>
      <p>Múltiples métodos de pago con total protección de tus datos.</p>
    </div>
    <div class="elegirnos-card">
      <div class="icono">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>
        </svg>
      </div>
      <h3>Calidad garantizada</h3>
      <p>Todas nuestras bicicletas cuentan con garantía del fabricante.</p>
    </div>
  </div>
</section>

<section class="beneficios-lista">
  <span class="seccion-eyebrow">Plataforma</span>
  <h2>Todo tu negocio, en un solo sistema</h2>
  <p class="seccion-subtitulo">Gestiona cada parte de tu bicicletería desde un mismo panel.</p>
  <div class="beneficios-grid">
    <div class="beneficio-box">
      <span>📦</span>
      <p><strong>Inventario</strong><br>Control en tiempo real de stock y existencias.</p>
    </div>
    <div class="beneficio-box">
      <span>💳</span>
      <p><strong>Ventas</strong><br>Registro ágil de ventas y facturación.</p>
    </div>
    <div class="beneficio-box">
      <span>🧑‍🤝‍🧑</span>
      <p><strong>Clientes</strong><br>Historial y seguimiento de cada cliente.</p>
    </div>
    <div class="beneficio-box">
      <span>🛠️</span>
      <p><strong>Mantenimientos</strong><br>Agenda y control de servicios técnicos.</p>
    </div>
    <div class="beneficio-box">
      <span>📊</span>
      <p><strong>Reportes</strong><br>Indicadores claros para tomar mejores decisiones.</p>
    </div>
  </div>
</section>

<!-- 7. LLAMADO A LA ACCIÓN FINAL -->
<section class="cta-final">
  <h2>Empieza a rodar con nosotros</h2>
  <p>Crea tu cuenta y accede a ofertas exclusivas, seguimiento de pedidos y mucho más.</p>
  <a href="./paginas/registro.php" class="btn-primario">Crear mi cuenta</a>
</section>

<section class="faq">
  <h2>Preguntas frecuentes</h2>

  <details>
    <summary>¿Cada cuánto debo hacer mantenimiento a mi bicicleta?</summary>
    <p>Se recomienda realizar una revisión general cada 3 a 6 meses, dependiendo de la frecuencia de uso.</p>
  </details>

  <details>
    <summary>¿Ofrecen servicio de reparación?</summary>
    <p>Sí, contamos con servicio de mantenimiento preventivo y correctivo para todo tipo de bicicletas.</p>
  </details>

  <details>
    <summary>¿Qué métodos de pago aceptan?</summary>
    <p>Aceptamos tarjetas débito y crédito, transferencias bancarias, Nequi, Daviplata y pagos en efectivo.</p>
  </details>

  <details>
    <summary>¿Venden repuestos y accesorios?</summary>
    <p>Sí, ofrecemos cascos, luces, llantas, cadenas, frenos, guantes y muchos más accesorios para ciclistas.</p>
  </details>

  <details>
    <summary>¿Las bicicletas tienen garantía?</summary>
    <p>Sí, todas nuestras bicicletas cuentan con garantía según las condiciones del fabricante.</p>
  </details>
</section>

<section class="newsletter">
  <h2>Recibe ofertas exclusivas</h2>
  <form>
    <input type="email" placeholder="Tu correo electrónico" required />
    <button type="submit">Suscribirme</button>
  </form>
</section>

<!-- 8. FOOTER PROFESIONAL -->
<footer class="footer">
  <div class="footer-logo">
    <img src="./Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
    <p>Bicicleteria S.A</p>
  </div>

  <div class="footer-links">
    <a href="#productos">Productos</a>
    <a href="#beneficios">Beneficios</a>
    <a href="./paginas/beneficios.html">Contacto</a>
  </div>

  <div class="footer-social">
    <a href="#"><img src="./Imagenes/instagram.svg" alt="Instagram" /></a>
    <a href="#"><img src="./Imagenes/facebook.svg" alt="Facebook" /></a>
    <a href="#"><img src="./Imagenes/tiktok.svg" alt="TikTok" /></a>
  </div>

  <p class="footer-copy">&copy; 2026 Bicicleteria S.A. Todos los derechos reservados.</p>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    let current = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
      });
    }

    function nextSlide() {
      current = (current + 1) % slides.length;
      showSlide(current);
    }

    if (slides.length) {
      setInterval(nextSlide, 5000);
      showSlide(current);
    }
  });
</script>

</body>
</html>