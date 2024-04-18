<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['e-mail'];

//echo $nome." - ".$email." - ".$idade;

include_once("conect.php"); //importar o aquivo de conexão

include_once("Crud.php"); //importar o aquivo da classe Crud

$obj = new Crud($conect);

$obj->setDados($nome,$idade,$email);

$obj->insertDados();

?>