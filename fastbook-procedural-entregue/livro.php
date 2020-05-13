<?php
session_start();

if (!$_SESSION['logado']) {
	header("Location: login.php?error=true");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css'/>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>livro</title>


</head>
<body>
	<header>
     <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="#"> Fastbook</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="login.php">login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="livro.php">livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="webcam.php">web foto</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="maps.php">endereço</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="sair.php">sair</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="buscar">
        </form>
      </div>
    </nav>
</header>
    <div class="container">
		<br>
<h4 align="center" class="text-primary"> Bem vindo a fastbooks livros</h4>
<h5 align="center" class="text-primary"> Explore nossos livros</h5>
<span align="center" class="text-primary"> Escolhe um livro e opte   </span><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />

<hr>
<br><br>

<div class="row">

	<div class="col-md-4">
		<div class="card mb-4 text-white bg-dark" >
			<img class="card-img-top" width="200" height="400"src="img/useacabeca.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Use A Cabeça! - Programação Javascript</h5>

				Autor: Freeman, Eric - Robson, Elisabeth<br>Marca: Alta Books <br>
				De R$ 144,00 por
				<br>
				R$ 115,20 <br><br>
			<!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7V_Cwz1-p/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO -->


				<!-- FIM DO BOTAO PAGSEGURO -->
			</div>
		</div>
	</div>



	<div class="col-md-4">

		<div class="card mb-4 text-white bg-dark">
			<img class="card-img-top" width="200" height="400"src="img/javaareferencia.jpg" alt="Card image cap">

			<div class="card-body">
				<h5 class="card-title"> JAVA  <br>A referencia completa </h5>
				Autor: Schildt, Herbert <br>Marca: Alta Books <br>
				De R$ 250,00 por
				<br>
				R$ 200,00 <br><br>
			<!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7V_Cw5rer/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO -->

				<!-- FIM DO BOTAO PAGSEGURO -->
			</div>
		</div>
	</div>

	<div class="col-md-4">

		<div class="card mb-4 text-white bg-dark">
			<img class="card-img-top" width="200" height="400"src="img/htmlecss.jpg" alt="Card image cap">

			<div class="card-body">
				<h5 class="card-title">HTML e CSS: Projete e Construa Websites</h5>
				Autor: Jon Duckett <br>Marca: Alta Books <br>
				De R$ 200,99 por
				<br>
				R$ 183,99 <br><br>
				<!-- INICIO DO BOTAO PAGSEGURO --><a href="https://pag.ae/7V_Cvtbpv/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a><!-- FIM DO BOTAO PAGSEGURO -->

				<!-- FIM DO BOTAO PAGSEGURO -->
			</div>
		</div>
	</div>
</div>



</div>








</div>
</body>
</html>