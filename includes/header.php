<?php 
include_once('./includes/confg.php');
include_once('./data/posts.php');
include_once('./data/categories.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="./img/faviicon.svg">
   <title><?php echo TITLE; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/css/style.css">
</head>
<body>

<header>
<!-- NAV FIXED -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark navegacao">
  <div class="container">
    <a href="<?php echo BASE_URL; ?>" class="navbar-brand">
      <img src="<?php echo BASE_URL; ?>img/logo.svg" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">  
       <span class="navbar-toggler-icon text-light"></span>
     </button>

    <div id="menu" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto text-light nav-menu">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-light font-weight-bold">home</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo BASE_URL; ?>#" class="nav-link text-light font-weight-bold">Categorias</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo BASE_URL; ?>#" class="nav-link text-light font-weight-bold">Sobre</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo BASE_URL; ?>contato.php" class="nav-link text-light font-weight-bold">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>