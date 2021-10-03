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
        include './config/DB/conexao.php';

        $consulta = $cn->query('select id,nome,sexo,email from tbl_aula_pw;');
    ?>
    <nav>
        <a href="https://www.riotgames.com/"><div class="logo-riot"><img title="Riot Games" src="./assets/images/logos-icons/riot-icon-logo.png"/></div></a>
        <a href="https://wildrift.leagueoflegends.com/"><img class="logo" title="Wild Rift" src="assets/images/logos-icons/logo.png"/></a>    
        <ul>
            <li><a href="index.html">Consultar</a></li>
            <li><a href="cadastrar.html">Cadastrar</a></li>
        </ul>
    </nav>

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
           
            <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/akali.jpg" title="Akali">
                </div>
                <div class="ch-name">
                    Akali
                </div>
           </div>
           <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/ahri.jpg" title="Ahri">
                </div>
                <div class="ch-name">
                    Ahri
                </div>
            </div>

            <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/riven.jpg" title="Riven">
                </div>
                <div class="ch-name">
                    Riven
                </div>
            </div>

            <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/nunu.jpg" title="Nunu e Willump">
                </div>
                <div class="ch-name">
                    Nunu e Willump
                </div>
            </div>

            <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/shaco.jpg" title="Shaco">
                </div>
                <div class="ch-name">
                    Shaco
                </div>
            </div>

            <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/kayn.jpg" title="Kayn">
                </div>
                <div class="ch-name">
                    Kayn
                </div>
            </div>

            <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/KhaZix.jpg" title="Kha'Zix">
                </div>
                <div class="ch-name">
                    Kha'Zix
                </div>
            </div>

            <div class="cd-champion">
                <div class="cd-image">
                    <img src="assets/images/splash-art/yasuo.jpg" title="Yasuo">
                </div>
                <div class="ch-name">
                    Yasuo
                </div>
            </div>

        </div>
    </div>

    <div class="banner">
        <div class="stores">
            <a href="https://riotgames.sng.link/Dus0s/42qx" target="blank"><img src="assets/images/logos-icons/google-play.svg" title="Disponível no google play" alt="Google Play"></a>
            <a href="https://riotgames.sng.link/Dus0s/5d8l" target="blank"><img src="assets/images/logos-icons/app-store.svg" title="Disponível na app store" alt="App Store"></a>
            <a href="https://riotgames.sng.link/Dus0s/6zlo" target="blank"><img src="assets/images/logos-icons/galaxy-store.png" title="Disponível na galaxy store" alt="Galaxy Store"></a>
        </div>
    </div>

    <footer class="uppercase">
        <div class="footer-container">
            <p id="texto-torneios">Torneios independentes</p>
            <img src="assets/images/logos-icons/riot-logo.png" alt="Riot Games"/>
            <div class="footer-social">
                <a href="" target="blank"><i class="bi bi-facebook"></i></a>
                <a href="" target="blank"><i class="bi bi-instagram"></i></a>
                <a href="" target="blank"><i class="bi bi-twitter"></i></a>
                <a href="" target="blank"><i class="bi bi-youtube"></i></a>
            </div>
            <p id="texto-copy">&copy; 2019-2020 Riot Games, Inc. RIOT GAMES, LEAGUE OF LEGENDS: WILD RIFT e todos
            os logotipos associados são marcas comerciais, marcas de serviço e/ou marcas registradas
            da Riot Games, Inc.
            </p>
            <ul>
                <li><a href="#" target="blank">Política de privacidade</a></li>
                <li><a href="#" target="blank">Termos de Uso</a></li>
                <li><a href="#" target="blank">EULA</a></li>
                <li><a href="#" target="blank">Trabalhe conosco</a></li>
                <li><a href="#" target="blank">Preferência de Cookies</a></li>
            </ul>
        </div>
        
    </footer>
</body>
</html>