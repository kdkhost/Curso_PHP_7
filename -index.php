<?php
//////////////////////////////////////////////////////////////
///*                                                        //
/// Curso de PHP7 da Udemy Desenvolvido por Marcelo-Brad    //
/// kdkhost;*/                                              //
///                                                         //
//////////////////////////////////////////////////////////////

include ('idioma/portugues.php');

// variaveis do cliente
$nome = "";
$sobrenome = "";
$email = "";
$telefone = "";
$endereço = "";
$serviço = "";
$mao = "";
$pe = "";
$combo = "";
$hora = "";
$data = "";
$tipo = "";


// variaves do administrador


?>
<html>
    <head>
        <meta charset="utf-8">
    <title>Estudando PHP7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <style>
        label {color:red; font-size:13px; margin-botton:-3px;}
    </style>
    </head>
<body>
    <!-- Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- menu fim -->
    
    <!-- corpo -->
    
    <div class="container">
        <div>
    <form>
        <fieldset>
            <div class="form-group col-md-2">
      <label for="nome"><?php echo $ling_cliente ['nome']; ?></label>
      <input type="nome" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="<?php echo $ling_cliente ['nome']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="nome"><?php echo $ling_cliente ['sobrenome']; ?></label>
      <input type="sobrenome" class="form-control" id="sobrenome" placeholder="<?php echo $ling_cliente ['sobrenome']; ?>">
    </div>
        </fieldset>
    </form>
    </div>
    </diV>
    
    <!-- corpo fim -->
    
    <!-- roda pe -->
    
    <!-- roda pe fim -->
</body>
</html>