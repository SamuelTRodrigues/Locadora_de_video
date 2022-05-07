<?php
session_start();

require_once "functions/functions.php";
require_once "functions/conexao.php";
//Logar no sistema
if(isset($_POST['ok']) AND $_SERVER['REQUEST_METHOD'] == 'POST'):
     $login = $_POST['login'];
     $senha =$_POST['senha'];

     if(logarSistema($login, $senha)):
    redirecionaLogado("painel/");
     else:
        $erro = "login ou senha invalidos!";
     endif;

    endif;        
     
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    
    <title>Document</title>
</head>
<body>
    <div id="login">
        <div id="logo"><img src="img/logo.webp"/></div>
        <div id="form_login">
        <form action="" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" class="input_login"/>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" class="input_login"/>

            <label for="submit"></label>
            <input type="submit" name="ok" value="logar" id="botao_logar"/>
        </form>
       <?php echo isset($erro) ? '<div id="mensagem">'. $erro. '</div>':'' ;?>
        </div>
    </div>
</body>
</html>