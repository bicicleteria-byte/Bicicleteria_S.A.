
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bicicleteria S.A</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>
<?php
include("conexion.php");
echo "Conectado correctamente";
?>
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
      <li><a href="./paginas/beneficios.html">Contacto</a></li>
    </ul>
  </nav>
</header>
 
<section class="slider" id="inicio">
  <div class="slides">
    <div class="slide active">
      <img src="./slider/slider1.jpg" alt="Air Blaze X"/>
    </div>
    <div class="slide">
      <img src="./slider/slider2.jpg" alt="Urban Pulse" />
    </div>
    <div class="slide">
      <img src="./slider/Slider3.jpg" alt="Street Runner" />
    </div>
  </div>
</section>
 
<section class="destacados" id="productos">
  <h2>Productos Destacados</h2>
  <div class="productos-grid">
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
 
<div class="beneficios">
  <div class="beneficio">
    <div class="icono">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 5v3h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>
      </svg>
    </div>
    <p>Envío rápido</p>
  </div>
  <div class="beneficio">
    <div class="icono">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/>
      </svg>
    </div>
    <p>Pago seguro</p>
  </div>
  <div class="beneficio">
    <div class="icono">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>
      </svg>
    </div>
    <p>Calidad garantizada</p>
  </div>
</div>
 
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
 
<footer class="footer">
  <div class="footer-logo">
    <img src="./Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
    <p>Bicicleteria S.A</p>
  </div>
 
  <div class="footer-links">
    <a href="#productos">Productos</a>
    <a href="#beneficios">Beneficios</a>
    <a href="#contacto">Contacto</a>
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
 
    setInterval(nextSlide, 5000);
    showSlide(current);
  });
</script>
 
</body>
</html>