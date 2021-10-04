<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cadastrar.css">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Boas-vindas ao League of Legends: Wild Rift</title>
</head>
<body>
    <?php include './shared/nav.html' ?>

    <div class="container-formulario">
        <div class="titulo-cadastro">
            <div class="detalhe-cadastro"></div>
            Crie <br> seu campeão</div>
        <form class="form" method="POST" action="./classes/champion.php" enctype="multipart/form-data">
            
            <label for="">Nome do campeão</label><br><br>

            <input class="input-text" type="text" required placeholder="Lee Sin" name="championName" id="championName">

             <br><br>
            <label for="">Breve descrição</label><br><br>
            <input class="input-text" type="text" required placeholder="O Monge Cego" name="championDescription" id="championDescription"> <br>
            <br><br>
            
            <input class="input-file" type="file" id="championImage" name="championImage" accept="image/*" required>
            <br><br><br>

            <div class="checkbox-container">
                <span>Escolha a categoria</span><br><br>
                <label class="checkbox" for="assassino">
                    <input type="checkbox" value="assassino" id="assassino" name="categoria[]">
                    Assassino
                </label>
                <br>
                <label class="checkbox" for="lutador">
                    <input type="checkbox" value="lutador" id="lutador" name="categoria[]">
                    Lutador
                </label>
                <br>
                <label class="checkbox" for="mago">
                    <input type="checkbox" value="mago" id="mago" name="categoria[]">
                    Mago
                </label>
                <br>
                <label class="checkbox" for="atirador">
                    <input type="checkbox" value="atirador" id="atirador" name="categoria[]">
                    Atirador
                </label>
                <br>
                <label class="checkbox" for="suporte">
                    <input type="checkbox" value="suporte" id="suporte" name="categoria[]">
                    Suporte
                </label>
                <br>
                <label class="checkbox" for="tanque">
                    <input type="checkbox" value="tanque" id="tanque" name="categoria[]">
                    Tanque
                </label>
        
            </div>
            <br>
            <div>
                <span>Selecione a dificuldade</span><br><br>
                <input type="radio" id="Baixa" name="dificuldade" value="Baixa" checked>
                <label for="Baixa">Baixa</label><br>
                <input type="radio" id="Moderada" name="dificuldade" value="Moderada">
                <label for="Moderada">Moderada</label><br>
                <input type="radio" id="Alta" name="dificuldade" value="Alta">
                <label for="Alta">Alta</label>
            </div>
            <br><br><br>
            <button class="button" type="submit">Enviar</button> <br>
            <button class="button" type="reset">Limpar</button>
        </form>
    </div>

    <?php include './shared/footer.html' ?>
</body>
</html>