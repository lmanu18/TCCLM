<?php 
session_start();
include_once "conecta.php" ; 
$id = $_POST['cpf'] ;
$senha = $_POST['senha'] ;

$puxandoPaciente = "SELECT * FROM paciente WHERE cpf = '$id'";
$resultSet = mysqli_query($conexao, $puxandoPaciente);
$paciente = mysqli_fetch_assoc($resultSet);

$sql = "SELECT * FROM login WHERE usuario='$id'" ;
$result = mysqli_query($conexao, $sql) ;

$verifica = mysqli_affected_rows($conexao) ;
if($verifica > 0){
    $dados= mysqli_fetch_assoc($result) ;
    if(password_verify($senha, $dados['senha'])) {
        $_SESSION['idpaciente'] = $paciente['idpaciente'];
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $dados['usuario'];
        $_SESSION['tipo'] = $dados['tipo'];
    } else {
        echo("<script>window.alert('Senha inválida');
        window.history.back()</script>");
    }
var_dump($dados['tipo']);
    $pagina = match($dados['tipo']){
        '1' => 'location:inicialadmin.php', //admin
        '2' => 'location:index.php', //medico
        '3' => 'location:index.php', //paciente
    };
    header($pagina);
} else {
    echo("<script>window.alert('Usuário não encontrado');
        window.history.back()</script>");
}