<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap');
    </style>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
   <header class="cabecalho">
       <h1>Curso PHP</h1>
       <h2>Visualização dos Exercícios:</h2>
   </header>
   <nav class="navegacao">
           <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem Formatação</a>
           <a href="index.php" class="vermelho">Voltar</a>
       </nav>
     <main class="principal">
       <div class="conteudo">
          <?php
              include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
          ?>
       </div>
     </main>      
   <footer class="rodape">
       SIQUER SIS - SOLUÇÕES E SISTEMAS © <?= date('Y'); ?>
   </footer>
</body>
</html>