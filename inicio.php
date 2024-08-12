<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniStudy</title>
    <link rel="stylesheet" href="styles/barraDeNavegacao.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 220vh;
        }
        image {
            max: width 60%;
            height: auto;
        }
    </style>
</head>
<body>
<?php
require_once "includes/banco.php";
require_once "includes/funcoes.php";

$nomeUsuario = $_SESSION['nome'];

?>
<div id="corpo">
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="imagens/logoMenu.png" alt="logo">
                </span>
                <div class="text header-text">
                    <span class="name">UniStudy</span>
                    <span class="profession">Amigo dos vestibulandos</span>
                </div>
            </div>
            <i class="bx bx-chevron-right toggle"></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <br>
                    <li class="nav-link">
                        <a href="inicio.php">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="cronograma.php">
                            <i class='bx bx-calendar icon'></i>
                            <span class="text nav-text">Cronograma</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="checklist.php">
                            <i class='bx bx-list-check icon'></i>
                            <span class="text nav-text">Check-list</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="materialDeEstudo.php">
                            <i class='bx bx-book-content icon'></i>
                            <span class="text nav-text">Material de estudo</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <br><br>
        <div class="bottom-content">
            <li class="">
                <a href="desconectando.php">
                    <i class="bx bx-log-out icon"></i>
                    <span class="text nav-text">Sair</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="bx bx-user icon"></i>
                    <span class="text nav-text">
                    <?php
                    echo "Olá $nomeUsuario!";
                    ?>
                    </span>
                </a>
            </li>
        </div>
    </nav>
    <script src="js/barraDeNavegacao.js"></script>

    <image src="imagens/logoPaginaInicial.png" width="60%"></image>
</div>
</body>
</html>
