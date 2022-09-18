<?php if(!isset($_SESSION)){
  session_start();
}
?>
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
</head>

<body>
  <style type="text/css">
   

    ::placeholder {
      color: white;
    }
  </style>

  <nav class="purple lighten-3">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo"><img class="responsive-img" src="Psique1.png" height="70" width="135"></a>
      <ul class="right hide-on-med-and-down">
        <li>
          <div class="center row">
            <div class="col s12 ">
              <div class="row" id="topbarsearch">
                <div class="input-field col s6 s12">
                  <i class="material-icons prefix">search</i>
                  <input type="text" placeholder="Pesquisar" id="autocomplete-input" class="autocomplete">
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a class="x" href="listablog.php">Blog</a></li>
        <li><a href="listaforum.php">Dúvidas</a></li>
    <li><a href="listamedicos.php">Procurar médico</a></li>
    <?php if(isset($_SESSION['login'])) { ?>
          <li><a class="waves-effect grey lighten-1 btn" href="logout.php">Logout</a></li>
        <?php } else {?>
          <li><a class="waves-effect grey lighten-1 btn" href="loginform.php">Entrar</a></li>
        <?php }?>
      </ul>
    </div>
  </nav>

  <main class="container">
    <table class="responsive-table" id="medico">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Cidade - Estado</th>
          <th>Área de atuação</th>
          <th> Bio </th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once "conecta.php";
        $sql = "SELECT * FROM medico";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
          $nome = $linha['nome'];
          $telefone = $linha['telefone'];
          $cidade = $linha['cidade'];
          $estado = $linha['estado'];
          $area = $linha['area'];
          $bio = $linha['bio'];

          echo "<tr>";
          echo "<td>" . $nome . "</td>";
          echo "<td>" . $telefone . "</td>";
          echo "<td>" . $cidade . $estado . "</td>";
          echo "<td>" . $area . "</td>";
          echo "<td>" . $bio . "</td>";
        }

        ?>
        </tbody>
    </table>
  </main>
  <?php  require_once"footer.php" ?>
</body>

</html>


