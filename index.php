
<!DOCTYPE HTML>

<html>
	<head>
		<title>Pesquisa</title>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
		<div id="wrapper" class="divided">

			<!-- One -->
			<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
				<div class="content">
					<h1>Participe da nossa pesquisa</h1>
					<p class="major">Nós do  <a href="https://portal.ifrj.edu.br/" target="_blank">IFRJ - Campus Arraial do Cabo</a>, como parte do nosso trabalho de TCC estamos realizando uma pesquisa censitária sobre a taxa de analfabetismo no município de Arraial do Cabo. Analfabetos funcionais são pessoas que, embora saibam reconhecer letras e números, são incapazes de compreender textos simples, assim como realizar operações básicas de matemática.</p>
					<ul class="actions stacked">
						<li><a href="#mainform" class="button big wide smooth-scroll-middle">Responder agora!</a></li>
					</ul>
				</div>
				<div class="image">
					<img src="images/arraial-do-cabo.jpg" alt="" />
				</div>
			</section>
				
			<!-- Seven -->
			<section class="wrapper style1 align-center" id="mainform">
				<div class="inner medium">
					<h2>Morador (a) de Arraial do Cabo?</h2>
					<section>
						<div class="content">

                                                    <form method="post" action="processomorador.php">
								<div class="fields">
									<div class="field" style="visibility:hidden;">
										<input type="radio" />
										<label>-</label>
									</div>
									<div class="field quarter" style="visibility:hidden;">
										<input type="radio" />
										<label>-</label>
									</div>
									<div class="field quarter">
										<input type="radio" id="morador_sim" name="morador" value="sim" required/>
										<label for="morador_sim">Sim</label>
									</div>
									<div class="field quarter">
										<input type="radio" id="morador_nao" name="morador" value="nao"/>
										<label for="morador_nao">Não</label>
                                
                                                                    </div>
									<div class="field quarter" style="visibility:hidden;">
										<input type="radio" />
										<label>-</label>
									</div>
                                                                   
								</div>
								<hr>
								<div class="content">
									<ul class="actions stacked" >
										<li><input class="button primary fit"  type="submit" name="submit" id="submit" value="Ir para o Formulário" /></li>
									</ul>
								</div>	
							</form>   
						</div>                                                  
					</section>
				</div>
			</section>

			<!-- Footer -->
			<footer class="wrapper style1 align-center">
				<div class="inner">
					<ul class="icons">
						
						<li><a href="https://linktr.ee/TccPesquisa" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
						
					</ul>
					<p></a>.</p>
				</div>
			</footer>
		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
                

	</body>
</html>

