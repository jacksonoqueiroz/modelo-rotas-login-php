
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-xl">
    <a class="navbar-brand" href="#">Cadastro online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07XL">
      <ul class="navbar-nav mr-auto">
      	<li class="nav-item active">
          <?php echo "<a class='nav-link' href='". URL ."home'>Home</a>"; ?><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <?php echo "<a class='nav-link' href='". URL ."cadastro'>Cadastrar</a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a class='nav-link' href='". URL ."consultar'>Consultar</a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a class='nav-link' href='". URL ."grupos'>Grupos</a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a class='nav-link' href='". URL ."sobre'>Sobre</a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a class='nav-link' href='". URL ."contato'>Contato</a>"; ?>
        </li>
        <li class="nav-item">
          <?php echo "<a class='nav-link' href='". URL ."sair'>Sair</a>"; ?>
        </li>        
        
      </ul>
      <!--<form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>-->
    </div>
  </div>
</nav>
<?php

/* echo "<a href='". URL ."home'>Home</a><br>";
echo "<a href='". URL ."produtos'>Produtos</a><br>";
echo "<a href='". URL ."blog'>Blog</a><br>";
echo "<a href='". URL ."sobre'>Sobre</a><br>";
echo "<a href='". URL ."contato'>Contato</a><br><br>";*/
