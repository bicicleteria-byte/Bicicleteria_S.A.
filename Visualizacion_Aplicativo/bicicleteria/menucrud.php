<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
  <link rel="stylesheet" href="./css/style.css" />

</head>
<body>

<header class="navbar">

    <div class="logo-contenedor">
        <h1 class="logo-texto">Bicicleteria SA Admin</h1>
    </div>

    <nav class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </nav>

</header>

<section class="crud-panel">

    <h2>Panel Administrativo</h2>

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

        <a href=".crud/crud_proveedor.php" class="crud-card">
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

        <a href=".crud/crud_venta.php" class="crud-card">
            <div class="crud-icono">💰</div>
            <h3>Ventas</h3>
            <p>Administrar ventas realizadas</p>
        </a>

        <a href=".crud/crud_suministro.php" class="crud-card">
            <div class="crud-icono">📦</div>
            <h3>Suministros</h3>
            <p>Control de inventario</p>
        </a>

    </div>

</section>

<footer class="footer">
    <p class="footer-copy">
        © 2026 Bicicletería - Panel Administrativo
    </p>
</footer>

</body>
</html>