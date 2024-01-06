<?php session_start(); 

  require_once( "config/bbdd.php" ); 
  require_once( "config/functions.php" ); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Modificar - Tarea 6 para IAW</title>
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
                      <h1 id="inicio">Modificar </h1>
                    </div>
                  </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script trata de Modificar un registro, que recibe desde leer.php
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
                      $datos_contacto = obtenerContactoPorID($conexion, $_GET['id']);
                      cerrarConexion($conexion);
                    } catch (Exception $e) {
                        echo '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
                        exit; 
                    }

                    ?>

                  <h2>Insertar Contacto</h2>
                  <form method="post" action="leer.php">
                    <input type="hidden" name="accion" value="modificar">
                    <input type="hidden" name="id_contacto" value="<?php echo $_GET['id']; ?>">
                    
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos_contacto['Nombre']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $datos_contacto['Telefono']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $datos_contacto['email']; ?>">
                    </div>
                    <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                </form>

                  </div>
                </div>

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>