<?php 
require_once "header.php"; 
?>
<style type="text/css">
    
body{
    background-color: #f3e5f5;
}
.btn {
    color:black ;
}
h1{
    text-align: center ;
}
</style>

<body>
    <main class="container"> 
    <form action="cadpaciente.php" method="POST">
    <h1> Cadastro </h1>
    <div class="card-panel">
    Nome: <input type="text" name="nome"> <br>
    Data de Nascimento: <input type="date" name="datanasc"> <br>
    CPF: <input type="text" name="CPF"> <br>
    Telefone: <input type="text" name="fone"> <br> 
    Email: <input type="email" name="email"> <br>
    Estado: <input type="text" name="estado"> <br>
    Cidade: <input type="text" name="city"> <br>
    Endereço: <input type="text" name="endereco"> <br>
    Senha: <input type="password" name="senha"> <br>
    Foto: <input type="text" name="foto">
    <br> <br>
   <div class="center-align">
    <button class="btn purple lighten-2" type="submit" name="action">Realizar Cadastro
    </button>
    <button class="btn purple lighten-2" type="submit" name="action">Limpar
    </button>
</div>
</div>

</form>
</main>
    <br> <br>
</body>
</html>