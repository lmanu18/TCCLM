<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style type="text/css">
    

    
  </style>
</head>
  <nav class="purple lighten-3">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><img class="responsive-img" src="Psique1.png" height="70" width="135"></a>
      <ul id="nav-mobile" class="right">
      <li><a class="x" href="listablog.php">Blog</a></li>
        <li><a class="x" href="forumcad.php">Dúvidas</a></li>
        <li><a class="x" href="listamedicos.php">Procurar médico</a></li>
        <?php if(isset($_SESSION['login'])) { ?>
          <li><a class="material-icons prefix" href="perfilusu.php">person_outline</a></li>
          <li><a class="waves-effect grey lighten-1 btn" href="logout.php">Sair</a></li>
        <?php } else {?>
          <li><a class="waves-effect grey lighten-1 btn" href="loginform.php">Entrar</a></li>
        <?php }?>
      </ul>
    
    </div>
    </li>
    </div>
    </div>
  </nav>