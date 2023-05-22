<?php

    if(isset($_POST['submit']))
    {
     
        include_once('config.php');

        $nome = $_POST['nome'];
        $email =$_POST['email'];
        $senha = $_POST['senha'];
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email) 
        VALUES ('$nome','$senha','$email')");

        header('Location: login.php');
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Heartylifestyle</title>
</head>

<body>
<main class="principal">
       
    <section>   
    <div class="imagem-cara">
        <img src="../img/idosos.png" alt="imagem">
    </div>
     </section>
     
     <section class="formulario">

    <div class="box">
        <form action="formulario.php" method="POST" id="cadMscont">
        <h1>Criar conta!</h1>
        <br>
         <div class="inputBox">
            <label for="nome" class="labelInput">Nome:</label> <br>
            <input type="text" name="nome" id="nome" class="inputUser" placeholder="seu nome" required oninput="nameValidate">
        </div>
        <br>
        <div class="inputBox">
            <label for="senha" class="labelInput">Senha:</label> <br>
            <input type="password" name="senha" id="senha" class="inputUser" placeholder="sua senha" required>
        </div>
        <br><br>
        <div class="inputBox">
            <label for="email" class="labelInput">Email:</label> <br>
            <input type="email" name="email" id="email" class="inputUser" placeholder="seu e-mail" required>
        </div>
        <br><br>
        <center>
        <input type="submit" name="submit" id="submit">
        <br>
    
        <div class="links-login">
        <a href="login.php">Entrar</a>
        <a href="../index.html">voltar ao inicio</a>
        </div>
        </center>
        </form>
    </section>
</main>

</body>
</html>
