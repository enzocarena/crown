<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url()."css/estilo.css" ?>>
    <link rel="shortcut icon" href="<?php echo base_url()."imagenes/corona.png";?>" type="image/ico" class="icono" style="color: black;">
    <link rel="stylesheet" href=<?php echo base_url()."script.js" ?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>CROWN</title>
</head>
<body>
<div class="container">
    <a href="http://localhost/crown/public/principal.php"><img src="<?php echo base_url()."imagenes/corona.png";?>" class="corona2"></a>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="http://localhost/crown/public/principal.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">CROWN</span>
      </a>

      <ul class="nav nav-pills">
        <li>
          <?php 
          if (session("usuario") ==!null){
            if(session("usuario")["jerarquia"] ==1){?>
               <li class="nav-item"><a href="http://localhost/crown/public/admin" class="nav-link">subir productos</a></li>
            <?php }
            else?> 
          <?php }
          else?> 
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">cuenta</a>
            <ul class="dropdown-menu">
              <?php
              $session = session()->get('usuario');
              //echo var_dump($session);
              if (empty($session)){?>
                <li class="dropdown-item"><a href="http://localhost/crown/public/iniciarsesion" class="nav-link active" aria-current="page">Iniciar sesion</a></li>
              <?php }
              else{ ?>  
                <li class="dropdown-item"><a href="http://localhost/crown/public/iniciarsesion" class="nav-link active" aria-current="page">Cambiar de cuenta</a></li>
                <li class="dropdown-item"><a href="<?= base_url('cerrarsesion'); ?>" class="nav-link active" aria-current="page">Cerrar sesión</a></li>
                <li class="dropdown-item"><a href="<?= base_url('perfil'); ?>" class="nav-link active" aria-current="page"><?= $session["correo"] ?></a></li>
              <?php };
              ?>
            </ul>
       </li>        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://localhost/crown/public/remerasall">Remeras</a></li>
              <li><a class="dropdown-item" href="http://localhost/crown/public/lompasall">Pantalones</a></li>
              <li><a class="dropdown-item" href="http://localhost/crown/public/buzosall">Buzos</a></li>
            </ul>
       </li>
        <li class="nav-item"><a href="http://localhost/crown/public/carrito" class="nav-link">Carrito</a></li>
      </ul>
      
    </header>
</div >