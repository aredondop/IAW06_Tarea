<?php session_start(); 

if(isset($_POST['nombre']) && !strlen($_SESSION['nombre']) 
  || isset($_POST['apellidos']) && !strlen($_SESSION['apellidos']) 
  || isset($_POST['email']) && !strlen($_SESSION['emil']) ){
  $_SESSION['nombre'] = $_POST['nombre'];
  $_SESSION['apellidos'] = $_POST['apellidos'];
  $_SESSION['email'] = $_POST['email'];
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Datos - Tarea 5 para IAW</title>
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
                      <h1 id="inicio">Datos </h1>
                    </div>
                  </div>
                </div>

                <?php require_once( "structure/sesion.php" ); ?>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script permite crear una sesión en PHP
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">       
                      <form method="post">
                        <label>Nombre</label>
                        <input type="text" min="0" name="nombre" <?php echo (strlen($_SESSION['nombre']) > 0 ) ? 'value="'.$_SESSION['nombre'].'"' : ''; ?> required />

                        <label>Apellidos</label>
                        <input type="text" min="0" name="apellidos" <?php echo (strlen($_SESSION['apellidos']) > 0 ) ? 'value="'.$_SESSION['apellidos'].'"' : ''; ?> required />

                        <label>Email</label>
                        <input type="email" min="0" name="email" <?php echo (strlen($_SESSION['email']) > 0 ) ? 'value="'.$_SESSION['email'].'"' : ''; ?> required />
                        <br />
                        <button>Crear Sesión</button>
                      </form>
                    </div>





                </div>
        

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>
