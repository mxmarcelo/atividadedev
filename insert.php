<?php
include "connect.php";

$nome = "";
$endereço = "";
$idade = "";
$sexo = "";
$nacionalidade = "";
$email = "";

mysqli_query($link,"insert into pessoas(nome,endereco,idade,sexo,nacionalidade,email)values(null,'$nome','$endereço','$idade','$sexo','$nacionalidade','$email')");
?>