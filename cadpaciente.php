<?php
if(!isset($_SESSION)){
    session_start();
}
include_once "conecta.php" ;

$datanasc = $_POST['datanasc'] ; 
$cpf = $_POST['CPF'] ;
$email = $_POST['email'] ;
$endereco = $_POST['endereco'] ;
$cidade = $_POST['city'] ;
$estado = $_POST['estado'] ;
$nome = $_POST['nome'] ;
$telefone = $_POST['fone'] ;
$foto = $_POST['foto'] ;
$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT) ;


$sql = "INSERT INTO paciente (datanasc,cpf,email,endereco,cidade,estado,nome,telefone,foto) 
VALUES (\"$datanasc\",\"$cpf\",\"$email\",\"$endereco\",\"$cidade\",\"$estado\",\"$nome\",\"$telefone\",\"$foto\")";

$resultado1 = mysqli_query($conexao,$sql);

if($resultado1){
    $_SESSION['idpaciente'] = mysqli_insert_id($conexao);
    $_SESSION['nomepaciente'] = $nome;
}

$sql = "INSERT INTO login (usuario, tipo, senha)
VALUES (\"$cpf\",3,\"$senha\")" ;

$resultado2 = mysqli_query($conexao, $sql) ; 


header ('location:loginform.php') ;

