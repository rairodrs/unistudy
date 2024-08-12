<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check List</title>
        <link rel="stylesheet" href="styles/checkList.css">
        <link rel="stylesheet" href="styles/barraDeNavegacao.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <style>
        body{
    background:#f9f9f9;
    background-position-x: center;
    background-size: cover;
    background-attachment: fixed;
}
    </style>

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
        <div class="container"  data-subject="Português">
            <div class="select-btn">
                <span class="btn-text">Português</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Formação de Palavras</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Art. , Subst. e Adj.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Verbos I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Verbos II</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Fundamentos Literários </span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trovadorismo e Humanismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Renascimento</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Quinhentismo e Barroco</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Advérbios</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Pronomes I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Pronomes II</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Pronomes III</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Gregório de Matos e Padre Antonio Vieira</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Neoclass. e Arcad.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Estét. Romântica (prosa-PT)</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Estét. Romântica (prosa-BR)</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Funções de Linguagem </span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Variação Linguística I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Variação Linguística II</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Variação Linguística III</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Numerais, Preposi. e interj.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Conjunções</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Período Simples I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Período Simples II</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Período Simples III</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Estét. Romântica poesia</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Estét. Realista e Realis. PT</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Realis. no BR: Machado de A.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Parnasianismo e Simbol.</span>
                </li>
            </ul>
        </div> 

        <div class="container"  data-subject="Matemática">
            <div class="select-btn">
                <span class="btn-text">Matemática</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
    
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Potenciação e Radiciação</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Equações 1 grau</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Equações 2 grau</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Teoria dos Conjuntos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trigon. no triângulo ret.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Produtos Notáveis</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Fatoração</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Conjuntos Numéricos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Introdução a geo. plana</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Âng. em triâng. e circunf.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Razão Prop., Teo. Tales e da Bissetriz Int.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Pontos Not. de um triâng.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Operações com intervalos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Inequações 1 e 2 grau</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Relações, funções e def.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Funções do 1 grau</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Razão, proporção e grand. prop.</span>
                </li>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Teorema fund. da Aritmética, MMC e MDC</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Porcentagem</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Acréscimos e descontos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Semelhança de triâng.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Rel. métricas no triâng. ret. </span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Trigonometria</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Função polinomial do 2 grau</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Equa., ineq. e func. exp.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Def. e prop. dos logaritmos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Equa. , ineq. e sist. equa. logarít.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Juros simples e compostos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Conceitos Trigonométricos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Polígonos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Áreas quadril. e razão de semel. p/ áreas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Área do círculo, setor e seg. circular </span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Poliedros e noções de geo. métrica de posição</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Prismas</span>
                </li>
            </ul>
        </div>




        <div class="container" data-subject="História">
            <div class="select-btn">
                <span class="btn-text">História</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
    
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">A arte pré-histórica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">A arte na ant.: Egito e Mesopotâmia</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Ant. Clássica: A arte Grega I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Ant.Clássica: A arte Grega I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">História e Pré- história</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Ant. Clássica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Civilização Grega I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Civilização Grega II e Civ. Roamana</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Formação de Portugal e Navg. Ultramiarinas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">América pré-colombiana</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Período pré-colonial</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Economia colonial e sociedade e inv. Holandesas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">A arte Romana</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">A arte Medieval</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">A arte Renascentista I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">A arte Renascentista II</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Civilização Romana</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Civ. Muçul. e Reino Franco</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Sis. Feudal, Igreja Cat. e Sacro Imp. Romano-Germ. </span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Band., Miner. e Trat. de Lim.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Sist.Colonial, Revoltas Natv. e Mov. Emanp.</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Períodos Pombalino e Joanino</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Independência do BR e América ES</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Baixa idade média</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Renascimento Cultural e científico</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Reforma e Contrarreforma</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Antigo Regime</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Monarq, e Rev. Inglesas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Iluminismo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Primeiro Reinado</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Regência e Segundo Reinado</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Crise do Império</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">República da Espada</span>
                </li>
            </ul>
        </div>




        <div class="container" data-subject="Biologia">
            <div class="select-btn">
                <span class="btn-text">Biologia</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>

            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Origem da vida</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Evidências evolutivas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text"> Teorias evolutivas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Taxonomia e Reinos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Vírus</span>
                </li>

                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Reino Monera</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Reino protoctista I: Protozoários</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Composição química celular I - III</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Código genético e síntese proteica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Pirâmides e eficiência Ecológicas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Relações Ecológicas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Dinâmica populacional e sucessão ecológica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Reino protoctista II: Algas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Poríferos e cnidários</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Platelmintos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Nematelmintos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Introdução à citologia</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Citoplasma</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Núcleo</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Divisão celular: mitose</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Biomas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Biomas Aquáticos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Ciclo Biogeoquímicos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Problemas Ambientais</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Tipos de Reprodução e Ciclos de vida</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Moluscos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Anelídeos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Artrópodes e Quinodermos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Cordados I</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Cordados II</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Meiose e variabilidade genética</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Gametogênese</span>
                </li> <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Histologia I e II</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Respiração celular e fermentação</span>
                </li>




            </ul>
        </div>

        <div class="container" data-subject="Química">
            <div class="select-btn">
                <span class="btn-text">Química</span>
                <span class="arrow-dwn">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </div>
    
            <ul class="list-items">
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Modelos e estruturas atômicas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Íons e Distribuição eletônica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Tabela Periódica/span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Propriedades Periódicas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Propriedades de matéria</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Diagramas e mudanças de estados</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Sistemas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Análise Imediata</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Grandezas Químicas </span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Fórmulas e Leis Ponderais</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Introdução à Estequiometria</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Estequiometria</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Ligação Iônica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Ligações covalente e metálica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Geometria e polaridade moleculares</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Forças Intermoleculares</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Radioatividade</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Cinética dos decaimentos radioativos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Introdução a quim. Orgânica</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Hidrocarbonetos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Leis físicas dos gases</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Transformações Gasosas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Misturas Gasosas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Densidade dos Gases, Efusão e Difusão Gasosa</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Ácidos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Bases</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Sais</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Eletólitos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Óxidos Iônicos</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Funções Orgânicas I - III</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Outras funçôes orgânicas</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Isomeria Plana</span>
                </li>

                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Solubilidade</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Concentrações comum e molar</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Título e partes por milhão</span>
                </li>

                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Diluição e Mistura de Soluções</span>
                </li>
                <li class="item">
                    <span class="checkbox">
                        <i class="fa-solid fa-check check-icon"></i>
                    </span>
                    <span class="item-text">Mistura de Soluções com reação</span>
                </li>               
            </ul>
        </div>





    <div class="container" data-subject="Geografia">
        <div class="select-btn">
            <span class="btn-text">Geografia</span>
            <span class="arrow-dwn">
                <i class="fa-solid fa-chevron-down"></i>
            </span>
        </div>

        <ul class="list-items">
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Movimentos da Terra</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Coordenadas geográficas e fuso horário</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Noções de Cartografia</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Elementos do clima e fatores climáticos</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">A história do pensamento Geográfico</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Geologia</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Geologia BR e Exploração mineral</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Gemorfologia</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Dinâmicas Climáticas</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Climas do BR e do Mundo</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Hidrologia e Bacias Hidrográficas</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Classificação do Relevo</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Solos</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Problemas ambientais mundiais</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Grandes biomas do mundoi</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Dominios Morfoclimáticos II</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Problemas ambientais do Brasil</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Conferências e protocolos para o meio ambiente</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Regionalização do espaço brasileiro</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Sistemas Agrários</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Antiga ordem mundial</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Globalização e Blocos econômicos</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Comércio internacional</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Regiões socioeconômicas mundiais</span>
            </li>
        </ul>
    </div>

<div class="container" data-subject="Literatura">
    <div class="select-btn">
        <span class="btn-text">Literatura</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Marília de Dirceu</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Quincas Borba</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Alguma Poesia</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Mensagem</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Angústia</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Romanceiro da Inconfidência</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Física">
    <div class="select-btn">
        <span class="btn-text">Física</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Introd. ao estudo dos movimentos</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">M.r.u. e gráficos</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">M.r.u.v. e gráficos</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Queda livre e lançamento vertical</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Calorimetria</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Grandezas físicas</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Introd.aos fenômenos térmicos</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Estudo do calor sensível</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Mudanças de estado</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Eletrostática</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Vetores</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Princ. da eletrostática</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Lei de Coulomb</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Campo elétrico</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Lançamentos horizontal e oblíquo</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Cinemática vetorial</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Mov. circular</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Transmissão de mov. circular</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Termodinâmica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Transmissão de calor</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Expansão térmica de sólidos e líquidos</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Lei geral dos gases</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">1 lei da termodinâmica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Força elétrica e campo elétrico</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Potencial elétrico</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Trabalho no campo elétrico</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Pot.elétrico no ceu e equi. eletrostático</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Introd. leis de Newton</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">F. peso, normal, tração e sist. de corpos</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Decomp. de forças e plano inclinado</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Forças de atrito</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Força elástica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Óptica geométrica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Seg. lei da termodinâmica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Introd. à óptica geométrica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Espelhos planos I</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Espelhos planos II</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Espelhos esféricos: estudo geométrico</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Eletrodinâmica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Corrente elétrica</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Assoc. de resistores em série</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Assoc. de resistores em paralelo</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Potência dissipada por efeito Joule</span>
    </li>
    <li class="item">
        <span class="checkbox">
            <i class="fa-solid fa-check check-icon"></i>
        </span>
        <span class="item-text">Amperímetro, voltímetro e ponte de Wheatstone</span>
    </li>
</ul>
</div>
<div class="container" data-subject="Simulados">
    <div class="select-btn">
        <span class="btn-text">Simulados</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">ENEM 1 dia (17/02)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">ENEM 2 dia (24/02)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">ENEM 1 dia (20/04)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">ENEM 2 dia (27/04)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Unesp (09/03)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Fuvest 1 fase (16/03)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Unicamp (23/03)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Famerp 1 (06/04)</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Famerp 2 (13/04)</span>
        </li>
    </ul>
</div>

<div class="container" data-subject="Língua Estrangeira">
    <div class="select-btn">
        <span class="btn-text">Lingua Estrangeira</span>
        <span class="arrow-dwn">
            <i class="fa-solid fa-chevron-down"></i>
        </span>
    </div>

    <ul class="list-items">
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Overview and analysis</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Do you understand</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Who is who?</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">The here and now</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Focus on the past</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Looking forward</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Should we continue</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Perfection</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Prepositions</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Don't forget</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Picture round</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Are you the one who understands</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Furthermore</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Look here</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">How am i? clarifying</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Gerund/Infinitive</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Thinking bigger</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Literature</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">What is going on now?</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Up to you!</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Action</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Analyzing songs lyrics</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Conditional</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Reported Speech</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Important Notice</span>
        </li>
        <li class="item">
            <span class="checkbox">
                <i class="fa-solid fa-check check-icon"></i>
            </span>
            <span class="item-text">Focused on ENEM</span>
        </li>
    </ul>
    
</div>


<script src="js/materias.js"></script>
    </body>
</html>