<main class="contenedor seccion">
	<h1>Más sobre nosotros</h1>
	<?php include 'iconos.php'; ?>
</main>

<section class="seccion contenedor">
	<h2>Casas y Depas en Venta</h2>

	<?php
		include 'listado.php';
	?>

	<div class="alinear-derecha">
		<a href="/propiedades" class="boton-verde">Ver todas</a>
	</div>
</section>

<section class="imagen-contacto">
	<h2>Encuentra la casa de tus sueños</h2>
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptas corrupti inventore.</p>
	<a href="/contacto" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
	<section class="blog">
		<h3>Nuestro Blog</h3>

		<article class="entrada-blog">
			<div class="imagen">
				<picture>
					<source srcset="build/img/blog1.webp" type="image/webp">
					<source srcset="build/img/blog1.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada-blog">
				</picture>
			</div>

			<div class="texto-entrada">
				<a href="/entrada">
					<h4>Terraza en el techo de tu casa</h4>
					<p class="informacion-meta">Escrito el: <span>06/12/2023</span>por <span>Admin</span></p>
					<p>Consejos para Construir una terraza con los mejores materiales</p>
				</a>
			</div>
		</article>

		<article class="entrada-blog">
			<div class="imagen">
				<picture>
					<source srcset="build/img/blog2.webp" type="image/webp">
					<source srcset="build/img/blog2.jpg" type="image/jpeg">
					<img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada-blog">
				</picture>
			</div>

			<div class="texto-entrada">
				<a href="/entrada">
					<h4>Guía para la decoración de tu hogar</h4>
					<p class="informacion-meta">Escrito el: <span>06/12/2023</span>por <span>Admin</span></p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia earum eos fugit accusantium maxime natus?</p>
				</a>
			</div>
		</article>
	</section>

	<section class="testimoniales">
		<h3>Testimoniales</h3>
		<div class="testimonial">
			<blockquote>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe non placeat obcaecati ratione nesciunt odit maxime sint magni cum ullam?
			</blockquote>
			<p>-Admin</p>
		</div>
	</section>
</div>