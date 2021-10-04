<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Boas-vindas ao League of Legends: Wild Rift</title>


</head>
<body>
    <?php
        include './classes/connection.php';
        include './shared/nav.html';
        $consulta = $cn->query('call readChampion');
    ?>
    

    <div class="container-gradient"></div>
    
    <div class="container-campeao">
        <div class="caption">
            <div class="forma"></div>
            <p class="uppercase">Selecione o seu <br/> <b class="texto-destaque escuro">Campeão</b></p>
        </div>
        
        <!-- FILTROS -->

        <div class="caption plus">
            <p>Com mais de 40 campeões para jogar e colecionar, sempre terá um
                que é perfeito para o seu estilo de jogo.
            </p>
        </div>
        <br/><br/><br/>
        <div class="cards-container">

           <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
                <div class="cd-champion">
                    <div class="cd-image">
                        <img src="./assets/images/splash-art/<?php echo $exibe['championImage']?>" title="<?php echo $exibe['championName'] 
                        .', '. $exibe['championDescription']?>">
                    </div>
                    <div class="ch-name">
                        <?php echo $exibe['championName']?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <?php include './shared/footer.html' ?>
</body>
</html>