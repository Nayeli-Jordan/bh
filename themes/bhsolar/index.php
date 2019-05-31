<?php get_header(); ?>
<section id="initial-banner" class="bg-image text-center padding-top-130 padding-bottom-190">
	<div class="container">
		<img class="responsive-img margin-bottom-30" src="<?php echo THEMEPATH; ?>images/identidad/logo.png">
		<h2 class="uppercase color-primary-dark max-width-600 margin-auto"><strong>Caminemos juntos hacia la energía sustentable</strong></h2>		
	</div>
</section>
<section class="container text-center padding-top-bottom-60">
	<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto">Generar tu propia energía está al alcance de tus manos</p>
	<p>Somos una empresa de sistemas solares para casas y comercios. Nuestros clientes usan el sol como una fuente limpia e inagotable para consumir electricidad a un costo sustancialmente menor, con mayor claridad y una estupenda esperiencia. Esto lo logramos con una plataforma tecnológica comprobada. <br>Infinitamente orgullosos de ser parte del cambio.</p>
	<!-- slides - carousel -->
</section>
<section class="bg-primary-light text-center padding-top-bottom-60">
	<div class="container">
		<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto color-light">¿Cómo funcionan los páneles solares?</p>
		<iframe class="responsive-iframe width-100p" src="https://www.youtube.com/embed/pFJ96wUZT7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</section>
<section class="container text-center padding-top-60 padding-bottom-30">
	<p class="font-size-medium font-semibold max-width-600 margin-auto">Un medio de energía renovable, no contaminate y disponible en todo el planeta</p>
	<em class="icon-leaf icon-superlarge"></em>
</section>
<section class="bg-primary color-light text-center padding-top-bottom-60">
	<div class="container">
		<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto">Con BH Solar nuestros clientes ahora pagan hasta un 97% menos de luz</p>
		<div class="row margin-bottom-10">
			<div class="col s12 m6 l4 margin-bottom-20">
				<em class="icon-sun icon-superlarge margin-bottom-20"></em>
				<p>Convertimos la energía solar en electricidad que genera beneficios al instante</p>
			</div>
			<div class="col s12 m6 l4 margin-bottom-20">
				<em class="icon-plug icon-superlarge margin-bottom-20"></em>
				<p>Llegamos de manera imperceptible y con el servicio habitual, a todo tipo de dispositivos y luminarias eléctricas que requieran potencia</p>
			</div>
			<div class="col s12 m6 offset-m3 l4 margin-bottom-20">
				<em class="icon-child icon-superlarge margin-bottom-20"></em>
				<p>Toda la energía solar generada y sin uso, va de regreso a la red eléctrica del servicio BH Solar y se convierte en ahorros para ti</p>
			</div>
		</div>
		<p>Cámbiate a energía solar y <a href="#" class="color-primary-light text-underline">empieza a ahorrar hoy</a></p>
	</div>
</section>
<section class="container padding-top-bottom-60">
	<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto text-center">Preguntas frecuentes</p>
	<div class="faqs">
	<?php
	$faqs_args = array(
		'post_type' 		=> 'faqs',
		'posts_per_page' 	=> -1,
		'order'				=> 'ASC',
	);
	$faqs_query = new WP_Query( $faqs_args );
	if ( $faqs_query->have_posts() ) : 
		$i = 1;
		while ( $faqs_query->have_posts() ) : $faqs_query->the_post(); 
			$post_id = get_the_ID();?>
			<div id="faq_<?php echo $post_id; ?>" class="item-faq">
				<h3><?php the_title(); ?></h3>
				<div class="content-faq"><?php the_content(); ?></div>
			</div>			
		<?php $i ++; endwhile; wp_reset_postdata();
	endif;  ?>
	</div>
</section>
<section id="bg-paneles-solares" class="bg-image text-center padding-top-60 padding-bottom-40 relative">
	<div class="bg-absolute bg-opacity-light"></div>
	<div class="container relative">
		<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto">¿Sabias que con páneles solares puedes...?</p>
		<div class="row">
			<div class="col s12 m6 l4 margin-bottom-20">
				<em class="icon-wind icon-superlarge icon-fondo margin-bottom-20"></em>
				<p class="font-semibold">Disminuir las emisiones de CO2</p>
			</div>
			<div class="col s12 m6 l4 margin-bottom-20">
				<em class="icon-tree icon-superlarge icon-fondo margin-bottom-20"></em>
				<p class="font-semibold">Evitar que se destruyan más ecosistemas naturales</p>
			</div>
			<div class="col s12 m6 offset-m3 l4 margin-bottom-20">
				<em class="icon-globe icon-superlarge icon-fondo margin-bottom-20"></em>
				<p class="font-semibold">Fomentar el crecimiento de un mundo más limpio</p>
			</div>
		</div>
	</div>
</section>
<section class="container text-center padding-top-bottom-60">
	<h3 class="margin-bottom-30 max-width-600 margin-auto">Contáctanos</h3>
	<p class="margin-bottom-20">Disfruta de los beneficios de tener páneles solares <br>¡Nosotros te ayudamos!</p>
	<div id="form-contacto" class="max-width-500 margin-auto">
		<?php echo do_shortcode('[contact-form-7 id="7" title="Contacto BH Solar"]'); ?>
	</div>
</section>
<?php get_footer(); ?>