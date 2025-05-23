<header>
		<nav class="navbar navbar-expand-lg bg-success">
			<div class="container-fluid w-50 mx-auto">
				<a class="navbar-brand" href="#">
					<img src="img/Imagotipo.png" alt="Sabores Compartidos" height="64">
				</a>

				<div class="flex-grow-1"></div>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2 mb-lg-0 p-0">
						<li class="nav-item">
							<a class="nav-link <?=(@$menu == 0) ? "active" : ""?>" aria-current="page" href="">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=(@$menu == 1) ? "active" : ""?>" target="_blank" href="file/Manual de Usuario.pdf" download="">Manual de Uso</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=(@$menu == 2) ? "active" : ""?>" href="Updates/">Actualizaciones</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=(@$menu == 3) ? "active" : ""?>" href="AboutUs/">Sobre Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?=(@$menu == 4) ? "active" : ""?>" href="Register/">Registrarse porfavor</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>