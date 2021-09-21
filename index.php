<!DOCTYPE html>
<html>
<head>
	<title>Danielbook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>Danielbook</h2>
			</div><!--logo-->

			<form method="post" class="form-login">
				<div class="form-element">
					<h2 name="email">E-mail ou Telefone*</h2>
					<input type="email" name="email" required>
				</div><!--form-element-->
				<div class="form-element">
					<h2 name="senha">Senha de acesso*</h2>
					<input type="password" name="senha" required>
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">
				</div><!--form-element-->
			</form><!--form-login-->

			<div class="clear"></div><!--clear-->

		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<h2 class="danielbook">O danielbook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
			<div class="img-social">
				<img src="social.jpg" alt="Rede Social">
			</div><!--img-social-->
			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será.</h3>

				<form class="criar-conta">
					<div class="w50">
						<input type="text" name="nome" placeholder="Nome" required="">
					</div><!--w50-->

					<div class="w50">
						<input type="text" name="sobrenome" placeholder="Sobrenome" required="">
					</div><!--w50-->

					<div class="w100">
						<input type="email" name="email" placeholder="E-mail" required="">
					</div><!--w100-->

					<div class="w100">
						<input type="password" name="senha" placeholder="Senha" required="">
					</div><!--w100-->

					<div class="w100">
						<h3>Data de Nascimento</h3>
						<select name="nascimento-dia" class="nascimento">
							<?php
							for($i = 1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option value="0">Janeiro</option>
							<option value="1">Fevereiro</option>
							<option value="2">Março</option>
							<option value="3">Abril</option>
							<option value="4">Maio</option>
							<option value="5">Junho</option>
							<option value="6">Julho</option>
							<option value="7">Agosto</option>
							<option value="8">Setembro</option>
							<option value="9">Outubro</option>
							<option value="10">Novembro</option>
							<option value="11">Dezembro</option>
						</select>
						<select name="nascimento-ano" class="nascimento">
							<?php
							for($i = 1960; $i <= 2020; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php } ?>
						</select>
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" value="masculino" name="sexo">
							<h2>Masculino</h2>
							<input type="radio" value="feminino" name="sexo">
							<h2>Feminino</h2>
						</div>
					</div><!--w100-->

					<div class="clear"></div>

					<div class="w100">
						<input type="submit" name="acao" value="Cadastrar!">
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->
			</div><!--abrir-conta-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="">Português(Brasil)</a>
			<a href="">English(US)</a>
			<a href="">Español</a>
			<a href="">Français(France)</a>
			<a href="">Italiano</a>
			<a href="">Deutsh</a>
			<a href=""></a>
			<a href=""></a>
			<a href=""></a>
		</div><!--center-->

		<div class="center" style="border: 0; padding-top: 10px; width: 80%; margin-left: 70px; ">
			<a class="selected-lingua" href="">Cadastre-se</a>
			<a href="">Entrar</a>
			<a href="">Messenger</a>
			<a href="">Facebook lite</a>
			<a href="">Celular</a>
			<a href="">Encontrar amigos</a>
			<a href="">Pessoas</a>
			<a href="">Páginas</a>
			<a href="">Locais</a>
			<a href="">Jogos</a>
			<a href="">Locais</a>
			<a href="">Marketplace</a>
			<a href="">Videos</a>
			<a href="">Grupos</a>
			<a href="">Receitas</a>
			<a href="">Esportes</a>
			<a href="">Look</a>
			<a href="">Moments</a>
			<a href="">Instagram</a>
			<a href="">Local</a>
			<a href="">Sobre</a>
			<a href="">Criar Anúncio</a>
			<a href="">Criar Página</a>
			<a href="">Desenvolvedores</a>
			<a href="">Carreiras</a>
			<a href="">Privacidade</a>
			<a href="">Cookies</a>
			<a href="">Opções de Anúncio></a>
			<a href="">Termos</a>
			<a href="">Ajuda</a>
		</div><!--center-->
	</section><!--linguas-->

	<h6>Danielbook, 2020.</h6>

</body>
</html>