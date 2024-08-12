<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cronograma</title>
        <link rel="stylesheet" href="styles/cronograma.css">  
        <link rel="stylesheet" href="styles/barraDeNavegacao.css">   
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
       <style>
        body{
    display: grid;
   place-items: center;
}
       </style>
    </head>
    <?php
 require_once "includes/banco.php";
 require_once "includes/funcoes.php";
 ?>
    <body>
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
                    echo "Olá ".$_SESSION['nome']."!";
                    ?>
                    </span>
                </a>
            </li>
        </div>
    </nav>
    <script src="js/barraDeNavegacao.js"></script>
 <?php



 $SM="select materiaNome from cronograma where diaSemana='seg' and horario='manha'";
 $ST="select materiaNome from cronograma where diaSemana='seg' and horario='tarde'";
 $SN="select materiaNome from cronograma where diaSemana='seg' and horario='noite'";
 $SE="select materiaNome from cronograma where diaSemana='seg' and horario='extra'";
 
 $TM="select materiaNome from cronograma where diaSemana='ter' and horario='manha'";
 $TT="select materiaNome from cronograma where diaSemana='ter' and horario='tarde'";
 $TN="select materiaNome from cronograma where diaSemana='ter' and horario='noite'";
 $TE="select materiaNome from cronograma where diaSemana='ter' and horario='extra'";

 $QaM="select materiaNome from cronograma where diaSemana='qua' and horario='manha'";
 $QaT="select materiaNome from cronograma where diaSemana='qua' and horario='tarde'";
 $QaN="select materiaNome from cronograma where diaSemana='qua' and horario='noite'";
 $QaE="select materiaNome from cronograma where diaSemana='qua' and horario='extra'";
 
 $QM="select materiaNome from cronograma where diaSemana='qui' and horario='manha'";
 $QT="select materiaNome from cronograma where diaSemana='qui' and horario='tarde'";
 $QN="select materiaNome from cronograma where diaSemana='qui' and horario='noite'";
 $QE="select materiaNome from cronograma where diaSemana='qui' and horario='extra'";

 $SeM="select materiaNome from cronograma where diaSemana='sex' and horario='manha'";
 $SeT="select materiaNome from cronograma where diaSemana='sex' and horario='tarde'";
 $SeN="select materiaNome from cronograma where diaSemana='sex' and horario='noite'";
 $SeE="select materiaNome from cronograma where diaSemana='sex' and horario='extra'";
 
 
 ?>
 <body>


  
    <main class="table">

        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th><big><big><i class='bx bx-timer' ></big></big></i></th>
             <th>Segunda</th>
             <th>Terça</th>
             <th>Quarta</th>
             <th>Quinta</th>
             <th>Sexta</th>
              </tr>
            </thead>
            <tbody>
              <tr class="primeira">
                <td>Manhã</td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($SM);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($TM);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QaM);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QM);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($SeM);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                    
                </td>
                
      
              </tr>      
              <tr class="segunda">
                <td>Tarde</td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($ST);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($TT);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QaT);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QT);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($SeT);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                    
                </td>
               
              </tr>
             
              <tr class="terceira">
                <td>Noite</td> 

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($SN);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($TN);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QaN);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QN);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($SeN);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                    
                </td>
      
              </tr>
             <tr class="quarta">
                <td>Extra</td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($SE);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($TE);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QaE);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($QE);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                
                </td>

                <td>
                    <center>
                        <?php
                        $busca=$banco->query($SeE);
                        $imprimir=$busca->fetch_object();
                        echo $imprimir-> materiaNome;
                        ?>
                    </center>
                    
                </td>
                    </tr>
                </thead>
            </table>
        </section>
    </main></center>
 </body>
</body>
</html>