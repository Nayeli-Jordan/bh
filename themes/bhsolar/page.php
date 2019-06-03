<?php get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
		<section id="page-banner" class="bg-image text-center padding-top-20 padding-bottom-100" style="background-image: url(<?php echo the_post_thumbnail_url("large"); ?>)">
			<div class="container">
				<a href="<?php echo SITEURL; ?>"><img class="responsive-img wow fadeIn" src="<?php echo THEMEPATH; ?>images/identidad/logo.png"></a>	
			</div>
		</section>
		<section class="container padding-top-bottom-50">
			<h2 class="text-center uppercase margin-bottom-20 font-strong wow fadeInLeft"><?php the_title(); ?></h2>
			<div class="wow fadeIn"><?php the_content(); ?></div>
		</section>
	<?php endwhile; endif; 
get_footer(); ?>