
<?php
ob_start();

$modulo = "Login";

require_once "../controller/db/cone.php";
require_once "../controller/assets/svrurl.php";
require_once "../controller/assets/inicio.php";



// Conectar a la base de datos
$conection = new basedatos();
$conn = $conection->conectarBD();

// Funciones para obtener los datos de cada tabla
function getTenderos() {
    global $conn;
    $query = "SELECT * FROM tenderos LIMIT 5"; 
    return mysqli_query($conn, $query);
}

function getComentarios() {
    global $conn;
    $query = "SELECT * FROM comentario LIMIT 5";
    return mysqli_query($conn, $query);
}

function getEventos() {
    global $conn;
    $query = "SELECT * FROM eventos LIMIT 5";
    return mysqli_query($conn, $query);
}

function getLogística() {
    global $conn;
    $query = "SELECT * FROM logistica LIMIT 5";
    return mysqli_query($conn, $query);
}

function getInvitaciones() {
    global $conn;
    $query = "SELECT * FROM invitaciones LIMIT 5";
    return mysqli_query($conn, $query);
}

function getAsistencias() {
    global $conn;
    $query = "SELECT * FROM asistencias LIMIT 5";
    return mysqli_query($conn, $query);
}

function getValidación_de_tendero() {
    global $conn;
    $query = "SELECT * FROM validacion_de_tendero LIMIT 5";
    return mysqli_query($conn, $query);
}

function getEmpresa() {
    global $conn;
    $query = "SELECT * FROM empresa LIMIT 5";
    return mysqli_query($conn, $query);
}

// Obtener los datos de todas las tablas
$tenderos = getTenderos();
$comentarios = getComentarios();
$eventos = getEventos();
$logística = getLogística();
$invitaciones = getInvitaciones();
$asistencias = getAsistencias();
$validacion_de_tendero = getValidación_de_tendero();
$empresa = getEmpresa();

?>
<!-- Usuario -->
<a id="tipodeusuario" class="hide"><?php echo $pm_tipo ?></a>
<!-- Usuario -->
<?php
////Requerir NAVMENU

require "../controller/assets/menunav.php";
?>
<div class="row animated fadeIn" style="margin-bottom: 0;"><!-- row principal-->

  <!-- CARD BLANCO -->
  <div class="row center" style="margin-top: 10vh;">
    <div class="col s12">
      <h4>Información de Tablas</h4>
      <div class="card-panel">
        <div class="row">
          <div class="col s12 m6 l4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Tenderos</span>
                <table class="highlight centered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Número Tiendas AD</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($tendero = mysqli_fetch_assoc($tenderos)):?>
                      <tr>
                        <td><?php echo htmlspecialchars($tendero['ID_Tendero']);?></td>
                        <td><?php echo htmlspecialchars($tendero['Nombre']);?></td>
                        <td><?php echo htmlspecialchars($tendero['Numero_tiendas_AD']);?></td>
                      </tr>
                    <?php endwhile;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Comentarios</span>
                <table class="highlight centered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      
                      <th>Calificación</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($comentario = mysqli_fetch_assoc($comentarios)):?>
                      <tr>
                        <td><?php echo htmlspecialchars($comentario['ID_Comentario']);?></td>
                       
                        <td><?php echo htmlspecialchars($comentario['Calificacion']);?></td>
                      </tr>
                    <?php endwhile;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Eventos</span>
                <table class="highlight centered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      
                      <th>Nombre del Evento</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($evento = mysqli_fetch_assoc($eventos)):?>
                      <tr>
                        <td><?php echo htmlspecialchars($evento['ID_Evento']);?></td>
                        
                        <td><?php echo htmlspecialchars($evento['Nombre_de_evento']);?></td>
                      </tr>
                    <?php endwhile;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Logística</span>
                <table class="highlight centered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Recurso</th>
                      <th>Cantidad</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($logistica = mysqli_fetch_assoc($logística)):?>
                      <tr>
                      
                        <td><?php echo htmlspecialchars($logistica['Recurso']);?></td>
                        <td><?php echo htmlspecialchars($logistica['Cantidad']);?></td>
                      </tr>
                    <?php endwhile;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Invitaciones</span>
                <table class="highlight centered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tendero</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($invitacion = mysqli_fetch_assoc($invitaciones)):?>
                      <tr>
                        <td><?php echo htmlspecialchars($invitacion['ID_Invitaciones']);?></td>
                        <td><?php echo htmlspecialchars($invitacion['Nombre_Tendero']);?></td>
                      </tr>
                    <?php endwhile;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Asistencias</span>
                <table class="highlight centered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tendero</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($asistencia = mysqli_fetch_assoc($asistencias)):?>
                      <tr>
                        <td><?php echo htmlspecialchars($asistencia['ID_Asistencias']);?></td>
                        <td><?php echo htmlspecialchars($asistencia['Nombre_Tendero']);?></td>
                      </tr>
                    <?php endwhile;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          
          <div class="col s12 m6 l4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Empresa</span>
              <table class="highlight centered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre de la Empresa</th>
                    <th>Contacto</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($empresa_data = mysqli_fetch_assoc($empresa)): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($empresa_data['ID_Empresa']); ?></td>
                      <td><?php echo htmlspecialchars($empresa_data['Nombre_Empresa']); ?></td>
                      <td><?php echo htmlspecialchars($empresa_data['Contacto']); ?></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- SCRIPTS CARGA -->
<?php
require_once "../controller/assets/scripts.php";
?>
<!-- SCRIPTS CARGA -->

<!-- SCRIPTS -->
<script>
  // Aquí puedes agregar cualquier script adicional si es necesario
</script>
<!-- SCRIPTS  -->

<!-- Fin HTML -->
<?php
require_once "../controller/assets/fin.php";
?>

