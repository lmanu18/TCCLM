<?php 
require_once "conecta.php" ;


$idpaciente = $_POST['idpaciente'];

$sql = "DELETE FROM paciente WHERE idpaciente = $idpaciente";
$resultado = mysqli_query ($conexao, $sql);

mysqli_close ($conexao);

if ($resultado) {
    header ("Location: listapaciente.php");
}

?>