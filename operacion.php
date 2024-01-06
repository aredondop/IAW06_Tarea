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
                      <h1 id="inicio">Operación </h1>
                    </div>
                  </div>
                </div>

                <?php require_once( "structure/sesion.php" ); ?>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bs-component">
                            <p class="justify-text">
                            Este script calcula la potencia de un número por medio de un bucle
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">       
                      <form method="post">
                        <label>Base</label>
                        <input type="number" min="0" name="base" <?php echo ($_POST['base'] > 0 ) ? 'value="'.$_POST['base'].'"' : ''; ?> required />

                        <label>Exponente</label>
                        <input type="number" min="0" name="exponente" <?php echo ($_POST['exponente'] > 0 ) ? 'value="'.$_POST['exponente'].'"' : ''; ?> required />

                        <button>Enviar</button>
                      </form>
                    </div>

                    <div class="col-lg-12"> 
                      <div class="bs-component">
                        <h3>      
                        <?php 
                        $mensajePotencia = 'N/A';

                        if( isset($_POST['base']) && isset($_POST['exponente']) )
                          $mensajePotencia = 'La potencia de '.$_POST['base'].' elevada a '.$_POST['exponente']. ' es '. potencia($_POST['base'],$_POST['exponente'] ); 

                        echo $mensajePotencia;
                        
                        ?>
                        </h3>
                      </div>
                    </div>




                </div>
        

            
      <?php require_once( "structure/footer.php" ); ?>
    </div>
  </body>
</html>

<?php
  function potencia($b, $e){
    $e = ($e < 1)? 1 : $e; //Control de exponente
    $final = $b;

    for( $i=1; $i<$e; $i++){
      $final = $final * $b;
    }
    return $final;
  }
