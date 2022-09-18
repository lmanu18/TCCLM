

      <?php include_once "conecta.php"; 
            require_once "header.php"; ?>

</head>

<style type="text/css">

body{
    background-color: #f3e5f5 ;
}
    </style>
<body>


<br> <br> <br>

<main class="container">

<br> <br>

 <table id="medicos" class="bordered highlight responsive-table">
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

require_once "conecta.php" ;
$sql = "SELECT * FROM medico";
$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_assoc ($resultado)){
    $nome = $linha ['nome'];
    $telefone = $linha ['telefone'];
    $cidade = $linha ['cidade'];
    $estado = $linha['estado'] ;
    $area = $linha ['area'];
    $bio = $linha['bio'];
    
    echo "<tr>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $telefone . "</td>";
    echo "<td>" . $cidade . $estado . "</td>";
    echo "<td>" . $area . "</td>";
    echo "<td>" . $bio . "</td>" ;
    echo "<td> <a href='formalteramed.php' class='btn-floating btn-large waves-effect waves-light purple lighten-2'>
    <i class='material-icons'>mode_edit</i></a></td>";

    echo "<td> <a href='excluirmedico.php' " . " onclick='confirmacao' class='btn-floating btn-large waves-effect waves-light purple lighten-2'>
    <i class='material-icons'>delete</i></a></td>";

    echo "</tr>";
}

require_once "footer.php";