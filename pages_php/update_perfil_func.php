<?php

session_start();
  ini_set('display_errors', 0); 
  ini_set('display_startup_errors', 0); 
  error_reporting(E_ALL);
  
  
  if($_SESSION['logged_in'] == false){
    echo "<script>document.location='login.php'</script>";
  };
   
   
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <title>Ovni - Alterar Perfil Musico</title>
    <style type="text/css">
      .collapse ul li a, .nav-item a{
        font-size: 16px; text-decoration: none; font-family: sans-serif
      }
      .loggedOutDiv1{
        margin-top: -2.5em;
      }
      .loggedOutDiv2{
        margin-top: 0em;
        margin-left: 0.65em;
      }

      .carousel-indicators li{
        width: 25px;
        height: 25px;
        border-radius: 50%;
      }
      
      @media screen and (max-width: 450px){     	
	.container{
		width: 100%!important;
	}
	
	.w-50{
		width: 100%!important;
	}
	
	.w-25{
		width: 100%!important;
	}      
      }
    </style>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="colorlib.com">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
      <link href="../css/main.css" rel="stylesheet" />
      <link href="../css/menu.css" rel="stylesheet" /> 
      <link rel="icon" type="imagem/png" href="../images/logo_ovni_no_borders.png" /> 

      
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.dropotron.min.js"></script>
    <script src="../js/skel.min.js"></script> 
    <script src="../js/init.js"></script>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style-wide.css" /> 

  <body>
     <?php
     
     include('verify.php'); 
     include('menu.php');
     
     ?>

    <div class="jumbotron mb-0">
      <div class="container bg-light p-5" style="border-radius: 25px">
          <?php 
            $url_atual= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if ($url_atual == "http://ovnis.mus.br/pages_php/cadastroMusicos.php?erro"){
            echo "
          <div class='alert alert-warning w-25 mr-auto ml-auto' role='alert'>
            <center>Usuário já cadastrado.</center>
          </div>";
            };
          ?>
        <h1 class="center text-center">Alterar perfil</h1>
        <p></p>
        <form id="myForm2" action="../pages_php/update_perfil_func_update.php" class="w-50 ml-auto mr-auto">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" minlength="7" maxlength="35">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" minlength="7" maxlength="35">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: Avenida Paulista, Nº" minlength="5" maxlength="30">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="complemento">Complemento do endereço</label>
              <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento(Opcional)" minlength="3" maxlength="30">
            </div>
            <div class="form-group col-md-6">
              <label for="telefone">Telefone Comercial</label>
              <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00)0000-0000" minlength="13" maxlength="14">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                  <option>Acre</option>
                  <option>Alagoas</option>
                  <option>Amapá</option>
                  <option>Amazonas</option>
                  <option>Bahia</option>
                  <option>Ceará</option>
                  <option>Distrito Federal(Brasília)</option>
                  <option>Espírito Santo</option>
                  <option>Goiás</option>
                  <option>Maranhão</option>
                  <option>Mato Grosso</option>
                  <option>Mato Grosso do Sul</option>
                  <option>Minas Gerais</option>
                  <option>Pará</option>
                  <option>Paraíba</option>
                  <option>Paraná</option>
                  <option>Pernambuco</option>
                  <option>Piauí</option>
                  <option>Rio de Janeiro</option>
                  <option>Rio Grande do Norte</option>
                  <option>Rio Grande do Sul</option>
                  <option>Rondônia</option>
                  <option>Roraima</option>
                  <option>Santa Catarina</option>
                  <option selected>São Paulo</option>
                  <option>Sergipe</option>
                  <option>Tocantins</option>
                </select>
            </div>
            <div class="form-group col-md-4">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex: SP" maxlength="30" minlength="2">
            </div> 
            <div class="form-group col-md-4">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" maxlength="30" minlength="9">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="instrumento">Instrumento</label>
                <select name="instrumento" id="instrumento" class="form-control">
                  <option>Acordeão</option>
                  <option>Baixo</option>
                  <option>Bateria</option>
                  <option>Cavaco</option>
                  <option>Flauta</option>
                  <option>Guitarra</option>
                  <option>Instrumentos (DJ</option>
                  <option>Órgão</option>
                  <option>Piano</option>
                  <option>Saxofone</option>
                  <option>Teclado</option>
                  <option>Trombone</option>
                  <option>Trompa</option>
                  <option>Trompete</option>
                  <option>Viola</option>
                  <option>Violão</option>
                  <option>Violino</option>
                </select>
            </div>
            <div class="form-group col-md-6">
              <label for="estilo">Estilo Musical Principal</label>
                <select name="estilo_musical" id="estilo" class="form-control">
                  <option>Alternativa</option>
                  <option>Axé</option>
                  <option>Blues</option>
                  <option>Country</option>
                  <option>Dance</option>
                  <option>Eletrônica</option>
                  <option>Folk</option>
                  <option>Forró</option>
                  <option>Funk</option>
                  <option>Hip-Hop</option>
                  <option>Jazz</option>
                  <option>MPB</option>
                  <option>Pagode</option>
                  <option>R&B</option>
                  <option>Reggae</option>
                  <option>Rock</option>
                  <option>Samba</option>
                  <option>Sertanejo</option>
                </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="descricao">Fale um pouco sobre você. [Descrição]</label>
              <textarea class="form-control" id="descricao" name="descricao_func" rows="3" maxlenght="220"></textarea>
            </div>
            <input type="submit" class="btn btn-primary mr-auto ml-auto" style="display: block;"/>
          </div>
      </div>
</div>

</body>
<div id="copyright" style="background-color:#212529;">
      <div class="container">
        <div class="copyright">
          <p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
          <ul class="icons">
            <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
            <li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/jquery.mask.js"></script>
    <script type="text/JavaScript">
      //MASCARAS
      $(document).ready(function () { 
        jQuery(function($){
          $("#cep").mask('99999-999');
          $("#telefone").mask("(99)99999-9999");
        });
      });
    </script>
    
  </body>
</html>