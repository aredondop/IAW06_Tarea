<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Operacion - Tarea 5 para IAW</title>
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
                      <h1 id="inicio">Conectar </h1>
                    </div>
                  </div>
                </div>

                <?php require_once( "config/bbdd.php" ); ?>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script prueba la conexión.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">

                    <?php 
                    //Mezclar php y html... La mierda :_(

                    $resultado = conectar($host, $user, $pass, $bbdd);
                    //echo ($resultado['success']) ?  $resultado['message'] : 'Error: ' . $resultado['message'];
                    echo '<div class="' . ($resultado['success'] ? 'alert alert-success' : 'alert alert-danger') . '">' . $resultado['message'] . '</div>';


                    ?>

                  </div>
                </div>

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>

<?php

function conectar($host, $usuario, $pass, $base_datos) {
  try {
      $conexion = new mysqli($host, $usuario, $pass, $base_datos);

      // Verificamos si hay algún error de conexión o alguna mierda
      if ($conexion->connect_error) {
          throw new Exception('Error de conexión a la base de datos: ' . $conexion->connect_error);
      }

      $conexion->close();

      return array('success' => true, 'message' => 'Conexión exitosa a la base de datos iaw23');
  } catch (Exception $e) {
      return array('success' => false, 'message' => $e->getMessage());
  }
}
