<?php get_header(); 
	/* Banner Home */
	$banner_args = array(
		'post_type' 		=> 'banner-home',
		'posts_per_page' 	=> 1,
        'orderby' 			=> 'rand'
	);
	$banner_query = new WP_Query( $banner_args );
	if ( $banner_query->have_posts() ) : 
		$i = 1;
		while ( $banner_query->have_posts() ) : $banner_query->the_post(); 
			$custom_fields  = get_post_custom();
    		$post_id        = get_the_ID();
    		$enlace      	= get_post_meta( $post_id, 'banner_enlace', true );
    		$enlaceText     = get_post_meta( $post_id, 'banner_enlaceText', true ); ?>

		<section id="initial-banner" class="bg-image" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)">
			<img src="<?php echo THEMEPATH; ?>images/identidad/logo.png">
			<?php the_content(); ?>
			<?php if ($enlace != '' && $enlaceText != ''): ?>
				<a href="<?php echo $enlace; ?>" class="btn btn-icon"><?php $enlaceText ?><em class="icon-"></em></a>
			<?php endif ?>
		</section>

	<?php $i ++; endwhile; wp_reset_postdata();
	endif; ?>
	
<?php get_footer(); ?>