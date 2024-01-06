<?php
  if(isset($_SESSION['nombre']) && isset($_SESSION['apellidos']) && isset($_SESSION['email']) ){
    echo '<div class="col-lg-12">
      <div class="bs-component">
        <h3>Bienvenido, '.$_SESSION['nombre'].' '.$_SESSION['apellidos'].'</h3>
      </div>
    </div>';
  }