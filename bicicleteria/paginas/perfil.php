<?php

session_start();
include("../conexion.php");

$id = $_SESSION['id_cliente'];

$sql = "SELECT * FROM cliente WHERE id_cliente = '$id'";

$resultado = mysqli_query($conexion,$sql);

$cliente = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>perfil</title>
</head>

<style>

/* ===== PERFIL ===== */

.perfil-container{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:60px 20px;
    background:linear-gradient(135deg,#eef7f1,#dcefe4);
}

.perfil-card{
    width:100%;
    max-width:520px;
    background:#ffffff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 15px 35px rgba(0,0,0,.12);
}

.perfil-header{
    background:linear-gradient(135deg,#22c55e,#16a34a);
    color:white;
    padding:35px;
    text-align:center;
}

.perfil-avatar{
    width:95px;
    height:95px;
    margin:0 auto 15px;
    border-radius:50%;
    background:white;
    color:#16a34a;
    font-size:42px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.perfil-header h2{
    margin:0;
    font-size:1.8rem;
}

.perfil-body{
    padding:30px;
}

.perfil-info{
    margin-bottom:18px;
}

.perfil-info label{
    display:block;
    margin-bottom:6px;
    font-size:.85rem;
    color:#6b7280;
    font-weight:600;
}

.perfil-info p{
    margin:0;
    padding:14px;
    background:#f5f7fa;
    border-left:5px solid #22c55e;
    border-radius:10px;
    font-weight:500;
}

.btn-perfil{
    display:block;
    width:100%;
    margin-top:25px;
    padding:14px;
    border-radius:10px;
    background:#22c55e;
    color:white;
    text-align:center;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.btn-perfil:hover{
    background:#15803d;
    transform:translateY(-2px);
}
</style>
<body>
    <header class="navbar">
  <div class="logo-contenedor">
    <img src="../Imagenes/logobici.png" alt="Logo Bicicleteria S.A" />
    <h1 class="logo-texto">Bicicleteria S.A</h1>
  </div>

  <nav class="menu">
    <ul>
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../index.php#productos">Productos</a></li>
      <li><a href="perfil.php">Mi Perfil</a></li>
      <li><a href="beneficios.html">Contacto</a></li>
      <li><a href="logout.php">Cerrar sesión</a></li>
    </ul>
  </nav>
</header>
   <div class="perfil-container">

    <div class="perfil-card">

        <div class="perfil-header">

            <div class="perfil-avatar">
                👤
            </div>

            <h2>Mi Perfil</h2>

        </div>

        <div class="perfil-body">

            <div class="perfil-info">
                <label>Nombre</label>
                <p><?php echo $cliente['nombre']; ?></p>
            </div>

            <div class="perfil-info">
                <label>Correo</label>
                <p><?php echo $cliente['correo']; ?></p>
            </div>

            <div class="perfil-info">
                <label>Teléfono</label>
                <p><?php echo $cliente['telefono']; ?></p>
            </div>

            <div class="perfil-info">
                <label>Dirección</label>
                <p><?php echo $cliente['direccion']; ?></p>
            </div>

            <a href="editar_perfil.php" class="btn-perfil">
                Editar perfil
            </a>

        </div>

    </div>

</div>
</body>
</html>