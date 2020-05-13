<?php

error_reporting(E_ALL ^ E_NOTICE);
$error = $_GET['error'];
if ($error) {
	$msn_erro = "Você não esta logado, entre com o facebook";

}
include_once 'facebook.php';

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <link rel="stylesheet" href="../assets/css/estilo.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Login facebook</title>


    <style type="text/css">
    </style>
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


<main class="container">
      <h5 align="center" class="text-danger">  <?php echo $msn_erro ?></h5>
    <div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> login</h1>
            <div class="social-login" >
                <a href="<?=$loginUrl?>" class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Entrar com o facebook</span> </a>

            </div>
            <p style="text-align:center"> ou  </p>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="senha" required="">

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Entrar </button>
            <a href="#" id="forgot_pswd">esqueceua senha ?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
          
            </form>
            <br>

    </div>

</main>



    <p style="text-align:center">


      </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>