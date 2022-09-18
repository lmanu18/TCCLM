<?php

include "conecta.php";
require_once "header.php";

$idpaciente = $_POST ['idpaciente'];
$sql = "SELECT * FROM paciente WHERE idpaciente = $idpaciente";
$result = mysqli_query ($conexao, $sql);
$linha = mysqli_fetch_array ($result);
mysqli_close ($conexao);

?>

<body>
    <form action="alterapaciente.php" method="POST">
    <h1> Formulário de Alteração </h1>
    Nome: <input id="nome" type="text" required name="nome" value="<?php echo $linha['nome']; ?>"> <br>
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
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">

    <input id="nome" type="text" required name="nome" value="<?php echo $linha['nome']; ?>">

    </form>
</body>
</html>
<?php
require_once "footer.php";
?>