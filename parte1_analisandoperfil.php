<?php declare(strict_types=1) ?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
                                                                
								<form method="post" action="parte2_autoanalise.php">
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
											<input type="email" name="email" id="email" value="" required />
										</div>	
										<div class="field">
											<label for="department"><h3>Gênero</h3></label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
										<div class="field quarter">
											<input type="radio" id="genero_f" name="genero" required/>
											<label for="genero_f">Feminino</label>
										</div>
										<div class="field quarter">
											<input type="radio" id="genero_m" name="genero" />
											<label for="genero_m">Masculino</label>
										</div>
										<div class="field quarter" style="visibility:hidden;">
											<input type="radio" />
											<label>-</label>
										</div>
										
										<div class="field">
											<label for="bairro"><h3>Bairro</h3></label>
											<select name="bairro" id="bairro" required>
													<option disabled selected value> -- Escolha uma opção -- </option>
													<option value="1">Prainha</option> 
													<option value="2">Praia dos Anjos</option> 
													<option value="3">Praia Grande</option> 
													<option value="4">Centro</option>
													<option value="5">Canaã</option>
													<option value="6">Vila Industrial</option>
													<option value="7">Macedônia</option>
													<option value="8">Sítio</option>  
                                                                                                        <option value="9">Pontal do Atalaia</option>  
													<option value="10">Morro da Cabocla</option>
													<option value="11">Morro da Boa Vista</option>
													<option value="12">Outros</option>
											</select>
										</div>

										<div class="field">
											<label for="department"><h3>Idade</h3></label>
											<input type="radio" id="idadea" name="idade" required />
											<label for="idadea">Entre 10 e 17 anos</label>
										</div>
                                                                                <div class="field">
											<input type="radio" id="idadeb" name="idade" />
											<label for="idadeb">Entre 18 e 24 anos</label>
										</div>
										<div class="field">
											<input type="radio" id="idadeb" name="idade" />
											<label for="idadec">Entre 25 e 34 anos</label>
										</div>
										<div class="field">
											<input type="radio" id="idadec" name="idade" />
											<label for="idaded">Entre 35 e 59 anos</label>
										</div>
										<div class="field">
											<input type="radio" id="idaded" name="idade" />
											<label for="idadee">60 anos ou mais &nbsp;&nbsp;</label>
										</div>
										<div class="field">
											<label for="name"><h4>Não sabe a sua idade? Digite o ano de nascimento que está em seu documento:</h4></label>
											<input type="text" name="nsidade" id="name" value=""/>    
										</div>

										<div class="field">
											<label for="autodec"><h3>Você se considera:</h3></label>
										</div>

										<div class="field third">
											<input type="radio" id="negro" name="autodec" required />
											<label for="negro">Negro </label>
										</div>
										<div class="field third">
											<input type="radio" id="indigena" name="autodec" />
											<label for="indigena">Indígena </label>
										</div>
										<div class="field third">
											<input type="radio" id="pardo" name="autodec" />
											<label for="pardo">Pardo </label>
										</div>
										<div class="field half">
											<input type="radio" id="branco" name="autodec" />
											<label for="branco">Branco </label>
										</div> 
										<div class="field half">
											<input type="radio" id="outros" name="autodec" />
											<label for="outros">Outros </label>
										</div> 
										<div class="field">
											<label for="department"><h3>Nível de escolaridade</h3></label> 
                                                                                        <select class="select-escolaridade" name="escolaridade" id="escolaridade" required>
												<option disabled selected value> -- Escolha uma opção -- </option>
												<option value="escolaridade1">Ensino fundamental incompleto</option> 
												<option value="escolaridade2">Ensino fundamental completo</option> 
												<option value="escolaridade3">Ensino médio incompleto</option> 
												<option value="escolaridade4">Ensino médio completo</option>                                                                                  
												<option value="escolaridade5">Graduação</option>
												<option value="escolaridade6">Pós-graduação</option>
												<option value="escolaridade7">Mestrado</option>
												<option value="escolaridade8">Doutorado</option> 
												<option value="escolaridade9">Pós-doutorado</option>
											</select>
										</div>

										
										                                                                                                                                                   
                                                                                <div class="field escolaridade" id="escolaridade1" style="display:none;">
											<label for="department">Selecione xxxTODAS as escolas que você já estudou</label> 
											<select name="escola1" id="escola1">    
                                                                                                <option disabled selected value> -- Escolha uma opção -- </option>
                                                                                                <option value="fp">CM Francisco Porto de Aguiar </option>
												<option value="ce">CENAQ</option> 
												<option value="cb">Ciep Brizolão</option> 
												<option value="emjp">EM João Torres</option> 
												<option value="abj">EM Adolpho Beranger Júnior</option>
												<option value="cb">Instituto Ágape</option> 
												<option value="cb">Instituto MGP</option> 
												<option value="cb">SOSEC</option>
												<option value="cb">Outras dentro de Arraial</option>
												<option value="cb">Outras fora de Arraial</option>   
											</select>                                                                                                                                                                               
										</div>
										
																		
										     
										<div class="field escolaridade" id="escolaridade2" style="display:none;">
											<label for="department">Selecione TODAS as escolas que você já estudou</label> 
											<select name="escola2" id="escola2">  
                                                                                            <option disabled selected value> -- Escolha uma opção -- </option>
                                                                                            <option value="fp">CM Francisco Porto de Aguiar</option>
                                                                                            <option value="ce">CENAQ</option> 
                                                                                            <option value="cb">Ciep Brizolão</option> 
                                                                                            <option value="emjp">EM João Torres</option> 
                                                                                            <option value="abj">EM Adolpho Beranger Júnior</option>
                                                                                            <option value="cb">Instituto Ágape</option> 
                                                                                            <option value="cb">Instituto MGP</option> 
                                                                                            <option value="cb">SOSEC</option>
                                                                                            <option value="cb">Outras dentro de Arraial</option>
                                                                                            <option value="cb">Outras fora de Arraial</option>     
											</select>                                                                                                                                                        
										</div>
                                                                                <div class="field escolaridade" id="escolaridade3" style="display:none;">
                                                                                    <label for="department">Selecione TODAS as escolas que você já estudou</label> 
                                                                                    <select name="escola3" id="escola3">
                                                                                        <option disabled selected value> -- Escolha uma opção -- </option>
                                                                                        <option value="fv">CE Almirante Frederico Villar</option> 
                                                                                        <option value="vj">CE Vinte de Julho</option>
                                                                                        <option value="fp">CM Francisco Porto de Aguiar</option>
                                                                                        <option value="ce">CENAQ</option> 
                                                                                        <option value="cj">CEJA</option>
                                                                                        <option value="cb">Ciep Brizolão</option> 
                                                                                        <option value="emjp">EM João Torres</option> 
                                                                                        <option value="abj">EM Adolpho Beranger Júnior</option>
                                                                                        <option value="cb">IFRJ</option> 
                                                                                        <option value="cb">Instituto Ágape</option> 
                                                                                        <option value="cb">Instituto MGP</option> 
                                                                                        <option value="cb">SOSEC</option>
                                                                                        <option value="cb">Outras dentro de Arraial</option>
                                                                                        <option value="cb">Outras fora de Arraial</option>   
                                                                                    </select>                                                                                                                                                                                   
										</div>
									
												
										      
											<div class="field escolaridade" id="escolaridade4" style="display:none;">
											<label for="department">Selecione TODAS as escolas que você já estudou</label> 
											<select name="escola3" id="escola3">
                                                                                                <option disabled selected value> -- Escolha uma opção -- </option>
												<option value="fv">CE Almirante Frederico Villar</option> 
												<option value="vj">CE Vinte de Julho</option>
												<option value="fp">CM Francisco Porto de Aguiar</option>
												<option value="ce">CENAQ</option> 
												<option value="cj">CEJA</option>
                                                                                                <option value="cb">Ciep Brizolão</option> 
												<option value="emjp">EM João Torres</option> 
												<option value="abj">EM Adolpho Beranger Júnior</option>
												<option value="cb">IFRJ</option> 
												<option value="cb">Instituto Ágape</option> 
												<option value="cb">Instituto MGP</option> 
												<option value="cb">SOSEC</option>
												<option value="cb">Outras dentro de Arraial</option>
												<option value="cb">Outras fora de Arraial</option>   
											</select>                                                                                                                                                                                   
											</div>
									
										

										<div class="field">
											<label for="department"><h3>Renda familiar (por mês)</h3></label> 
											<select name="rendafam" id="rendafam" required>
												<option disabled selected value> -- Escolha uma opção -- </option>
												<option value="fv">De 0 a 1 salário mínimo (até R$1.100)</option> 
												<option value="vj">Entre 1 e 3 salários mínimos (de R$1101 até R$3300)</option>
												<option value="fp">Mais de 3 salários mínimos (de R$3400 pra cima)</option>
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
							
							<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
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