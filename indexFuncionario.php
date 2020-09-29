<!DOCTYPE html>


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="icon.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
	<div id="wrapper1">
		<div id="header-wrapper">
			<div id="header" class="container">
				<div id="logo">
					<div id="wrapper1">
						<div id="espaço_container" class="container">
							<div id="logo_site">
								<img src="images/carros_logo.png" alt="some text" width=940 height=200>
							</div>
						</div>
					</div>
					<h1><a href="#">Sistema de Gerenciamento de Aluguel de Carros</a></h1>
					<div id="menu">
						<ul>
							<li class="current_page_item"><a href="indexFuncionario.php" accesskey="1" title="">Principal</a></li>
							<li><a href="login/login.php" accesskey="2" title="">Login</a></li>
							<li><a href="categorias/economicos.php" accesskey="3" title="">Econômicos</a></li>
							<li><a href="categorias/utilitarios.php" accesskey="4" title="">Utilitários</a></li>
							<li><a href="categorias/suv.php" accesskey="5" title="">SUV</a></li>
							<li><a href="categorias/luxo.php" accesskey="6" title="">Luxo</a></li>
							<li><a href="contato.php" accesskey="7" title="">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="wrapper2">
				<div id="welcome" class="container">
					<div class="title">
						<h2>Bem-vindo(a) ao sistema de aluguel de automoveis</h2>
					</div>
					<h3>Este é um sistema desenvolvido para facilitar o <strong>gerenciamento</strong> de aluguel de veículos.</h3>
				</div>
			</div>
			<div id="wrapper3">
				<div id="portfolio" class="container">
					<div class="title">
						<h2>Opções do sistema:</h2>
					</div>
					<div class="column1">
						<div class="box">
							<span class="icon icon-wrench"></span>
							<form method="post" action="../carro/pesquisar_carros.php">
								<h3>Alterar Dados dos carros</h3>
								<p>Altere os dados dos carros cadastrados. Como: Status, Manutenção, etc.</p>
								<button type="submit" id="botaofun1" class="button">
									Alterar dados dos carros
								</button>
							</form>
						</div>
					</div>
					<div class="column2">
						<div class="box">
							<span class="icon icon-file-alt"></span>
							<form method="post" action="../carro/inserir_carros.php">
								<h3>Inserir um carro na frota</h3>
								<p>Insira um novo veiculo no sistema de gerenciamento!</p>
								<button type="submit" id="botaofun2" class="button">
									Inserir novo carro
								</button>
							</form>
						</div>
					</div>
					<div class="column3">
						<div class="box">
							<span class="icon icon-key"></span>
							<form method="post" action="altera_conta.php">
								<h3>Alterar meus dados</h3>
								<p>Altere seus dados cadastrados. Como: Nome, CPF, etc.</p>
								<button type="submit" id="botaofun2" class="button">
									Alterar meus dados
								</button>
							</form>
						</div>
					</div>
					<div class="column4">
						<div class="box">
							<span class="icon icon-laptop"></span>
							<form method="post" action="../cliente/alterar_conta.php">
								<h3>Alterar Dados dos clientes</h3>
								<p>Altere os dados dos clientes. Como: Nome, CPF, etc.</p>
								<button type="submit" id="botaofun2" class="button">
									Alterar dados do cliente
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper1">
			<div id="espaço_container" class="container">
				<div class="title">
					<h2>Temos todos os tipos de automóveis!</h2>
					<img src="images/veiculos.png" alt="some text" width=800 height=280>
				</div>
			</div>
		</div>
		<div id="espaço_container" class="container">
			<div class="title">
				<h2>Acesse nossas redes sociais!</h2>
				<span class="byline">Estamos sempre a disposição de nossos clientes!</span>
			</div>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span></span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
			<div id="espaço_container" class="container">
			</div>
		</div>
</body>

</html>