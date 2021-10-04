<?php

include 'connection.php';
include 'resize-class.php';

// Na verdade, aqui só temos o método de cadastrar.

// Que primeiro verifica se as categorias foram atribuidas corretamente
$championCategory = $_POST['categoria'];
$numeroCategorias = count($championCategory);

switch($numeroCategorias){
    case 1:
        $primaryCategory = $championCategory[0];
        break;
    case 2:
        $primaryCategory = $championCategory[0];
        $secondCategory = $championCategory[1];
        break;
    default:
        // header('location: ./cadastrar.php');
        echo ("<script language = 'JavaScript'>
        window.alert('Selecione no mínimo uma categoria e no máximo duas')
        window.location.href='../cadastrar.php';
        </script>");
        break;
}

// Caso esteja tudo bem, os outros valores são atribuidos
$championName = $_POST['championName']; 
$championDescription = $_POST['championDescription']; 
$difficulty = $_POST['dificuldade']; 
$championImage = $_FILES['championImage']; // input file (imagem)
$destino = "../assets/images/splash-art/"; // caminho da pasta onde as imagens vão ser salvas
preg_match("/\.(jpg|jpeg|png|gif|svg){1}$/i",$championImage['name'],$extencao);
$imageName = md5(uniqid(time())).".".$extencao[1]; // o nome da imagem criptografada

// E por fim tentamos fazer o insert
try { 

    $inserir=$cn->query("CALL createChampion(
        '$championName', 
        '$championDescription',
        '$primaryCategory',
        '$secondCategory',
        '$imageName',
        '$difficulty'
    )");

    // E gravar a imagem na pasta do projeto
    move_uploaded_file($championImage['tmp_name'], $destino.$imageName);      
    $upload = new resize($destino.$imageName);   
    $upload -> saveImage($destino.$imageName, 100);

    // header('location: ./index.php');
    echo ("<script language = 'JavaScript'>
    window.alert('Campeão cadastrado com sucesso')
    window.location.href='../index.php';
    </script>");

}catch(PDOException $e) {  
    echo $e->getMessage();
}
