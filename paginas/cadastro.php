<?php
session_start();
ob_start();
include_once 'conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
// Incluir o arquivo com menu
include_once './include/menu.php';
?>
 <title>Cadastrar</title>
</head>
<body>
<?php

//echo "Página Cadastro!";


?>
<main role="main" class="container">
  <div class="jumbotron">
    <h1>Cadastrar</h1>
    <p class="lead">Sistema de cadastro de Alunos.</p>
  </div>
</main>