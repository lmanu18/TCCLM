<?php 
require_once "header.php" ;
?>


<body>
  <style type="text/css">
    .x {
      color: black;
    }

    .waves-effect {
      color: black;
    }
  </style>

<main class="container">
<table class="responsive-table" id="msg">
  <thead>
    <tr>
      <th>Dúvidas</th>
    </tr>
  </thead>
  <tbody>

  <?php
        require_once "conecta.php";
        $sql = "SELECT * FROM forum";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
          $mensagem = $linha['msg'];

          echo "<td>" . $mensagem . "</td>";
        }

        ?>
        </tbody>
    </table>
  </main>
</body>

</html>