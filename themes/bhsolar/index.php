<?php get_header(); ?>
<section id="initial-banner" class="bg-image bg-center-bottom  text-center padding-top-50 padding-bottom-270" style="background-image: url('<?php echo get_the_post_thumbnail_url(35, "full"); ?>')">
	<div class="container">
		<img class="responsive-img margin-bottom-30 wow fadeIn" src="<?php echo THEMEPATH; ?>images/identidad/logo.png">
		<h2 class="uppercase color-primary-dark max-width-600 margin-auto wow fadeInLeft text-shadow"><strong><?php echo get_the_title(35); ?></strong></h2>		
	</div>
</section>
<?php 
	$id 		= 36; 
	$post 		= get_post($id); 
	$content 	= apply_filters('the_content', $post->post_content);
?>
<section class="container text-center padding-top-bottom-60">
	<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto  wow fadeInLeft"><?php echo get_the_title(36); ?></p>
	<p class="wow fadeIn"><?php echo $content; ?></p>
	<div class="max-width-600 margin-auto wow fadeIn margin-top-20">
		<div class="cycle-slideshow" data-cycle-fx=shuffle data-cycle-speed=1500 data-cycle-easing=easeInOutBack data-cycle-ease-out=easeOutBack data-cycle-timeout=2000 data-cycle-slides="> div">
		<?php
		$slider_args = array(
			'post_type' 		=> 'slider',
			'posts_per_page' 	=> 10,
			'order'				=> 'ASC',
		);
		$slider_query = new WP_Query( $slider_args );
		if ( $slider_query->have_posts() ) : 
			while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
				<div class="bg-image padding-bottom-60p width-100p" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>')"></div>		
			<?php endwhile; wp_reset_postdata();
		endif;  ?>
		</div>
	</div>
</section>
<?php 
	$id 		= 37; 
	$post 		= get_post($id); 
	$content 	= apply_filters('the_content', $post->post_content);
?>
<section class="bg-gradient-primary-light text-center padding-top-bottom-60">
	<div class="container">
		<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto wow fadeInLeft color-light"><?php echo get_the_title(37); ?></p>
		<div class="max-width-800 margin-auto">
			<?php echo $content; ?>
		</div>
	</div>
</section>
<section class="container text-center padding-top-60 padding-bottom-30">
	<p class="font-size-medium font-semibold max-width-600 margin-auto wow fadeInLeft"><?php echo get_the_title(38); ?></p>
	<em class="icon-leaf icon-superlarge block wow slideInUp"></em>
</section>
<section class="bg-gradient-primary color-light text-center padding-top-bottom-60">
	<div class="container">
		<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto wow fadeInLeft"><?php echo get_the_title(39); ?></p>
		<div class="row margin-bottom-10">
		<?php
		$iconos_args = array(
			'post_type' 		=> 'iconos',
			'posts_per_page' 	=> 3,
			'order'				=> 'ASC',
		);
		$iconos_query = new WP_Query( $iconos_args );
		if ( $iconos_query->have_posts() ) : 
			$i = 1;
			while ( $iconos_query->have_posts() ) : $iconos_query->the_post(); 
				$post_id = get_the_ID();?>
				<?php if ($i === 3) { ?>
					<div class="col s12 m6 offset-m3 l4 margin-bottom-20">
				<?php } else { ?>
					<div class="col s12 m6 l4 margin-bottom-20">
				<?php } ?>
						<em class="<?php the_title(); ?> icon-superlarge margin-bottom-20 block wow bounceIn"></em>
						<div class="wow fadeIn"><?php the_content(); ?></div>
					</div>			
			<?php $i ++; endwhile; wp_reset_postdata();
		endif;  ?>
		</div>
		<p class="wow fadeInRight">Cámbiate a energía solar y <a href="<?php echo SITEURL; ?>#section-contacto" class="color-primary-light text-underline">empieza a ahorrar hoy</a></p>
	</div>
</section>
<section id="bg-paneles-solares" class="bg-image text-center padding-top-60 padding-bottom-40 relative">
	<div class="bg-absolute bg-opacity-light"></div>
	<div class="container relative">
		<p class="font-size-medium font-semibold margin-bottom-30 max-width-600 margin-auto wow fadeInLeft"><?php echo get_the_title(40); ?></p>
		<div class="row">
			<?php
			$iconosround_args = array(
				'post_type' 		=> 'iconosround',
				'posts_per_page' 	=> 3,
				'order'				=> 'ASC',
			);
			$iconosround_query = new WP_Query( $iconosround_args );
			if ( $iconosround_query->have_posts() ) : 
				$i = 1;
				while ( $iconosround_query->have_posts() ) : $iconosround_query->the_post(); 
					$post_id = get_the_ID();?>
					<?php if ($i === 3) { ?>
						<div class="col s12 m6 offset-m3 l4 margin-bottom-20">
					<?php } else { ?>
						<div class="col s12 m6 l4 margin-bottom-20">
					<?php } ?>
							<em class="<?php the_title(); ?> icon-superlarge icon-fondo margin-bottom-20 wow pulse"></em>
							<div class="font-semibold wow fadeIn"><?php the_content(); ?></div>
						</div>			
				<?php $i ++; endwhile; wp_reset_postdata();
			endif;  ?>
		</div>
	</div>
</section>
<section id="section-contacto" class="container text-center padding-top-bottom-60">
	<h3 class="margin-bottom-30 max-width-600 margin-auto wow fadeInLeft">Contáctanos</h3>
	<p class="margin-bottom-20 wow fadeIn">Obtén un panel de regalo en la contratación de tu servicio <br>Disfruta de los beneficios de tener energía solar <br>¡Nosotros te ayudamos!</p>
	<div id="form-contacto" class="max-width-500 margin-auto wow fadeIn">
		<?php echo do_shortcode('[contact-form-7 id="7" title="Contacto BH Solar"]'); ?>
	</div>
</section>
<?php get_footer(); ?>