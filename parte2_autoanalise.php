<!DOCTYPE HTML>

<?php
session_start();
    if(!isset($_SESSION['id_unico'])){
        
        header('Location: index.php');
        exit();
  }
  
?>

<html>
	<head>
		<title>Parte 2 - Autoanálise</title>
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
				
				<!-- Seven -->
				<section class="wrapper style1 align-center" id="perguntas">
					<div class="inner medium">
						<h1>Parte 2: Autoanálise </h1>
						<hr>
						<section>
							<div class="content">
                                                            <form method="post" action="processa2.php">
									<div class="fields">
										<div class="field">
											<h3><label for="department" value="quest1">Você acha que entende tudo que é explicado nos jornais?</label></h3>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
                                                                                <div class="field quarter">
                                                                                    <input type="radio" value="Sim" id="txtq1_s" name="txtq1" required />
											<label for="txtq1_s">Sim</label>
										</div>
										<div class="field quarter">
                                                                                    <input type="radio" value="Não" id="txtq1_n" name="txtq1" />
											<label for="txtq1_n">Não </label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>

										<div class="field">
											<h3><label for="department" value="quest2">Você se sente seguro para preencher formulários ou fichas sozinho(a)?</label></h3>
										</div>

                                                                                <div class="field">
                                                                                    <input type="radio" value="Sim" id="txtq2_s" name="txtq2" required />
											<label for="txtq2_s">Sim, resolvo meus documentos sempre sozinho (a).</label>
										</div>
										<div class="field">
                                                                                    <input type="radio" value="Não" id="txtq2_n" name="txtq2" />
											<label for="txtq2_n">Não, tenho medo de errar e costumo pedir ajuda. &nbsp; &nbsp; </label>
										</div>
										<div class="field">
											<label for="department" value="quest3"><h3>Qual é o seu grau de dificuldade ao ler um texto?</h3></label>
										</div>
										<div class="field">
											<input type="radio" value="Rápido" id="txtq3_a" name="txtq3" required />
											<label for="txtq3_a">Leio rápido e com facilidade.</label>
										</div>
										<div class="field">
                                                                                    <input type="radio" value="devagar" id="txtq3_b" name="txtq3" />
											<label for="txtq3_b">Leio devagar mas entendo bem.</label>
										</div>
										<div class="field">
                                                                                    <input type="radio" value="dificuldade" id="txtq3_c" name="txtq3" />
											<label for="txtq3_c">Tenho dificuldades em ler e mais ainda para entender a mensagem.  </label>
										</div>
										<div class="field">
                                                                                    <input type="radio" value="pede_ajuda" id="txtq3_d" name="txtq3" />
											<label for="txtq3_d">Leio bem devagar e costumo pedir ajuda. &nbsp; &nbsp;  </label>
										</div>  
										<div class="field">
											<label for="department" value="quest4"><h3>Costuma pedir ajuda para escrever uma mensagem?</h3></label>
										</div> 
										<div class="field half">
                                                                                    <input type="radio" value="nunca" id="txtq4_a" name="txtq4" required />
											<label for="txtq4_a">Nunca</label>
										</div>
										<div class="field half">
                                                                                    <input type="radio" value="as_vezes" id="txtq4_b" name="txtq4" />
											<label for="txtq4_b">Às vezes </label>
										</div>
										<div class="field half">
                                                                                    <input type="radio" value="quaase_sempre" id="txtq4_c" name="txtq4" />
											<label for="txtq4_c">Quase sempre </label>
										</div>
										<div class="field half">
                                                                                    <input type="radio" value="sempre" id="txtq4_d" name="txtq4" />
											<label for="txtq4_d">Sempre peço </label>
										</div>        

										<div class="field">
											<label for="department" value="quest5"><h3>Algum membro de sua família (ou até mesmo você) precisou interromper os estudos para trabalhar?</h3></label>
										</div>      
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>  
										<div class="field quarter">
                                                                                    <input type="radio" value="sim" id="txtq5_s" name="txtq5" required />
											<label for="txtq5_s">Sim</label>
										</div>
										<div class="field quarter">
                                                                                    <input type="radio" value="não" id="txtq5_n" name="txtq5" />
											<label for="txtq5_n">Não </label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>

										<div class="field">
											<label for="department" value="quest6"><h3>Alguém da sua família já concluiu o ensino superior?</h3></label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
										<div class="field quarter">
											<input type="radio" value="Sim"  id="txtq6_s" name="txtq6" required />
											<label for="txtq6_s">Sim</label>
										</div>
										<div class="field quarter">
											<input type="radio" value="Não" id="txtq6_n" name="txtq6" />
											<label for="txtq6_n">Não </label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>

										<div class="field">
											<label for="department" value="quest7"><h3>Você possui o hábito de ler (livros jornais, revistas etc)?</h3></label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
										<div class="field quarter">
											<input type="radio" value="sim" id="txtq7_s" name="txtq7" required />
											<label for="txtq7_s">Sim</label>
										</div>
										<div class="field quarter">
											<input type="radio" value="não" id="txtq7_n" name="txtq7" />
											<label for="txtq7_n">Não </label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>

										
										<div class="field">
											<label for="department" value="quest8"><h3>Você possui certa dificuldade em contar dinheiro (exemplo: dificuldade em saber se recebeu corretamente o troco de uma compra)?</h3></label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
										<div class="field quarter">
											<input type="radio" value="sim" id="txtq8_s" name="txtq8" required />
											<label for="txtq8_s">Sim</label>
										</div>
										<div class="field quarter">
											<input type="radio" value="não" id="txtq8_n" name="txtq8" />
											<label for="txtq8_n">Não </label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
									</div>
									<hr>
									<div class="content">
										<ul class="actions stacked" >
											<li><input class="button primary fit" type="submit" name="submit" id="submit" value="Ir para o próximo Formulário" /></li>
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
							<p>&copy; TCC Pesquisa - IFRJ - Arraial do Cabo. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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