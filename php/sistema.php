<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sistema.css">
    <title>Hearty life Style</title>
</head>

<body>
   
     <!--landing page aqui-->
     <header class="cabecalho">

        <img class="imagem-topo" src="../img/logonutri.png" alt="logo">

        <nav class="topo-cabecalho">
        
            
            <a class="topo"  href="../receitas/receitas.html">Receitas</a>
            <a class="topo"  href="../receitas/dieta.html"> Dieta</a>
            <a class="topo"  href="../receitas/videos.html">Vídeos</a>
            <a href="../index.html" class="btn btn-danger me-5" style="color:white" id="sair">Sair</a>
         </nav>
      </header>


     <main class="conteudo">

        <section class="conteudo-principal">

            <div class="conteudo-escrito">

                <h1 class="primeira-frase">Hearty Life Style</h1>
                <h4 class="segunda-frase">Saiba tudo sobre nutrição de um modo divertido.</h4>
                
                <a class="botao" href="../receitas/quiz.html"><B>Quiz...</B></a>
                <a class="botao" href="../receitas/imc.html"><B>IMC...</B></a>


            </div><br><br>
                <img src="../img/logonutri.png" class="logoredonda" width="25%">
        </section>

        <section class="conteudo-secundario">
                <H3 class="titulo">Quais os tipos de informações?</H3>
                <P class="paragrafo">1. Aqui tem diversos tipos de videos! </P>
                <P class="paragrafo">2. Informações sobre saúde, dieta, exercícios...</P>
                <P class="paragrafo">3. Além de um quiz de perguntas sobre tal assunto</p>
        </section>
    </main>   
        

     <footer class="rodape">

     </footer>
    
</body>