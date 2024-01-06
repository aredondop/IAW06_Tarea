<?php session_start(); 
if(isset($_POST['accion']) && $_POST['accion'] == 'destruir' && isset($_SESSION['nombre']) && isset($_SESSION['apellidos']) && isset($_SESSION['email']) ){
  $_SESSION['nombre'] = '';
  session_destroy();
  $mensajeSesion = '<h2 id="type-blockquotes">Sesión destruida con éxito</h3>';
  
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sesión - Tarea 5 para IAW</title>
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
                      <h1 id="inicio">Sesión </h1>
                    </div>
                  </div>
                </div>

                <?php require_once( "structure/sesion.php" ); ?>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script muestra completamente los datos de sesión y permite su destrucción
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">  
                      <?php
                      if(isset($_SESSION['nombre']) && strlen($_SESSION['nombre']) > 0 && isset($_SESSION['apellidos']) && isset($_SESSION['email']) ){

                        $mensajeSesion = $mensajeSesion . '<li>Nombre: '.$_SESSION['nombre'].'</li>';
                        $mensajeSesion = $mensajeSesion . '<li>Nombre: '.$_SESSION['apellidos'].'</li>';
                        $mensajeSesion = $mensajeSesion . '<li>Nombre: '.$_SESSION['email'].'</li>';

                        $mensajeSesion = $mensajeSesion . '<form method="post"><input type="hidden" name="accion" value="destruir" /><button>Destruir Sesión</button></form>';


                      }else{

                        $mensajeSesion =  '<p>No hay ninguna sesión activa</p>';
                      }

                      echo $mensajeSesion;
                      ?>
                      </div>

                </div>
        

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>