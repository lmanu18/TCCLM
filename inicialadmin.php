<?php
require_once "header.php";
?>

<body>
    <style type="text/css">
    .waves-effect {
        
        position:relative;
        margin-bottom: 10px;
        margin-left: 38%;  
    }

    </style>
    <main>
        <br> <br>
<a href='formcadmedico.php'class='waves-effect btn-large purple lighten-3'><i class='material-icons left'>person_add</i>Cadastrar Profissional</a> <br> <br>
<a href='listadmedico.php'class='waves-effect btn-large purple lighten-3'><i class='material-icons left'>format_list_bulleted</i>Listar Profissionais</a> 
<a href='formalteramed.php' class='waves-effect btn-large purple lighten-3'><i class='material-icons left'>format_list_bulleted</i> Listar Usuários</a> <br> <br>
<a href='funcoes.php'class='waves-effect btn-large purple lighten-3'><i class='material-icons left'>delete_forever</i>Excluir Profissional</a> 
<a href='excluirpaciente.php' class='waves-effect btn-large purple lighten-3'><i class='material-icons left'>delete_forever</i> Excluir usuário </a> <br> <br>
<a href='permissao.php' class='waves-effect btn-large purple lighten-3'> <i class='material-icons left'>check_box</i> Permissões </a> <br> <br>
<a href='blogfuncoes.php' class='waves-effect btn-large purple lighten-3'> <i class='material-icons left'>folder_open</i> Blog </a> <br> <br>
</main>
<?php
require_once "footer.php";
?>