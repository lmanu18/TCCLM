<?php
session_start();
session_destroy();
echo ("<script>window.alert('Deslogado com sucesso!');
window.location.href='index.php';</script>");
