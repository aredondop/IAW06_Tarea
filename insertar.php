<?php session_start(); 

  require_once( "config/bbdd.php" ); 
  require_once( "config/functions.php" ); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Insertar - Tarea 6 para IAW</title>
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
                      <h1 id="inicio">Insertar </h1>
                    </div>
                  </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script trata de Insertar un nuevo registro con los datos una tabla llamada agenda
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">

                  <h2>Insertar Contacto</h2>
                  <form method="post" action="leer.php">
                    <input type="hidden" name="accion" value="insertar">
                      <div class="form-group">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" required>
                      </div>
                      <div class="form-group">
                          <label for="telefono">Teléfono:</label>
                          <input type="text" class="form-control" id="telefono" name="telefono">
                      </div>
                      <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <button type="submit" class="btn btn-primary">Insertar</button>
                  </form>

                  </div>
                </div>

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>