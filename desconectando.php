<?php 
    session_abort();
?>
    <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...</title>
    <link rel="stylesheet" href="styles/desconectando.css">
</head>
<body>
<?php
    require_once "includes/banco.php";
    require_once "includes/funcoes.php";
 
    ?> 
   
    <div class="overlay">
        <div class="loading-box">
            <div class="container">
            <?php
        
        ?>
                <div class="content first-content">
                    <div class="first-column">
                        <img src="imagens/unistudyPNG.png"UniStudy Logo>
                        <h3>Aguarde enquanto desconectamos</h3>
                        <p class="description description-second">Lamentamos qualquer transtorno!</p>
                        <?php
                        header("Location: desconectado.php");
                        ?>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                    </div>    
                </div>
            </div>
        </div>
    </div>
</body>
