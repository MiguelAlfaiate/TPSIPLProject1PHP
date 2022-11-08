<?php

//obter dados do formulário
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$password = $_POST['password'];
$morada1 = $_POST['morada1'];
$morada2 = $_POST['morada2'];
$cidade = $_POST['cidade'];
$dist = $_POST['distrito'];
$codpostal = $_POST['codpostal'];
$datainicio = $_POST['datainicio'];
$datafim = $_POST['datafim'];
$check = $_POST['check'];

//escrever dados em ficheiro txt
    //criar ficheiro
$path = "../datafile/registo.txt";
$file = fopen($path, "a+");
if(file_exists($path)){
    $dados = "Nome: $nome $apelido\nEmail: $email\nPassword: $password\nMorada: $morada1, $morada2, $codpostal, $cidade, $dist\nData Início: $datainicio\nData Fim: $datafim\n
    ##########################################################################\n";
    fwrite($file, $dados);
    echo "<script>alert('Dados inseridos com sucesso');</script>";
}else{
    echo "<script>alert('Erro ao tentar abrir o ficheiro');</script>";
}
fclose($file);


?>