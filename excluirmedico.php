
<?php 
require_once "conexao/conecta.php" ;


$idmed = $_POST['idmed'];

$sql = "DELETE FROM medico WHERE idmed = $idmed";
$resultado = mysqli_query ($conexao, $sql);

mysqli_close ($conexao);

if ($resultado) {
    header ("Location: listamedicos.php");
}

?>