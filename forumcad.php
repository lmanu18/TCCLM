<?php 
include_once "header.php";
include_once "conecta.php";
?>

<body>
  <style type="text/css">
  
   
  </style>
    <main class="container">

    <?php
    
    if(isset($_SESSION['tipo'])){ 
        if($_SESSION['tipo'] <= 3){
    ?>
            <form method='POST' action='forumsalva.php'>
            Escreva sua mensagem: <input type='text' name='msg' placeholder='Escreva sua mensagem para que um profissional da área responda'>
            <input type='submit' value='Compartilhar'>
            <input type='reset' >
            </form>";
            
    <? }} ?>
  <table class='responsive-table' id='msg'>
  <thead>
    <tr>
    <th>Dúvidas</th>
    </tr>
  </thead>
  <tbody>
    <?  $sql = "SELECT * FROM forum";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
          $mensagem = $linha['msg'];

          echo "<td>" . $mensagem . "</td>";

          //sessao do medico
          if($_SESSION['tipo'] <= 2){
          
            

          }
          
        }
    }
    ?>
    </main>
    
</body>
</html>
