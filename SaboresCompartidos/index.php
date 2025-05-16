<?php
include_once 'scripts/config.php';

$title = "Inicio";
$menu = 0;
?>

<?php include ROOT."extend/top.php";?>
	<div id="carouselMain" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="#" class="d-block w-100 placeholder" height="512" alt="gatobaboso">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100 placeholder" height="512" alt="...">
			</div>
			<div class="carousel-item">
				<img src="img/gatoinsano.jpg" class="d-block w-100 placeholder" height="512" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<br><br>

	<div class="text-bg-light card p-3 m-0">
		<div class="row">
			<div class="col">
				<h3>Descarga la aplicación</h3>
				<p>
					Descarga ahora la aplicación de "Sabores compartidos" en donde podras compartir tus recetas con otros usuarios y no solo eso, si no que podras navegar por recetas y videos compartidos por otros usuarios, ademas de agendar tus comidas semanalmente en un calendario interactivo 
				</p>
			<a class="btn btn-primary" href="Updates.html">
					Descargar
				</a>
			</div>
			<div class="col-auto">
				<img src="..." class="d-block placeholder" height="512" width="384" alt="...">
			</div>
		</div>
	</div>
<?php include ROOT."extend/bottom.php";?>
	