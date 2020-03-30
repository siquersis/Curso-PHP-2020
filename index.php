<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap');
    </style>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
   <header class="cabecalho">
       <h1>Curso PHP</h1>
       <h2>Índice dos Exercícios:</h2>
   </header>
   <main class="principal">
       <div class="conteudo">
           <nav class="modulos">
               <div class="modulo verde">
                   <h3>Módulo 01</h3>
                   <ul>
                       <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
                   </ul>
               </div>
            </nav>
        </div>
   </main>
   <footer class="rodape">
       SIQUER SIS - SOLUÇÕES E SISTEMAS © <?= date('Y'); ?>
   </footer>
</body>
</html>