<table class="responsive-table" id="perfil">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Telefone</th>
          <th>E-mail</th>
          <th>Área de atuação</th>
          <th> Bio </th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once "conecta.php";
        $sql = "SELECT * FROM medico";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)) {
          $nome = $linha['nome'];
          $telefone = $linha['telefone'];
          $cidade = $linha['cidade'];
          $estado = $linha['estado'];
          $area = $linha['area'];
          $bio = $linha['bio'];

          echo "<tr>";
          echo "<td>" . $nome . "</td>";
          echo "<td>" . $telefone . "</td>";
          echo "<td>" . $cidade . $estado . "</td>";
          echo "<td>" . $area . "</td>";
          echo "<td>" . $bio . "</td>";
        }

        ?>