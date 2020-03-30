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
                   <h3>Básico:</h3>
                   <ul>
                       <li>
                          <a href="exercicio.php?dir=basico&file=ola">
                              Olá PHP
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=basico&file=html">
                              Integração HTML.
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=basico&file=css">
                              Integração CSS.
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=basico&file=css">
                              Integração CSS.
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=basico&file=desafio">
                              Desafio
                          </a>
                       </li>
                   </ul>
               </div>
               <div class="modulo vermelho">
                   <h3>Tipos</h3>
                   <ul>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=int">
                             Tipo Inteiro
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=float">
                             Tipo Float
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=operacoesaritmetica">
                             Operações Aritméticas
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                             Desafio Precedência
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=string">
                             Tipo String
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=desafio_string">
                             Desafio String
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=boolean">
                             Tipo Boolean
                          </a>
                       </li>
                       <li>
                          <a href="exercicio.php?dir=tipos&file=conversoes">
                             Conversões
                          </a>
                       </li>
            </nav>
        </div>
   </main>
   <footer class="rodape">
       SIQUER SIS - SOLUÇÕES E SISTEMAS © <?= date('Y'); ?>
   </footer>
</body>
</html>