<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Hearty life style</title>
</head>
<body>
<main class="principal">
     <section class="frases">
       <div>
       <h4>Seja bem vindo! <p> crie sua  conta e tenha acesso <br> a diversos conteúdos da</p> </h4>
        <h1>Hearty life style</h1>
       </div>
        
        <div class="imagem-cara">
        <img src="../img/fazendeiro.png" alt="imagem">
        </div>  
     </section>

    <section class="formulario">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            Email:
            <input type="email" name="email" placeholder="seu email" required>
            <br><br>
            Senha:
            <input type="password" name="senha" placeholder="sua senha" required>
            <br><br>
           
            <center>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
            
                <div class="links-login">
                <a href="formulario.php">Criar conta</a>
                <a href="../index.html">voltar ao início</a>
                </div>
            </center>   
            <br>
             <a href="#">esqueci a senha!</a>
             </form>
    </section>
</main>

</body>
</html>
    



