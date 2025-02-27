<footer id="rodape">
	<div class="container-footer-all">

		<div class="container-body">
			<div class="coluna1">
				<h1>Mais Informações do site</h1>
				<p>
					SebooK é uma Plataforma Web dedicada aos amantes de livros usados com a principal missão de fornecer acesso ágil e eficiente
					aos leitores na busca por livros em sua região. Oferecemos um sistema de Gestão de Acervos para os donos de sebos parceiros.
					Promovemos interação entre sebos e leitores sob um enfoque social - através da Economia Solidária - incentivando assim
					o consumo sustentável, pois, além de garantir economia ao leitor, trará visibilidade aos empreendedores desse mercado,
					estimulando e fomentando de forma ecológica o consumo dessas obras dentro e fora dos grandes centros.
				</p>
			</div>
			<div class="coluna2">
				<h1>Redes Sociais</h1>
				<div class="row">
					<a href="#face">
						<img src="<?= _URLBASE_ ?>public/icon/facebook.svg" alt="">
						<label>Facebook</label>
					</a>
				</div>
				<div class="row">
					<a href="#instagram">
						<img src="<?= _URLBASE_ ?>public/icon/instagram.svg" alt="">
						<label>Instagram</label>
					</a>
				</div>
				<div class="row">
					<a href="#twitter">
						<img src="<?= _URLBASE_ ?>public/icon/twitter.svg" alt="">
						<label>Twitter</label>
					</a>
				</div>
			</div>
			<div class="coluna3">
				<h1>Entre em contato</h1>
				<div class="row2">
					<a href="#email">
						<img src="<?= _URLBASE_ ?>public/icon/email.svg" alt="">
						<label>contato@sebook.com.br</label>
					</a>
				</div>
				<div class="row2">
					<a href="#postal">
						<img src="<?= _URLBASE_ ?>public/icon/homeFooter.svg" alt="">
						<label id=postalFooter>Caixa Postal 5180<br>São Paulo - SP - Brasil<br>CEP: 01311-100</label>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-footer">
		<div class="footer">
			<div class="copyright">
				<p>
					@ 2019 Todos os direitos Reservados |
					<a href="">Sebook</a>
				</p>
			</div>

			<div class="informar">
				<a href="">Informação Companhia </a> |
				<a href="">Privações e Politica </a> |
				<a href="">Termos e Condições</a>
			</div>
		</div>
	</div>

</footer>

<div class="master1">
	<nav class="menuMobile">
		<a href="<?= _URLBASE_ ?>" class="home">
			<img src="<?= _URLBASE_ ?>public/icon/home.svg" alt="Home" title="Página inicial">
		</a>
		<a href="<?= _URLBASE_ ?>area/user/pages/busca" class="search">
			<img src="<?= _URLBASE_ ?>public/icon/busca.svg" alt="Buscar" title="Buscar">
		</a>
		<div class="menu">
			<input type="checkbox" id="menuH">
			<label for="menuH">
				<img src="<?= _URLBASE_ ?>public/icon/menu.svg" alt="">
			</label>
			<div class="ulCenter">
				<ul>
					<!--<li><a href="<?php
										// echo _URLBASE_ 
										?>src/view/user/pages/menu/sebos.php">SEBOS</a>
					</li>-->
					<li>
						<a href="<?= _URLBASE_ ?>">HOME</a>
					</li>
					<li>
						<a href="<?= _URLBASE_ ?>area/user/menuHome/sebos">SEBOS</a>
					</li>
					<li>
						<a href="<?= _URLBASE_ ?>area/user/menuHome/livros">LIVROS</a>
					</li>
					<li>
						<a href="<?= _URLBASE_ ?>area/user/menuHome/quemSomos">QUEM SOMOS</a>
					</li>
					<li>
						<a href="<?= _URLBASE_ ?>area/user/menuHome/ajuda">FAQ</a>
					</li>
				</ul>
				</ul>
			</div>
		</div>
	</nav>
</div>