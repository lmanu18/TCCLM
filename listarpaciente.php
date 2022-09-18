<table id=paciente>
<thead>
          <tr>
              <th>Nome</th>
              <th>Cidade - Estado</th>
              <th>E-mail</th>
          </tr>
        </thead>


</table>
<tbody>
 
 <?php
 require_once "conecta.php" ;
 $sql = "SELECT * FROM paciente";
 $resultado = mysqli_query($conexao, $sql);
 
 while ($linha = mysqli_fetch_assoc ($resultado)){
     $nome = $linha ['nome'];
     $cidade = $linha ['cidade'];
     $estado = $linha['estado'] ;
     $email = $linha ['email'];

     echo "<tr>";
     echo "<td>" . $nome . "</td>";
     echo "<td>" . $cidade . $estado . "</td>";
     echo "<td>" . $email . "</td> <br>"; 
 }
     

