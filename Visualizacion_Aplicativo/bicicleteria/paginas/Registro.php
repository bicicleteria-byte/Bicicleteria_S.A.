<?php

include("../conexion.php");

if(isset($_POST['registrar']))
{
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $contrasena = $_POST['contrasena'];

    $sql = "INSERT INTO cliente
    (nombre, telefono, correo, direccion, contrasena)
    VALUES
    ('$nombre','$telefono','$correo','$direccion','$contrasena')";

    mysqli_query($conexion, $sql);
    
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<body>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro - Bicicleteria S.A</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
   <header class="navbar">
  <div class="logo-contenedor">
    <img src="../Imagenes/logobici.png" alt="Logo Bicicleteria SA" />
    <h1 class="logo-texto">Bicicleteria S.A</h1>
  </div>
  <nav class="menu">
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#productos">Productos</a></li>
      <li><a href="#beneficios">Beneficios</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </nav>
</header>
 <section class="registro">
  <div class="registro-contenedor">
    <div class="registro-texto">
      <h2>Regístrate</h2>
      <p class="subtitulo">Únete a la comunidad que vive el deporte con estilo</p>
      <ul class="registro-beneficios">
        <li>🎁 Ofertas exclusivas solo para miembros</li>
        <li>🚚 Envíos rápidos y seguimiento personalizado</li>
        <li>🚲 Acceso anticipado a nuevos lanzamientos</li>
      </ul>
    </div>

    <div class="registro-formulario">
      <form method="POST">

    <input type="text" name="nombre" placeholder="Nombre" required />

    <input type="text" name="telefono" placeholder="Telefono" required />

    <input type="email" name="correo" placeholder="Correo electrónico" required />

    <input type="text" name="direccion" placeholder="Direccion" required />

    <input type="password" name="contrasena" placeholder="Contraseña" required />

    <p class="registro-login">
        ¿Ya tienes cuenta?
        <a href="login.php">Inicia sesión</a>
    </p>

    <button type="submit" name="registrar">
        📝 Crear cuenta
    </button>

</form>
    </div>
  </div>
  <div class="registro-friso">
  <div class="friso-item">
    <img src="" alt="Envío rápido" />
    <p>Envío rápido</p>
  </div>
  <div class="friso-item">
    <img src="" alt="Calidad garantizada" />
    <p>Calidad garantizada</p>
  </div>
  <div class="friso-item">
    <img src="" alt="Pago seguro" />
    <p>Pago seguro</p>
  </div>
</div>
</section>

 <footer class="footer">
  <div class="footer-logo">
    <img src="../Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
    <p>Bicicleteria S.A</p>
  </div>

  <div class="footer-links">
    <a href="#productos">Productos</a>
    <a href="#beneficios">Beneficios</a>
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