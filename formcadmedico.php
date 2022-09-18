<?php
require_once "header.php";
?>
<style type="text/css">
body{
      background-color: #f3e5f5 ;
}
</style>
<body>
      <br> <br>
    <form action="cadmedico.php" method="POST">
    <main class="container">
    <div class="card-panel">
    Nome: <input type="text" name="nome"> <br>
    Data de nascimento: <input type="date" name="datanasc"> <br>
    Sexo: <br>
    <p>
            <label>
            <input name="sexo" type="radio" value="F"/>
            <span>Feminino</span>
            </label>
      </p>
      <p>
            <label>
            <input name="sexo" type="radio" value="M"/>
            <span>Masculino</span>
            </label>
      </p>
    E-mail: <input type="email" name="email"> <br>
    Telefone: <input type="text" name="telefone"> <br>
    Estado: <input type="text" name="estado"> <br>
    Cidade: <input type="text" name="cidade"> <br>
    Endereço: <input type="text" name="endereco"> <br>
    Bio: <input type="text" size="50" name="bio" placeholder="Pequena apresentação sobre você"> <br>
    Area: <br>
      <p>
            <label>
            <input name="area" type="radio" value="psicologia"/>
            <span>Psicologia</span>
            </label>
      </p>
      <p>
            <label>
            <input name="area" type="radio" value="psiquiatria"/>
            <span>Psiquiatria</span>
            </label>
      </p>
    Tipo de certificado: <br> 
    <p>
            <label>
            <input name="tipodocert" type="radio" value="CRM"/>
            <span>CRM</span>
            </label>
      </p>
      <p>
            <label>
            <input name="tipodocert" type="radio" value="CRP"/>
            <span>CRP</span>
            </label>
      </p> <br>
    Número do certificado: <input type="text" name="certificado"> <br>
    Foto: <input type="text" name="foto"> <BR>
    Senha: <input type="text" name="senha"> <br>
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">

</div>
    </main>

    </form>
     
</body>
</html>
<?php
require_once "footer.php";
?>