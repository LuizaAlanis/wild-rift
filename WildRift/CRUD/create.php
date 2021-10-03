<?php
    include '../config/DB/conexao.php';

    $championName = $_POST['championName']; 
    $championDescription = $_POST['championDescription']; 
    $championCategory = $_POST['categoria']; 

    $difficulty = $_POST['dificuldade']; 
    $championImage = $_FILES['championImage']; // input file (imagem)
    $destino = "../assets/images/splash-art"; // caminho da pasta onde as imagens vão ser salvas
    preg_match("/\.(jpg|jpeg|png|gif|svg){1}$/i",$championImage['name'],$extencao);
    $image = md5(uniqid(time())).".".$extencao[1]; // o nome da imagem criptografada

/*
    try { 
        $inserir=$cn->query("CALL createChampion(
            '$championName', 
            '$championDescription',
            '$championCategory',
            '$image',
            '$difficulty'
        )");
	
        move_uploaded_file($championImage['tmp_name'], $destino.$image);             
        $resizeObj -> saveImage($destino.$image, 100);

        header('location: ../index.php');

    }catch(PDOException $e) {  
        echo $e->getMessage();
    }

    */
?>