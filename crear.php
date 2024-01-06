<?php session_start(); 

  require_once( "config/bbdd.php" ); 
  require_once( "config/functions.php" ); ?>

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
                      <h1 id="inicio">Crear </h1>
                    </div>
                  </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script trata de Crear una tabla llamada agenda, con los siguientes campos:
                            <br /> El campo id es la clave primaria, un campo autonumérico que se insertará de forma automática
                            <br /> Nombre
                            <br /> Telefono
                            <br /> email
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
                        $resultado = crearTablaAgenda($conexion);
                        echo darFormatoMensaje($resultado);
                        cerrarConexion($conexion);
                    } catch (Exception $e) {
                        echo '<div class="alert alert-danger">' . $e->getMessage() . '</div>';
                    }


                    ?>

                  </div>
                </div>

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>