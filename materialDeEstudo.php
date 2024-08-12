<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Material de estudo</title>
 
        <!-- CSS -->
<link rel="stylesheet" href="styles/materialDeEstudo.css">
<link rel="stylesheet" href="styles/barraDeNavegacao.css">  
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
     
    </head>
    <?php
 require_once "includes/banco.php";
 require_once "includes/funcoes.php";


 ?>
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
                        <a href="checkList.php">
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
                    echo "Olá ".$_SESSION['nome']."!";
                    ?>
                    </span>
                </a>
            </li>
        </div>
    </nav>
    <script src="js/barraDeNavegacao.js"></script>

 <body>
 <br>
        <div class="container-wrapper">
        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1pX6Pt4UQ1InMucyY5mGIq5oUPfnvyDQ9?usp=drive_link">Português</a>
            </div>
        </div> 

        <div class="container">
            <div class="select-btn">
                <a class="btn-text"  href="https://drive.google.com/drive/folders/1q4Yochff49CEY7iYRHQ90bQcqOs6w6Ig?usp=drive_link">Matemática</a>
            </div>
        </div>

        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/11P9cM4rXGIxjfD-qaM67l7W0CV5SO_vD?usp=drive_link">História</a>
            </div>
        </div>

        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1zya7gnhwZMLSOqB5DKTBrNIcddgG-m01?usp=drive_link">Biologia</a>
            </div>
        </div>

        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1IHry3TijQPABdJcZ_ZjL6S77wT14xp7p?usp=drive_link">Química</a>
            </div>
        </div>
    
    

         <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1PllWa1IpwHHvhM0nYXsw5fxmT9tdWbNT?usp=drive_link ">Geografia</a>
            </div>
        </div>


        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1kZebcLJqGs0tuj8PYGB4x3q5YpUQhv54?usp=drive_link">Literatura</a>
            </div>
        </div>

        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1x1dcxxyHqP1Msvnfzq290yMkai2ouect?usp=drive_link">Física</a>
            </div>
        </div>

        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1dyNcEAur4x5E4f_64TL9FrEuWS0XqCHm?usp=drive_link">Lingua Estrangeira</a>
            </div>
        </div>

        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1aBWK5M8jMXt2pw5pd3mzF7-LizWCzlKo?usp=drive_link">Resumos</a>
            </div>
        </div>

        <div class="container">
            <div class="select-btn">
                <a class="btn-text" href="https://drive.google.com/drive/folders/1Zme5lFr8q0hByMaUMyoSeWvS0s8kPw7i?usp=drive_link">Simulados</a>
            </div>
        </div>