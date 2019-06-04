<?php 
	get_header();
	global $post;
	
	while ( have_posts() ) : the_post(); 
?>
	<section id="page-banner" class="bg-image text-center padding-top-20 padding-bottom-100 relative" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
		<div class="bg-absolute bg-opacity-xlight"></div>
		<div class="container relative">
			<a href="<?php echo SITEURL; ?>"><img class="responsive-img wow fadeIn" src="<?php echo THEMEPATH; ?>images/identidad/logo.png"></a>	
		</div>
	</section>
	<section id="single_bhs" class="container padding-top-bottom-50">
		<div class="max-width-800 margin-auto">
			<h2 class="text-center uppercase margin-bottom-20 font-strong wow fadeInLeft"><?php the_title(); ?></h2>
			<div class="wow fadeIn"><?php the_content(); ?></div>
			<div class="text-right margin-top-30 wow fadeInRight"><a href="<?php echo SITEURL; ?>blog" class="btn inline-block">Volver al blog</a></div>
		</div>
	</section>
<?php 
	endwhile; // end of the loop.
	get_footer(); 
?>
