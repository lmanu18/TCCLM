
<?php
require_once "header.php" ;
?>
<style type="text/css">
    body{
        background-color: #f3e5f5;
    }
    h1{
    text-align: center ;
    }
    .btn{
        color: black ;
    }

</style>
<body>
    <main class="container">
     <form action="login.php" method="POST">
        <h1>Login</h1>
        <div class="container">
     <br>
     <div class="card-panel">
      CPF: <input type="text" name="cpf"> <br>
      Senha: <input type="password" name="senha"> <br>
      <div class="center-align">
      <button class="btn purple lighten-2" type="submit" name="action">Realizar Login
    </button> <br>
</div>
     Não possui um cadastro?
    <a href="formpaciente.php">Cadastra-se</a> <br>
    <a href="recuperarsenha.php">Esqueci a minha senha </a>
    </form>
</main>
<div>
</body>
</html>
<?php
require_once "footer.php";
?>