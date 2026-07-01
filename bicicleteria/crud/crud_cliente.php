<?php
include("../conexion.php");

// Métrica total clientes
$sql_total = "SELECT COUNT(*) AS total FROM cliente";
$total = mysqli_fetch_assoc(mysqli_query($conexion, $sql_total))['total'];

// Búsqueda
$buscar = isset($_GET['q']) ? mysqli_real_escape_string($conexion, $_GET['q']) : '';

$sql = $buscar
    ? "SELECT * FROM cliente
       WHERE nombre LIKE '%$buscar%'
       OR correo LIKE '%$buscar%'
       OR telefono LIKE '%$buscar%'
       OR id_cliente LIKE '%$buscar%'"
    : "SELECT * FROM cliente";

$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestionar Productos — Bicicleteria SA</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
  <style>
    /* ── Layout ── */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Segoe UI', sans-serif; background: #F8FAFC; display: flex; min-height: 100vh; }
 
    /* ── Sidebar ── */
    .sidebar {
      position: fixed; left: 0; top: 0; height: 100%; width: 230px;
      background: #111827; padding: 24px 16px;
      display: flex; flex-direction: column; gap: 4px; z-index: 100;
    }
    .sidebar-brand {
      font-size: 20px; font-weight: 700; color: #22C55E;
      margin-bottom: 32px; padding: 0 8px;
      display: flex; align-items: center; gap: 10px;
    }
    .sidebar-brand i { font-size: 24px; }
    .nav-item {
      display: flex; align-items: center; gap: 10px;
      padding: 10px 12px; border-radius: 8px;
      color: #9CA3AF; font-size: 14px; font-weight: 500;
      text-decoration: none; transition: background .15s, color .15s;
    }
    .nav-item:hover { background: rgba(255,255,255,.07); color: #fff; }
    .nav-item.active { background: #22C55E; color: #fff; }
    .nav-item i { font-size: 19px; }
    .nav-spacer { flex: 1; }
 
    /* ── Main ── */
    .main {
      margin-left: 230px; padding: 36px 32px;
      flex: 1; min-height: 100vh;
    }
 
    /* ── Topbar ── */
    .topbar {
      display: flex; justify-content: space-between;
      align-items: center; margin-bottom: 28px;
    }
    .topbar h1 { font-size: 22px; font-weight: 700; color: #111827; }
    .btn-agregar {
      display: inline-flex; align-items: center; gap: 7px;
      background: #22C55E; color: #fff; border: none;
      padding: 10px 20px; border-radius: 8px;
      font-size: 14px; font-weight: 600;
      text-decoration: none; cursor: pointer;
      transition: background .2s;
    }
    .btn-agregar:hover { background: #22C55E; }
    .btn-agregar i { font-size: 17px; }
 
    /* ── Métricas ── */
    .stats {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 16px; margin-bottom: 28px;
    }
    .stat-card {
      background: #fff; border-radius: 10px;
      border: 1px solid #E5E7EB; padding: 20px 24px;
    }
    .stat-card .stat-label {
      font-size: 12px; color: #6B7280;
      margin-bottom: 8px; display: flex;
      align-items: center; gap: 6px;
    }
    .stat-card .stat-label i { font-size: 15px; }
    .stat-card .stat-val { font-size: 28px; font-weight: 700; color: #111827; }
    .stat-card.danger .stat-val { color: #111827; }
 
    /* ── Tabla ── */
    .tabla-wrap {
      background: #fff; border-radius: 12px;
      border: 1px solid #E5E7EB; overflow: hidden;
    }
    .tabla-header {
      display: flex; justify-content: space-between;
      align-items: center; padding: 18px 24px;
      border-bottom: 1px solid #E5E7EB;
    }
    .tabla-header span { font-size: 15px; font-weight: 600; color: #111827; }
 
    /* Buscador */
    .search-form { display: flex; align-items: center; gap: 8px; }
    .search-box {
      display: flex; align-items: center; gap: 8px;
      background: #F8FAFC; border: 1px solid #E5E7EB;
      border-radius: 8px; padding: 8px 14px;
    }
    .search-box i { font-size: 16px; color: #9CA3AF; }
    .search-box input {
      border: none; background: transparent; outline: none;
      font-size: 13px; color: #111827; width: 200px;
    }
    .btn-buscar {
      background: #22C55E; color: #fff; border: none;
      padding: 9px 16px; border-radius: 8px;
      font-size: 13px; font-weight: 600; cursor: pointer;
      transition: background .2s;
    }
    .btn-buscar:hover { background: #22C55E; }
 
    table { width: 100%; border-collapse: collapse; }
    thead th {
      padding: 12px 24px; text-align: left;
      font-size: 12px; font-weight: 600; color: #6B7280;
      background: #F9FAFB; text-transform: uppercase;
      letter-spacing: .05em;
      border-bottom: 1px solid #E5E7EB;
    }
    tbody td {
      padding: 15px 24px; font-size: 14px;
      color: #111827; border-bottom: 1px solid #F3F4F6;
    }
    tbody tr:last-child td { border-bottom: none; }
    tbody tr:hover td { background: #F8FAFC; }
    .id-cell { color: #9CA3AF; font-size: 13px; }
 
    /* Badges */
    .badge {
      display: inline-flex; align-items: center; gap: 5px;
      padding: 4px 10px; border-radius: 20px;
      font-size: 12px; font-weight: 600;
    }
    .badge i { font-size: 13px; }
    .badge-ok  { background: #DCFCE7; color: #15803D; }
    .badge-low { background: #FEF3C7; color: #92400E; }
    .badge-out { background: #FEE2E2; color: #991B1B; }
 
    /* Acciones */
    .actions { display: flex; gap: 8px; }
    .btn-editar {
      display: inline-flex; align-items: center; gap: 5px;
      padding: 7px 14px; border-radius: 7px;
      border: 1px solid #D1D5DB; background: #fff;
      font-size: 13px; font-weight: 500; color: #374151;
      text-decoration: none; transition: background .15s, border .15s;
    }
    .btn-editar:hover { background: #F3F4F6; border-color: #9CA3AF; }
    .btn-editar i { font-size: 15px; }
    .btn-eliminar {
      display: inline-flex; align-items: center; gap: 5px;
      padding: 7px 14px; border-radius: 7px;
      border: 1px solid #FECACA; background: #fff;
      font-size: 13px; font-weight: 500; color: #DC2626;
      text-decoration: none; transition: background .15s;
    }
    .btn-eliminar:hover { background: #FEF2F2; }
    .btn-eliminar i { font-size: 15px; }
 
    /* Vacío */
    .empty-row td {
      text-align: center; padding: 48px;
      color: #9CA3AF; font-size: 14px;
    }
    .empty-row i { font-size: 40px; display: block; margin-bottom: 10px; }
 
    /* Responsivo */
    @media (max-width: 900px) {
      .sidebar { width: 64px; padding: 16px 8px; }
      .sidebar-brand span, .nav-item span { display: none; }
      .sidebar-brand { justify-content: center; }
      .nav-item { justify-content: center; padding: 12px; }
      .main { margin-left: 64px; padding: 24px 16px; }
      .stats { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
 
<!-- ═══ SIDEBAR ═══ -->
<aside class="sidebar">
  <div class="sidebar-brand">
    <i class="ti ti-bike"></i>
    <span>Bicicleteria SA</span>
  </div>
 
  <a href="panel.php" class="nav-item">
    <i class="ti ti-layout-dashboard"></i>
    <span>Inicio</span>
  </a>

  <a href="gestionar_clientes.php" class="nav-item active">
    <i class="ti ti-users"></i>
    <span>Clientes</span>
  </a>


  <div class="nav-spacer"></div>

  <a href="../menucrud.php" class="nav-item">
    <i class="ti ti-arrow-left"></i>
    <span>Volver al sitio</span>
  </a>
</aside>
 
<!-- ═══ CONTENIDO PRINCIPAL ═══ -->
<main class="main">
 
  <!-- Topbar -->
  <div class="topbar">
    <h1>Gestionar Clientes</h1>

    <a href="agregar_cliente.php" class="btn-agregar">
      <i class="ti ti-plus"></i> Nuevo cliente
    </a>
  </div>
 
  <!-- Métricas -->
  <div class="stats">
    <div class="stat-card">
      <div class="stat-label">
        <i class="ti ti-users"></i> Total clientes
      </div>
      <div class="stat-val">
        <?php echo $total; ?>
      </div>
    </div>
  </div>
 
  <!-- Tabla -->
  <div class="tabla-wrap">
    <div class="tabla-header">

      <span>
        Todos los clientes
        <?php if($buscar) echo "— <em style='font-weight:400;color:#6B7280'>\"$buscar\"</em>"; ?>
      </span>
 
      <!-- Buscador -->
      <form class="search-form" method="GET" action="">
        <div class="search-box">
          <i class="ti ti-search"></i>
          <input
            type="text"
            name="q"
            placeholder="Buscar cliente..."
            value="<?php echo htmlspecialchars($buscar); ?>">
        </div>

        <button type="submit" class="btn-buscar">
          Buscar
        </button>

        <?php if($buscar): ?>
          <a href="gestionar_clientes.php" class="btn-editar" style="border-color:#E5E7EB">
            <i class="ti ti-x"></i> Limpiar
          </a>
        <?php endif; ?>
      </form>

    </div>
 
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Dirección</th>
          <th>Acciones</th>
        </tr>
      </thead>

      <tbody>

        <?php if(mysqli_num_rows($resultado) === 0): ?>

          <tr class="empty-row">
            <td colspan="6">
              <i class="ti ti-users-off"></i>
              No se encontraron clientes<?php echo $buscar ? " para \"$buscar\"" : ''; ?>
            </td>
          </tr>

        <?php else: ?>

          <?php while($fila = mysqli_fetch_assoc($resultado)): ?>

            <tr>

              <td class="id-cell">
                #<?php echo str_pad($fila['id_cliente'], 3, '0', STR_PAD_LEFT); ?>
              </td>

              <td>
                <strong><?php echo htmlspecialchars($fila['nombre']); ?></strong>
              </td>

              <td>
                <?php echo htmlspecialchars($fila['telefono']); ?>
              </td>

              <td>
                <?php echo htmlspecialchars($fila['correo']); ?>
              </td>

              <td>
                <?php echo htmlspecialchars($fila['direccion']); ?>
              </td>

              <td>
                <div class="actions">

                  <a href="editar_cliente.php?id=<?php echo $fila['id_cliente']; ?>" class="btn-editar">
                    <i class="ti ti-edit"></i> Editar
                  </a>

                  <a
                    href="eliminar_cliente.php?id=<?php echo $fila['id_cliente']; ?>"
                    class="btn-eliminar"
                    onclick="return confirm('¿Eliminar <?php echo htmlspecialchars($fila['nombre']); ?>?')">

                    <i class="ti ti-trash"></i> Eliminar

                  </a>

                </div>
              </td>

            </tr>

          <?php endwhile; ?>

        <?php endif; ?>

      </tbody>
    </table>
  </div>
 
</main>
 
</body>
</html>