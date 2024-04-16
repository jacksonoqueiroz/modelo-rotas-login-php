<?php
session_start();
ob_start();
include_once 'conexao.php';
// Incluir o arquivo com menu
include_once './include/menu.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
?>
 <title>Home</title>
</head>
<body>
<?php

//echo "Página home!";

?>
<main role="main" class="container">
  <div class="jumbotron">
    <h1>Cadastros</h1>
    <p class="lead">Sistema de cadastro geral.</p>
    <?php echo "<a class='btn btn-lg btn-primary' href='". URL ."cadastro'>Cadastro</a>"; ?>
  </div>
</main>