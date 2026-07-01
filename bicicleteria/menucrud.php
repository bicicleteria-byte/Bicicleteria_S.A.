<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
  <link rel="stylesheet" href="./css/style.css" />

</head>
<body>
<style>
    .crud-panel{
    max-width:1200px;
    margin:70px auto;
    padding:0 20px;
}

.crud-opciones{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:25px;
    margin-top:40px;
}

.crud-card{
    background:#fff;
    border:1px solid #E5E7EB;
    border-radius:18px;
    padding:30px 25px;
    text-align:center;
    text-decoration:none;
    color:#111827;
    transition:.35s;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
}

.crud-card:hover{
    transform:translateY(-8px);
    border-color:#22C55E;
    box-shadow:0 18px 35px rgba(34,197,94,.18);
}

.crud-icono{
    width:70px;
    height:70px;
    margin:0 auto 20px;
    border-radius:50%;
    background:#ECFDF5;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:35px;
}

.crud-card h3{
    margin-bottom:10px;
    font-size:22px;
    color:#111827;
}

.crud-card p{
    color:#6B7280;
    font-size:15px;
    line-height:1.5;
}
</style>
<header class="navbar">

    <div class="logo-contenedor">
        <h1 class="logo-texto">Bicicleteria SA Admin</h1>
    </div>

    <nav class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
            <li><a href="./paginas/perfil.php">perfil</a></li>
        </ul>
    </nav>

</header>

<section class="crud-panel">

    <!-- Carta del encabezado -->
    <div class="crud-header-card">
        <span class="seccion-eyebrow">Administración</span>
        <h2>Panel Administrativo</h2>
        <p>Gestiona todos los módulos del sistema desde un solo lugar.</p>
    </div>

    <!-- Carta de las opciones -->
    <div class="crud-content-card">

        <div class="crud-opciones">

            <a href="./crud/crud_categoria.php" class="crud-card">
                <div class="crud-icono">📂</div>
                <h3>Categorías</h3>
                <p>Gestionar categorías</p>
            </a>

            <a href="./crud/crud_producto.php" class="crud-card">
                <div class="crud-icono">🚲</div>
                <h3>Productos</h3>
                <p>Gestionar bicicletas y accesorios</p>
            </a>

            <a href="./crud/crud_proveedores.php" class="crud-card">
                <div class="crud-icono">🏭</div>
                <h3>Proveedores</h3>
                <p>Administrar proveedores</p>
            </a>

            <a href="./crud/crud_cliente.php" class="crud-card">
                <div class="crud-icono">👥</div>
                <h3>Clientes</h3>
                <p>Gestionar clientes registrados</p>
            </a>

            <a href="./crud/crud_servicio.php" class="crud-card">
                <div class="crud-icono">🔧</div>
                <h3>Servicios</h3>
                <p>Administrar reparaciones y mantenimiento</p>
            </a>

            <a href="./crud/crud_empleado.php" class="crud-card">
                <div class="crud-icono">👨‍🔧</div>
                <h3>Empleados</h3>
                <p>Gestionar empleados</p>
            </a>

            <a href="./crud/crud_venta.php" class="crud-card">
                <div class="crud-icono">💰</div>
                <h3>Ventas</h3>
                <p>Administrar ventas realizadas</p>
            </a>

            <a href="./crud/crud_suministro.php" class="crud-card">
                <div class="crud-icono">📦</div>
                <h3>Suministros</h3>
                <p>Control de inventario</p>
            </a>

        </div>

    </div>

</section>

</section>

<footer class="footer">
    <p class="footer-copy">
        © 2026 Bicicletería - Panel Administrativo
    </p>
</footer>

</body>
</html>