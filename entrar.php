<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="styles/entrar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <br></br>
                <br></br>
                <br></br>
                <img src="imagens/unistudyPNG.png">
                <p class="description description-primary">O amigo dos vestibulandos!</p>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Bem-vindo de volta!</h2>
                <p class="description description-second" font-size="20%">Preencha seus dados</p>
                <form class="form" method="POST">
                   
                <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="usuario" id="usuario" size="80">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="senha" id="senha" size="80">
                    </label>
                   
                    <button class="btn btn-second">
<?php

  require_once "includes/banco.php";
  require_once "includes/funcoes.php";
  

 
 $email = $_POST['usuario'] ?? null;
 $senha = $_POST['senha'] ?? null;
 $erro=null;

    if(isset($_POST['usuario']) && isset($_POST['senha'])) {
        if(empty($email) || empty($senha)){
            $erro = msg_erro ("\n Todos os dados são obrigatórios");
        } else {
            
            $q = "SELECT email, nomeUsuario, AES_DECRYPT(senhaUsuario, 'T8ShwZVA3F8fpkMAYZp3aMp8V' ) AS senhaDescriptografada FROM usuario WHERE email = '$email'";
            
            $busca = $banco->query($q);

        if($busca->num_rows>0){
            
            $reg = $busca->fetch_object();
            
            if($reg->senhaDescriptografada===$senha){     
                $_SESSION['userId']=$reg->usuarioID;
                $_SESSION['nome']=$reg->nomeUsuario;
                $_SESSION['email']=$reg->email;
                $_SESSION['senha']=$reg->senhaUsuario;               
                header('Location: inicio.php');
            }else{
                $erro = msg_erro("\n Senha Inválida");
            }
        }else{
            $erro = msg_erro("\n Usuario não existe");
        }
             
        }
}
 
?>
        <h3>ENTRAR<h3>  
                        </button>  
                        <div class="erro">
                        <?php
                        echo "<br><center>".$erro."</center>";
                        ?>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>