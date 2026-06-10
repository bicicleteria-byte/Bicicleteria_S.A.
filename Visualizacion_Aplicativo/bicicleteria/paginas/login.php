<?php

include("../conexion.php");

if(isset($_POST['ingresar']))
{
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // ADMINISTRADOR
    $sqlAdmin = "SELECT * FROM administrador
                 WHERE correo='$correo'
                 AND contrasena='$contrasena'";

    $resultadoAdmin = mysqli_query($conexion, $sqlAdmin);

    if(mysqli_num_rows($resultadoAdmin) > 0)
    {
        header("Location: ../menucrud.php");
        exit();
    }

   
    $sqlEmpleado = "SELECT * FROM empleado
                    WHERE correo='$correo'
                    AND contrasena='$contrasena'";

    $resultadoEmpleado = mysqli_query($conexion, $sqlEmpleado);

    if(mysqli_num_rows($resultadoEmpleado) > 0)
    {
        header("Location: ../menucrud.php");
        exit();
    }


    $sqlCliente = "SELECT * FROM cliente
                   WHERE correo='$correo'
                   AND contrasena='$contrasena'";

    $resultadoCliente = mysqli_query($conexion, $sqlCliente);

    if(mysqli_num_rows($resultadoCliente) > 0)
    {
        header("Location: ../index.php");
        exit();
    }

    echo "Correo o contraseña incorrectos";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar sesión | Bicicleteria S.A</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

  <!-- Header / Navbar -->
  <header class="navbar">
    <div class="logo-contenedor">
      <img src="../Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
      <h1 class="logo-texto">Bicicleteria S.A</h1>
    </div>
    <nav class="menu">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="catalogo.html">Productos</a></li>
        <li><a href="Registro.html">Registro</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
  </header>


  <!-- Sección de inicio de sesión -->
  <section class="registro">
    <div class="registro-contenedor">
      <div class="registro-formulario">
        <h2>Iniciar sesión</h2>
        <form method="POST">
          <input type="email" name="correo" placeholder="Correo electrónico" required />
          <input type="password" name="contrasena" placeholder="Contraseña" required />
          <button type="submit" name="ingresar">Ingresar</button>
        </form>
        <div class="registro-login">
          ¿No tienes cuenta? <a href="Registro.html">Regístrate aquí</a>
        </div>
      </div>
      <div class="registro-texto">
        <h2>Beneficios para miembros</h2>
        <p class="subtitulo">Accede a experiencias exclusivas</p>
        <ul class="registro-beneficios">
 
<li>🎁 <strong>Descuentos especiales</strong> en cada temporada</li>
<li>🚀 <strong>Acceso anticipado</strong> a lanzamientos exclusivos</li>
<li>🎉 <strong>Sorteos mensuales</strong> y regalos sorpresa</li>


</ul>
        <div class="registro-friso">
          <div class="friso-item">
            <img src="" alt="Icono 1" />
            <p>Bicicletas deportivas</p>
          </div>
          <div class="friso-item">
            <img src="" alt="Icono 2" />
            <p>Accesorios</p>
          </div>
          <div class="friso-item">
            <img src="" alt="Icono 3" />
            <p>Diseño exclusivo</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer">
    <div class="footer-logo">
      <img src="../Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
      <p>Bicicleteria S.A</p>
    </div>

    <div class="footer-links">
      <a href="catalogo.html">Productos</a>
      <a href="#contacto">Contacto</a>
    </div>

    <div class="footer-social">
      <a href="#"><img src="../Imagenes/instagram.svg" alt="Instagram" /></a>
      <a href="#"><img src="../Imagenes/facebook.svg" alt="Facebook" /></a>
      <a href="#"><img src="../Imagenes/tiktok.svg" alt="TikTok" /></a>
    </div>

    <p class="footer-copy">&copy; 2026 Bicicleteria S.A. Todos los derechos reservados.</p>
  </footer>

</body>
</html>