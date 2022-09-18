<?php
require_once "/cabeça/header.php";
?>
<body>
     <form action="excluirpaciente.php" method="POST">
        Tem certeza que deseja excluir seu perfil ? <br>
        <input type="radio" name="confirmacao" value="sim"> Sim, tenho certeza <br>
        <input type="radio" name="confirmacao" value="não"> Não <br>
        <input type="submit" value="Confirmar">
     </form>
</body>
</html>