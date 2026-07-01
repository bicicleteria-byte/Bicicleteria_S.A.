<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catálogo — Bicicleteria S.A</title>
  <link rel="stylesheet" href="../css/style.css" />
  <style>
    /* ── Catálogo: estilos propios ── */
    .catalogo-hero {
      background: linear-gradient(100deg, rgba(11,18,32,0.96) 30%, rgba(11,18,32,0.70) 70%),
                  url('../Imagenes/baisicol.png') center/cover no-repeat;
      padding: 80px 8vw 64px;
      color: var(--text-light);
    }
    .catalogo-hero h1 {
      font-family: var(--font-display);
      font-size: clamp(2em, 4vw, 3.2em);
      font-weight: 800;
      letter-spacing: -0.02em;
      margin: 12px 0 10px;
      color: var(--text-light);
    }
    .catalogo-hero p {
      color: #CBD5E1;
      font-size: 1.05em;
      max-width: 520px;
      margin: 0;
      line-height: 1.65;
    }

    /* ── Layout principal ── */
    .catalogo-layout {
      display: flex;
      gap: 40px;
      max-width: 1260px;
      margin: 0 auto;
      padding: 56px 20px 96px;
      align-items: flex-start;
    }

    /* ── Sidebar de filtros ── */
    .filtros-sidebar {
      flex: 0 0 240px;
      position: sticky;
      top: 90px;
    }

    .filtros-sidebar h3 {
      font-family: var(--font-display);
      font-size: 0.8em;
      font-weight: 600;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin: 0 0 20px;
    }

    .filtro-grupo {
      margin-bottom: 32px;
    }

    .filtro-grupo h4 {
      font-family: var(--font-display);
      font-size: 0.88em;
      font-weight: 600;
      color: var(--text-dark);
      margin: 0 0 14px;
      padding-bottom: 10px;
      border-bottom: 1px solid var(--border-soft);
    }

    .filtro-grupo label {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.92em;
      color: var(--text-muted);
      margin-bottom: 10px;
      cursor: pointer;
      transition: color 0.2s;
    }
    .filtro-grupo label:hover { color: var(--text-dark); }

    .filtro-grupo input[type="checkbox"] {
      accent-color: var(--accent);
      width: 16px;
      height: 16px;
      cursor: pointer;
    }

    .filtro-grupo .count {
      margin-left: auto;
      font-size: 0.78em;
      background: var(--bg-light);
      border: 1px solid var(--border-soft);
      border-radius: 999px;
      padding: 1px 8px;
      color: var(--text-muted);
    }

    .rango-precio {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .rango-precio input[type="range"] {
      accent-color: var(--accent);
      width: 100%;
      cursor: pointer;
    }

    .rango-precio .rango-vals {
      display: flex;
      justify-content: space-between;
      font-size: 0.82em;
      color: var(--text-muted);
      font-weight: 500;
    }

    .btn-limpiar {
      display: block;
      width: 100%;
      padding: 10px;
      font-family: var(--font-body);
      font-size: 0.88em;
      font-weight: 600;
      color: var(--text-muted);
      background: transparent;
      border: 1.5px solid var(--border-soft);
      border-radius: 8px;
      cursor: pointer;
      transition: border-color 0.2s, color 0.2s;
      margin-top: 4px;
    }
    .btn-limpiar:hover {
      border-color: var(--text-dark);
      color: var(--text-dark);
    }

    /* ── Área de productos ── */
    .catalogo-main { flex: 1 1 0; min-width: 0; }

    .catalogo-toolbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 14px;
      margin-bottom: 32px;
      padding-bottom: 20px;
      border-bottom: 1px solid var(--border-soft);
    }

    .catalogo-toolbar p {
      font-size: 0.92em;
      color: var(--text-muted);
      margin: 0;
    }

    .catalogo-toolbar p strong {
      color: var(--text-dark);
      font-weight: 600;
    }

    .toolbar-right {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .sort-select {
      font-family: var(--font-body);
      font-size: 0.88em;
      color: var(--text-dark);
      background: var(--bg-card);
      border: 1.5px solid var(--border-soft);
      border-radius: 8px;
      padding: 9px 14px;
      cursor: pointer;
      transition: border-color 0.2s;
    }
    .sort-select:focus { outline: none; border-color: var(--accent); }

    .vista-btns { display: flex; gap: 6px; }
    .vista-btn {
      width: 36px; height: 36px;
      display: flex; align-items: center; justify-content: center;
      border: 1.5px solid var(--border-soft);
      border-radius: 8px;
      background: var(--bg-card);
      cursor: pointer;
      transition: border-color 0.2s, background 0.2s;
      color: var(--text-muted);
    }
    .vista-btn.active, .vista-btn:hover {
      border-color: var(--accent);
      background: var(--accent-soft);
      color: var(--accent-dark);
    }

    /* Tags de filtros activos */
    .filtros-activos {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 24px;
    }
    .filtro-tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.82em;
      font-weight: 500;
      color: var(--accent-dark);
      background: var(--accent-soft);
      border: 1px solid rgba(34,197,94,0.25);
      border-radius: 999px;
      padding: 5px 12px;
      cursor: pointer;
      transition: background 0.2s;
    }
    .filtro-tag:hover { background: rgba(34,197,94,0.2); }
    .filtro-tag svg { opacity: 0.6; }

    /* Grid de productos — hereda .productos-grid + .producto del CSS global */
    #productos-grid { grid-template-columns: repeat(3, 1fr); }

    /* Badge de categoría dentro de la tarjeta */
    .producto-badge {
      position: absolute;
      top: 14px;
      left: 14px;
      font-size: 0.68em;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      background: var(--bg-card);
      color: var(--accent-dark);
      padding: 4px 10px;
      border-radius: 999px;
      box-shadow: var(--shadow-sm);
      z-index: 10;
    }

    /* Paginación */
    .paginacion {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
      margin-top: 56px;
    }
    .pag-btn {
      min-width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1.5px solid var(--border-soft);
      border-radius: 8px;
      background: var(--bg-card);
      font-size: 0.88em;
      font-weight: 600;
      color: var(--text-muted);
      cursor: pointer;
      padding: 0 10px;
      transition: all 0.2s;
      font-family: var(--font-body);
    }
    .pag-btn.active {
      background: var(--text-dark);
      color: #fff;
      border-color: var(--text-dark);
    }
    .pag-btn:hover:not(.active) {
      border-color: var(--accent);
      color: var(--accent-dark);
    }
    /* Buscador */
    /* ===== Buscador ===== */
.buscador-productos{
    width:280px;
    height:42px;
    padding:0 18px;
    border:1.5px solid var(--border-soft);
    border-radius:10px;
    background:var(--bg-card);
    color:var(--text-dark);
    font-family:var(--font-body);
    font-size:.9rem;
    transition:all .25s ease;
    box-sizing:border-box;
}

.buscador-productos::placeholder{
    color:var(--text-muted);
}

.buscador-productos:hover{
    border-color:#cbd5e1;
}

.buscador-productos:focus{
    outline:none;
    border-color:var(--accent);
    box-shadow:0 0 0 4px rgba(34,197,94,.15);
}

    /* Responsive catálogo */
    @media (max-width: 900px) {
      .catalogo-layout { flex-direction: column; gap: 28px; }
      .filtros-sidebar { position: static; flex: none; width: 100%; display: flex; flex-wrap: wrap; gap: 20px; }
      .filtro-grupo { flex: 1 1 180px; margin-bottom: 0; }
      #productos-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 480px) {
      #productos-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- NAVBAR (idéntico al index) -->
<header class="navbar">
  <div class="logo-contenedor">
    <img src="../Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
    <h1 class="logo-texto">Bicicleteria S.A</h1>
  </div>
  <nav class="menu">
    <ul>
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="registro.php">Registro</a></li>
      <li><a href="beneficios.html">Contacto</a></li>
    </ul>
  </nav>
</header>

<!-- HERO DEL CATÁLOGO -->
<section class="catalogo-hero">
  <span class="seccion-eyebrow">Catálogo completo</span>
  <h1>Encuentra tu bicicleta perfecta</h1>
  <p>Explora nuestra colección de bicicletas, repuestos y accesorios para cada tipo de ciclista.</p>
</section>

<!-- LAYOUT: FILTROS + PRODUCTOS -->
<div class="catalogo-layout">
  <!-- ÁREA PRINCIPAL -->
  <div class="catalogo-main">

    <!-- Toolbar -->
    <div class="catalogo-toolbar">
      <p>Mostrando <strong>10 productos</strong> de 15</p>
      <div class="toolbar-right">
     <div class="contenedor-buscador">

    <svg class="icono-busqueda" xmlns="http://www.w3.org/2000/svg"
         width="18" height="18" fill="none"
         viewBox="0 0 24 24" stroke="currentColor">

        <circle cx="11" cy="11" r="7" stroke-width="2"/>
        <path d="M20 20l-3.5-3.5" stroke-width="2"
              stroke-linecap="round"/>

    </svg>

    <input type="text" id="buscador"  class="buscador-productos" placeholder="Buscar productos...">

</div>
        <select class="sort-select">
          <option>Más relevantes</option>
          <option>Precio: menor a mayor</option>
          <option>Precio: mayor a menor</option>
          <option>Más nuevos</option>
        </select>
        <div class="vista-btns">
          <!-- Vista grilla -->
          <button class="vista-btn active" title="Vista grilla"
                  onclick="setVista('grid',this)">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <rect x="1" y="1" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
              <rect x="9" y="1" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
              <rect x="1" y="9" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
              <rect x="9" y="9" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
            </svg>
          </button>
          <!-- Vista lista -->
          <button class="vista-btn" title="Vista lista"
                  onclick="setVista('list',this)">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <rect x="1" y="2" width="14" height="3" rx="1" stroke="currentColor" stroke-width="1.5"/>
              <rect x="1" y="7" width="14" height="3" rx="1" stroke="currentColor" stroke-width="1.5"/>
              <rect x="1" y="12" width="14" height="3" rx="1" stroke="currentColor" stroke-width="1.5"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Tags de filtros activos -->
    <div class="filtros-activos">
      <span class="filtro-tag">
        Bicicletas
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M9 3L3 9M3 3l6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </span>
      <span class="filtro-tag">
        Accesorios
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M9 3L3 9M3 3l6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </span>
      <span class="filtro-tag">
        Urbana
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
          <path d="M9 3L3 9M3 3l6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </span>
    </div>

    <!-- Grid de productos -->
    <div class="productos-grid" id="productos-grid">

      <div class="producto">
        <span class="etiqueta">Más vendido</span>
        <img src="../productos/BicicletaAzul.jpg" alt="Bicicleta Urbana Azul" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Urbana</span>
        <h3>Bicicleta Urbana Azul</h3>
        <p class="precio">$299.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <img src="../productos/bicicletaamarilla.jpg" alt="Bicicleta Urbana Amarilla" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Urbana</span>
        <h3>Bicicleta Urbana Amarilla</h3>
        <p class="precio">$259.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <span class="etiqueta">Nuevo</span>
        <img src="../productos/bicicletaverde.png" alt="Bicicleta Verde" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Ruta</span>
        <h3>Bicicleta de Ruta Verde</h3>
        <p class="precio">$319.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <img src="../productos/BicicletaAzul.jpg" alt="Bicicleta Montaña" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Montaña</span>
        <h3>Bicicleta de Montaña Pro</h3>
        <p class="precio">$489.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <img src="../productos/bicicletaamarilla.jpg" alt="Bicicleta Plegable" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Urbana</span>
        <h3>Bicicleta Plegable City</h3>
        <p class="precio">$375.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <span class="etiqueta">Oferta</span>
        <img src="../productos/bicicletaverde.png" alt="Bicicleta Clásica" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Urbana</span>
        <h3>Bicicleta Clásica Retro</h3>
        <p class="precio" style="text-decoration:line-through;color:var(--text-muted);font-size:0.9em;">$280.000</p>
        <p class="precio" style="margin-top:-10px;">$219.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <img src="../productos/casco.jpg" alt="Casco Ciclista" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Accesorio</span>
        <h3>Casco Ciclista Pro</h3>
        <p class="precio">$89.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <img src="../productos/casco.jpg" alt="Casco Urbano" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Accesorio</span>
        <h3>Casco Urbano Liviano</h3>
        <p class="precio">$65.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <img src="../productos/casco.jpg" alt="Luces LED" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Accesorio</span>
        <h3>Kit Luces LED Delantera y Trasera</h3>
        <p class="precio">$45.000</p>
        <button>Ver más</button>
      </div>

      <div class="producto">
        <img src="../productos/casco.jpg" alt="Candado" />
        <span style="font-size:0.72em;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-muted);">Accesorio</span>
        <h3>Candado de Seguridad Reforzado</h3>
        <p class="precio">$38.000</p>
        <button>Ver más</button>
      </div>

    </div><!-- /productos-grid -->

    <!-- Paginación -->
    <div class="paginacion">
      <button class="pag-btn" aria-label="Página anterior">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M10 12L6 8l4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <button class="pag-btn active">1</button>
      <button class="pag-btn">2</button>
      <button class="pag-btn">3</button>
      <span style="color:var(--text-muted);font-size:0.88em;padding:0 4px;">…</span>
      <button class="pag-btn">8</button>
      <button class="pag-btn" aria-label="Página siguiente">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M6 12l4-4-4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>

  </div><!-- /catalogo-main -->
</div><!-- /catalogo-layout -->

<!-- FOOTER (idéntico al index) -->
<footer class="footer">
  <div class="footer-logo">
    <img src="../Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
    <p>Bicicleteria S.A</p>
  </div>
  <div class="footer-links">
    <a href="../index.php#productos">Productos</a>
    <a href="../index.php#beneficios">Beneficios</a>
    <a href="beneficios.html">Contacto</a>
  </div>
  <div class="footer-social">
    <a href="#"><img src="../Imagenes/instagram.svg" alt="Instagram" /></a>
    <a href="#"><img src="../Imagenes/facebook.svg" alt="Facebook" /></a>
    <a href="#"><img src="../Imagenes/tiktok.svg" alt="TikTok" /></a>
  </div>
  <p class="footer-copy">&copy; 2026 Bicicleteria S.A. Todos los derechos reservados.</p>
</footer>

<script>
  // Cambio de vista grilla / lista
  function setVista(tipo, btn) {
    const grid = document.getElementById('productos-grid');
    document.querySelectorAll('.vista-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    if (tipo === 'list') {
      grid.style.gridTemplateColumns = '1fr';
      grid.querySelectorAll('.producto').forEach(p => {
        p.style.flexDirection = 'row';
        p.style.gap = '20px';
        const img = p.querySelector('img');
        if (img) { img.style.width = '160px'; img.style.height = '120px'; img.style.marginBottom = '0'; }
      });
    } else {
      grid.style.gridTemplateColumns = '';
      grid.querySelectorAll('.producto').forEach(p => {
        p.style.flexDirection = '';
        p.style.gap = '';
        const img = p.querySelector('img');
        if (img) { img.style.width = ''; img.style.height = ''; img.style.marginBottom = ''; }
      });
    }
  }

  // Paginación simple
  document.querySelectorAll('.pag-btn').forEach(btn => {
    if (!btn.getAttribute('aria-label')) {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.pag-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
      });
    }
  });

  // Filtros — cerrar tag
  document.querySelectorAll('.filtro-tag').forEach(tag => {
    tag.addEventListener('click', () => tag.remove());
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", () => {

    const buscador = document.getElementById("buscador");

    buscador.addEventListener("input", () => {

        const texto = buscador.value.toLowerCase().trim();

        const productos = document.querySelectorAll(".producto");

        productos.forEach(producto => {

            const nombre = producto.querySelector("h3").textContent.toLowerCase();

            if (nombre.includes(texto)) {
                producto.style.display = "";
            } else {
                producto.style.display = "none";
            }

        });

    });

});
</script>

</body>
    

</html>