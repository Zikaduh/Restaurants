<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belisco’s Café Bistrô</title>
    <link rel="stylesheet" href="stylers/StylersCSS.css">
    <link rel="stylesheet" href="stylers/Slider.css">
    <link rel="stylesheet" href="stylers/login.css">
</head>
<header>
    <nav>
    <div class="container-logo">
        <a href="index.php"><h1>Belisco’s Café</h1></a>
    </div>

    <div class="menu">
        <ul>
            <li><a href="#">Quem Somos</a></li>
            <li><a href="#">Cardápio</a></li>
            <li><a href="#">Novidades</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Contato</a></li>

        </ul>
    </div>

    <div class="rede-sociais">
        <a href="https://www.facebook.com/beliscoscafebistro" target="_blank"><img src="imagens/facebook.png" alt="facebook"></a>
        <a href="https://www.instagram.com/beliscoscafe/" target="_blank"><img src="imagens/instagram.png" alt="instagram"></a>
        <a href="#" target="_blank"><img src="imagens/whatsapp.png" alt="whatsapp"></a>
    </div>

    <div class="painel-login">
    <div class="center">
        <input type="checkbox" id="show">
        <label for="show" class="showLogin"><h1>Entrar</h1></label>
        <div class="container">
            <label for="show"><img src="imagens/x.png" alt=""></label>
            <h1>login</h1>
            <form action="#">
            <div class="content">
                <label for="">Email</label>
                <input type="text" required>
            </div>
            <div class="content">
                <label for="">Senha</label>
                <input type="password" required>
            </div>
            <div class="forgot-password"><a href="#">Esqueceu a senha?</a></div>
            <div class="btn">
                <button type="submit">Entrar</button>
            </div>
            </form>
        </div>
    </div>

</nav>
</header>