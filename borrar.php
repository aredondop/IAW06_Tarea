<?php session_start(); 

  require_once( "config/bbdd.php" ); 
  require_once( "config/functions.php" ); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Borrar - Tarea 6 para IAW</title>
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
                      <h1 id="inicio">Borrar </h1>
                    </div>
                  </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script trata de Borrar un registro, que recibe desde leer.php
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                  <?php 
                    //Mezclar php y html... La mierda :_(

                    try {
                      $conexion = conectar($host, $user, $pass, $bbdd);
                      $datos_contacto_a_borrar = obtenerContactoPorID($conexion, $_GET['id']);
                      cerrarConexion($conexion);
                    } catch (Exception $e) {
                        echo '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
                        exit; 
                    }

                    ?>

                    <h2>Borrar Contacto</h2>
                    <form method="post" action="leer.php">
                        <input type="hidden" name="accion" value="borrar">
                        <input type="hidden" name="id_contacto_a_borrar" value="<?php echo $_GET['id']; ?>">

                        <p>Vas a borrar el siguiente registro. ¿Estás seguro?</p>
                        <ul>
                            <li><strong>ID:</strong> <?php echo $datos_contacto_a_borrar['id']; ?></li>
                            <li><strong>Nombre:</strong> <?php echo $datos_contacto_a_borrar['Nombre']; ?></li>
                            <li><strong>Teléfono:</strong> <?php echo $datos_contacto_a_borrar['Telefono']; ?></li>
                            <li><strong>Email:</strong> <?php echo $datos_contacto_a_borrar['email']; ?></li>
                        </ul>

                        <p>¿Confirmar borrado?</p>
                        <label><input type="radio" name="confirmar_borrado" value="si" required> Sí</label>
                        <label><input type="radio" name="confirmar_borrado" value="no" checked> No</label>

                        <button type="submit" class="btn btn-danger">Borrar</button>
                        <a href="leer.php" class="btn btn-secondary">Cancelar</a>
                    </form>

                  </div>
                </div>

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>