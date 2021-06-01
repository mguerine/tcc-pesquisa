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
		<title>Teste finalizado</title>
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

			
				

				<section class="wrapper style1 align-center" id="perguntas">
					<div class="inner medium">
						<!-- Box -->
						<section>
							<header>
								<h3>Obrigado por participar da nossa pesquisa!</h3>
							</header>
							<div class="content">

								<div class="box">
									<p>Suas respostas foram guardadas e iremos liberar seu resultado no dia 20/06/2021.</p>
                                                                        <p>Seu código para acesso aos resultados é: <?php echo $_SESSION ['id_unico'] ?></p>
                                                                        <p>Esse projeto visa a coleta de dados e análise da qualidade de letramento dos moradores de Arraial do Cabo. A nossa intenção é registrar as taxas de analfabetismo funcional de acordo com alguns padrões como: gênero, idade e renda 
familiar, identificando os grupos com maiores as taxas e incentivando novas abordagens.</p>
                                                                        <p>O teste aplicado foi o TLS (Teste de Letramento em Saúde) que é uma adaptação transcultural para a língua portuguesa do Brasil, a partir do Test of Functional Health Literacy in Adults (TOFHLA). De acordo com o Jornal da Usp, 
                                                                         esse teste se mostrou eficaz para avaliar o desempenho cognitivo entre os adultos (mais informações em: <a href= http://www.usp.br/agen/?p=23728.>http://www.usp.br/agen/?p=23728.</a></p>

								</div>

							</div>
                                                    <script>
                                                        int main() {
                                                        int num, codresposta;
                                                        srand (time(NULL));
                                                        for (codresposta=1; codresposta<=5; codresposta++) {
                                                            /* gera um número pseudo-aleatório entre 1 e 10 */
                                                            num = rand() % 30000 + 1;
                                                            /* faça alguma coisa com o número*/
                                                            printf("%dº Anote seu código: %d\n", i, num);
                                                        }
                                                        return 0;
                                                    }
                                                    </script>  
						</section>
					</div>
				</section>
				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://linktr.ee/TccPesquisa" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
								
                                                                <p> &copy; TCC Pesquisa - IFRJ - Arraial do Cabo. Design: <a href="https://html5up.net">HTML5 UP</a></p>
								
							</ul>
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
