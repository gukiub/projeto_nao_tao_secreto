<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Pesquisa de Eventos</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="author" content="colorlib.com">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
	    <link href="css/main.css" rel="stylesheet" />

   		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>

		<?php
			$servername = "localhost";
			$username = "username";
			$password = "password";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT id, firstname, lastname FROM MyGuests";
			$result = $conn->query($sql);
			
			$conn->close();
		?>

	</head>
	<body>

		<!-- Wrapper -->
		<div class="wrapper style1">
			<div class="s010">
		      <form>
		        <div class="inner-form">
		          <div class="advance-search">
		            <h1 class="desc">Pesquisa de Músicos Por Instrumentos Ou Estilos</h1>
		            <div class="row">
		              <div class="col input-field">
		                <div class="input-select">
		                  <select data-trigger="" name="choices-single-defaul">
		                    <option placeholder="" value="null">Instrumentos</option>
		                    <option value="violao">Violão</option>
		                    <option value="cavaco">Cavaco</option>
		                    <option value="bateria">Bateria</option>
		                    <option value="flauta">Flauta</option>
		                    <option value="guitarra">Guitarra</option>
		                    <option value="baixo">Baixo</option>
		                    <option value="piano">Piano</option>
		                    <option value="viola">Viola</option>
		                    <option value="teclado">Teclado</option>
		                    <option value="orgao">Órgão</option>
		                    <option value="violino">Violino</option>
		                    <option value="trompa">Trompa</option>
		                    <option value="acordeao">Acordeão</option>
		                    <option value="trombone">Trombone</option>
		                    <option value="trompete">Trompete</option>
		                    <option value="saxofone">Saxofone</option>
		                    <option value="dj)">Instrumentos (DJ)</option>
		                  </select>
		                </div>
		              </div>
		              <div class="col input-field">
		                <div class="input-select">
		                  <select data-trigger="" name="choices-single-defaul">
		                    <option placeholder="" value="null">Estilos</option>
		                <option value="alternativa">Alternativa</option>
		                <option value="blues">Blues</option>
		                <option value="dance">Dance</option>
		                <option value="eletronica">Eletrônica</option>
		                <option value="hip">Hip-Hop</option>
		                <option value="rb">R&B</option>
		                <option value="reggae">Reggae</option>
		                <option value="rock">Rock</option>
		                <option value="country">Country</option>
		                <option value="folk">Folk</option>
		                <option value="forro">Forró</option>
		                <option value="funk">Funk</option>
		                <option value="jazz">Jazz</option>
		                <option value="axe">Axé</option>
		                <option value="sertanejo">Sertanejo</option>
		                <option value="mpb">MPB</option>
		                <option value="samba">Samba</option>
		                <option value="pagode">Pagode</option>
		                  </select>
		                </div>
		              </div>
		            
		              <div class="input-field">
		                  <button class="btn-delete" id="delete">RESET</button>
		                  <button class="btn-search">SEARCH</button>
		               
		              </div>
		            </div>
		          </div>
		        </div>
		      </form>
		    </div>

			<!-- Extra -->
			<div id="extra">
				<div class="container">
					<div class="row no-collapse-1">
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic02.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic03.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
					</div>
					<div class="row no-collapse-1">
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic02.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic03.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
					</div>
				</div>
			</div>

			<!-- Main -->
			<div id="main">
				<div class="container">
					<div class="row"> 
						
						<!-- Content -->
						<div class="6u">
							<section>
								<ul class="style">
									<li class="fa fa-wrench">
										<h3>Integer ultrices</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
									<li class="fa fa-leaf">
										<h3>Aliquam luctus</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section>
								<ul class="style">
									<li class="fa fa-cogs">
										<h3>Integer ultrices</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
									<li class="fa fa-road">
										<h3>Aliquam luctus</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Footer -->
		

		<!-- Copyright -->
		<div id="copyright">
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


		<script src="js/extention/choices.js"></script>
	    <script>
	      const customSelects = document.querySelectorAll("select");
	      const deleteBtn = document.getElementById('delete')
	      const choices = new Choices('select',
	      {
	        searchEnabled: false,
	        itemSelectText: '',
	        removeItemButton: true,
	      });
	      for (let i = 0; i < customSelects.length; i++)
	      {
	        customSelects[i].addEventListener('addItem', function(event)
	        {
	          if (event.detail.value)
	          {
	            let parent = this.parentNode.parentNode
	            parent.classList.add('valid')
	            parent.classList.remove('invalid')
	          }
	          else
	          {
	            let parent = this.parentNode.parentNode
	            parent.classList.add('invalid')
	            parent.classList.remove('valid')
	          }
	        }, false);
	      }
	      deleteBtn.addEventListener("click", function(e)
	      {
	        e.preventDefault()
	        const deleteAll = document.querySelectorAll('.choices__button')
	        for (let i = 0; i < deleteAll.length; i++)
	        {
	          deleteAll[i].click();
	        }
	      });

	    </script>
	</body>
</html>