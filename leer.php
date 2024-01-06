<?php session_start(); 

  require_once( "config/bbdd.php" ); 
  require_once( "config/functions.php" ); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Leer - Tarea 6 para IAW</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="dist/BOOTSTRA.386/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
            <?php require_once( "structure/menu.php" ); ?>

          </div>
      
          <div class="container" style="background:url('dist/fonts/grid.svg')">

            <div class="bs-docs-section">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="page-header">
                      <h1 id="inicio">Leer </h1>
                    </div>
                  </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script trata de Leer los datos una tabla llamada agenda
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">

                    <?php 
                    //Mezclar php y html... La mierda :_(

                    try {
                      // Conectar a la base de datos
                      $conexion = conectar($host, $user, $pass, $bbdd);

                      // Inicializar variables
                      $nombre = $telefono = $email = '';

                      // Procesar el formulario Insertar.php Por si las moscas!!!
                      if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'insertar') {
                          $nombre = $_POST['nombre'];
                          $telefono = $_POST['telefono'];
                          $email = $_POST['email'];

                          $resultado = insertarContacto($conexion, $nombre, $telefono, $email);
                          echo '<div class="alert ' . ($resultado['success'] ? 'alert-success' : 'alert-danger') . '">' . $resultado['message'] . '</div>';
                      }

                      // Procesar el formulario de Modificar.php si se envió
                      if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'modificar') {
                        $id_contacto = $_POST['id_contacto'];
                        $nombre = $_POST['nombre'];
                        $telefono = $_POST['telefono'];
                        $email = $_POST['email'];

                        $resultado = actualizarContacto($conexion, $id_contacto, $nombre, $telefono, $email);
                        echo '<div class="alert ' . ($resultado['success'] ? 'alert-success' : 'alert-danger') . '">' . $resultado['message'] . '</div>';
                      }

                      // Procesar solicitud de borrado
                      if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'borrar') {
                        $id_contacto_a_borrar = $_POST['id_contacto_a_borrar'];

                        // Verificar si se ha confirmado el borrado
                        if ($_POST['confirmar_borrado'] === 'si') {
                            // Borrar el contacto en la base de datos
                            $resultado = borrarContacto($conexion, $id_contacto_a_borrar);
                            echo '<div class="alert ' . ($resultado['success'] ? 'alert-success' : 'alert-danger') . '">' . $resultado['message'] . '</div>';
                        } else {
                            echo '<div class="alert alert-info">Borrado cancelado.</div>';
                        }
                      }
                      

                      $datos_agenda = obtenerDatosAgenda($conexion);
                      cerrarConexion($conexion);
                    } catch (Exception $e) {
                        // Manejar cualquier excepción no capturada
                        echo '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
                        exit; // Salir del script si hay un error
                    }



                    ?>

                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <h2>Contenido de la Agenda</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos_agenda as $fila): ?>
                                <tr>
                                    <td><?php echo $fila['id']; ?></td>
                                    <td><?php echo $fila['Nombre']; ?></td>
                                    <td><?php echo $fila['Telefono']; ?></td>
                                    <td><?php echo $fila['email']; ?></td>
                                    <td>
                                        <!-- Botones de Bootstrap para editar y borrar -->
                                        <a href="modificar.php?id=<?php echo $fila['id']; ?>" class="btn btn-primary">Editar</a>
                                        <a href="borrar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Borrar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
                </div>

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>