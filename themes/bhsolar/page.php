<?php get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
		<section id="page-banner" class="bg-image text-center padding-top-20 padding-bottom-100">
			<div class="container">
				<a href="<?php echo SITEURL; ?>"><img class="responsive-img" src="<?php echo THEMEPATH; ?>images/identidad/logo.png"></a>	
			</div>
		</section>
		<section class="container padding-top-bottom-50">
			<h2 class="text-center uppercase margin-bottom-20 font-strong"><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</section>
	<?php endwhile; endif; 
get_footer(); ?>