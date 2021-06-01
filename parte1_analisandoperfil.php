<?php declare(strict_types=1) ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Análise de Perfil</title>
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
						<h1>Parte 1: Análise de perfil</h1>
						<hr>
						<section>
                                                    
							<div class="content">
                                                            
                                                                
                                                            <form method="post" action="processa1.php">
									<div class="fields">
                                                                            
                                                                                
                                                                                <?php
                                                                                    //$data_atual = date("d-m-Y h:i:s");
                                                                                    //$data_final = date("2021-05-22");
                                                                                    //$diferenca = strtotime($data_final) – strtotime($data_atual);
                                                                                    //echo ($diferenca >= 0) ? $diferenca : 0;
                                                                                ?>   
                                                                                
										<div class="field half">
											<label for="name"><h3>Nome</h3></label>
											<input type="text" name="nome" id="name" value="" required/>
										</div>

										<div class="field half">
											<label for="email"><h3>E-mail</h3></label>
											<input type="email" name="email" id="email" value="" />
										</div>	
										<div class="field">
											<label for="department"><h3>Gênero</h3></label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
										<div class="field quarter">
											<input type="radio" value="Feminino" id="genero_f" name="genero" required/>
											<label for="genero_f">Feminino</label>
										</div>
										<div class="field quarter">
                                                                                    <input type="radio" value="Masculino" id="genero_m" name="genero" />
											<label for="genero_m">Masculino</label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
										
										<div class="field">
											<h3><label for="bairro">Bairro</label></h3>
											<select name="bairro" id="bairro" required>
													<option disabled selected value> -- Escolha uma opção -- </option>
													<option value="Prainha">Prainha</option> 
													<option value="PDA">Praia dos Anjos</option> 
													<option value="PG">Praia Grande</option> 
													<option value="Centro">Centro</option>
													<option value="Canaã">Canaã</option>
													<option value="Vila">Vila Industrial</option>
													<option value="QQ">Macedônia</option>
													<option value="Sítio">Sítio</option>  
                                                                                                        <option value="Pontal">Pontal do Atalaia</option>  
													<option value="Morro da Coca">Morro da Cabocla</option>
													<option value="Boa Vista">Morro da Boa Vista</option>
													<option value="Outros">Outros</option>
											</select>
										</div>

										<div class="field">
                                                                                    <h3><label for="department" >Idade</label></h3>
											<input type="radio" value="10a17" id="10a17" name="idade" required />
											<label for="10a17">Entre 10 e 17 anos</label>
										</div>
                                                                                <div class="field">
											<input type="radio" value="18a24" id="18a24" name="idade" />
											<label for="18a24">Entre 18 e 24 anos</label>
										</div>
										<div class="field">
											<input type="radio" value="25a34" id="25a34" name="idade" />
											<label for="25a34">Entre 25 e 34 anos</label>
										</div>
										<div class="field">
											<input type="radio" value="35a59" id="35a59" name="idade" />
											<label for="35a59">Entre 35 e 59 anos</label>
										</div>
										<div class="field">
											<input type="radio" value="60mais" id="60mais" name="idade" />
											<label for="60mais">60 anos ou mais &nbsp;&nbsp;</label>
										</div>
										
								

										<div class="field">
											<label for="autodec" value="autodec"><h3>Você se considera:</h3></label>
										</div>

										<div class="field third">
											<input type="radio" id="negro" value="negro" name="etnia" required />
											<label for="negro">Negro </label>
										</div>
										<div class="field third">
											<input type="radio" id="indigena" value="indígena" name="etnia" />
											<label for="indigena">Indígena </label>
										</div>
										<div class="field third">
											<input type="radio" id="pardo" value="pardo" name="etnia" />
											<label for="pardo">Pardo </label>
										</div>
										<div class="field half">
											<input type="radio" id="branco" value="branco" name="etnia" />
											<label for="branco">Branco </label>
										</div> 
										<div class="field half">
											<input type="radio" id="outros" value="outros" name="etnia" />
											<label for="outros">Outros </label>
										</div> 
										<div class="field">
											<label for="department"><h3>Nível de escolaridade</h3></label> 
                                                                                        <select class="select-escolaridade" value="escolaridade" name="escolaridade" id="escolaridade" required>
												<option disabled selected value> -- Escolha uma opção -- </option>
												<option value="EFincompleto">Ensino fundamental incompleto</option> 
												<option value="EFcompleto">Ensino fundamental completo</option> 
												<option value="EMincompleto">Ensino médio incompleto</option> 
												<option value="EMcompleto">Ensino médio completo</option>                                                                                  
												<option value="Graduação">Graduação</option>
												<option value="Pós-graduação">Pós-graduação</option>
												<option value="Mestrado">Mestrado</option>
												<option value="Doutorado">Doutorado</option> 
												<option value="Pós-doutorado">Pós-doutorado</option>
											</select>
										</div>

										<div class="field">
											<label for="department"><h3>Renda familiar (por mês)</h3></label> 
											<select name="renda_familiar" id="rendafam" required>
												<option disabled selected value> -- Escolha uma opção -- </option>
												<option value="0 a 1">De 0 a 1 salário mínimo (até R$1.100)</option> 
												<option value="1 a 3">Entre 1 e 3 salários mínimos (de R$1101 até R$3300)</option>
												<option value="mais de 3">Mais de 3 salários mínimos (de R$3400 pra cima)</option>
											</select>        
										</div>
										<div class="field">
											<label for="name"><h3 style="display:inline;">Número de membros da família</h3><h5>(Quantidade de pessoas que moram na mesma casa)</h5></label>
											<input type="text" name="nummembros" id="nummembros" value="" required/>
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
						<p>&copy; &copy; TCC Pesquisa - IFRJ - Arraial do Cabo. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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
                        
            <script>
                    $(document).ready(function () {

                    $('.select-escolaridade').change(function (e) {
                        e.preventDefault();
						//alert($(this).val());
                        var escolaridade = $(this).val();
						// ESCONDENDO TODOS OS SELECTS DE ESCOLARIDADE 
						var x = document.getElementsByClassName("escolaridade");
						var i;
						for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";
						}
						// DEIXANDO VISIVEL SOMENTE O SELECIONADO
						document.getElementById(escolaridade).setAttribute("style", "");//.style["display"] = "block";
						
                    });
                });

				$(document).ready(function () {
					// Handle click on paging links
					$('.tm-paging-link').click(function (e) {
						e.preventDefault();

						var page = $(this).text().toLowerCase().replace(/\s/g, '-');;
						$('.tm-gallery-page').addClass('hidden');
						$('#tm-gallery-page-' + page).removeClass('hidden');
						$('.tm-paging-link').removeClass('active');
						$(this).addClass("active");
					});
				});
            </script>

	</body>
</html>