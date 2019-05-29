<?php get_header(); ?>
<section id="initial-banner" class="bg-image" style="background-image: url(<?php echo THEMEPATH; ?>images/celdas-solares-inicio.jpg)">
	<img src="<?php echo THEMEPATH; ?>images/identidad/logo.png">
	<p>Caminemos juntos hacia la energía sustentable</p>
</section>
<section class="container">
	<p class="font-size-medium">Generar tu propia energía está al alcance de tus manos</p>
	<p>Somos una empresa de sistemas solares para casas y comercios. Nuestros clientes usan el sol como una fuente limpia e inagotable para consumir electricidad a un costo sustancialmente menor, con mayor claridad y una estupenda esperiencia. Esto lo logramos con una plataforma tecnológica comprobada. <br>Infinitamente orgullosos de ser parte del cambio.</p>
	<!-- slides - carousel -->
</section>
<section class="bg-primary-light">
	<div class="container">
		<p class="font-size-medium">¿Cómo funcionan los páneles solares?</p>
		<!-- video -->
	</div>
</section>
<section class="container">
	<p class="font-size-medium">Un medio de energía renovable, no contaminate y disponible en todo el planeta</p>
	<em class="icon-"></em> <!-- icono hoja -->
</section>
<section class="bg-primary">
	<div class="container">
		<p class="font-size-medium">Con BH Solar nuestros clientes ahora pagan hasta un 97% menos de luz</p>
		<div class="row">
			<div class="col s12 m6 l4">
				<em class="icon- margin-bottom-20"></em><!-- icon -->
				<p>Convertimos la energía solar en electricidad que genera beneficios al instante</p>
			</div>
			<div class="col s12 m6 l4">
				<em class="icon- margin-bottom-20"></em><!-- icon -->
				<p>Llegamos de manera imperceptible y con el servicio habitual, a todo tipo de dispositivos y luminarias eléctricas que requieran potencia</p>
			</div>
			<div class="col s12 m6 offset-m3 l4">
				<em class="icon- margin-bottom-20"></em><!-- icon -->
				<p>Toda la energía solar generada y sin uso, va de regreso a la red eléctrica del servicio BH Solar y se convierte en ahorros para ti</p>
			</div>
		</div>
		<p>Cámbiate a energía solar y <a href="#">empieza a ahorrar hoy</a></p>
	</div>
</section>
<section class="container">
	<p class="font-size-medium">Preguntas frecuentes</p>
	<div class="faqs">
	<?php
	$faqs_args = array(
		'post_type' 		=> 'vy_faqs',
		'posts_per_page' 	=> -1,
	);
	$faqs_query = new WP_Query( $faqs_args );
	if ( $faqs_query->have_posts() ) : 
		$i = 1;
		while ( $faqs_query->have_posts() ) : $faqs_query->the_post(); 
			$post_id = get_the_ID();?>
			<div id="faq_<?php echo $post_id; ?>" class="item-faq">
				<h3><?php the_title(); ?></h3>
			<?php the_content(); ?></div>			
		<?php $i ++; endwhile; wp_reset_postdata();
	endif;  ?>
	</div>
</section>
<section id="bg-paneles-solares" class="bg-image text-center">
	<div class="container">
		<p class="font-size-medium">¿Sabias que con páneles solares puedes...?</p>
		<div class="row">
			<div class="col s12 m6 l4">
				<em class="icon- margin-bottom-20"></em><!-- icono -->
				<p>Disminuir las emisiones de CO2</p>
			</div>
			<div class="col s12 m6 l4">
				<em class="icon- margin-bottom-20"></em><!-- icono -->
				<p>Evitar que se destruyan más ecosistemas naturales</p>
			</div>
			<div class="col s12 m6 offset-m3 l4">
				<em class="icon- margin-bottom-20"></em><!-- icono -->
				<p>Fomentar el crecimiento de un mundo más limpio</p>
			</div>
		</div>
	</div>
</section>
<section class="container text-center">
	<h3>Contáctanos</h3>
	<p>Disfruta de los beneficios de tener páneles solares <br>¡Nosotros te ayudamos!</p>
	<!-- form contacto -->

</section>
<?php get_footer(); ?>