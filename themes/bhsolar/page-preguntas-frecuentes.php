<?php get_header(); 
	if (have_posts()) : while (have_posts()) : the_post();?>
		<section id="page-banner" class="bg-image text-center padding-top-20 padding-bottom-100" style="background-image: url(<?php echo the_post_thumbnail_url("large"); ?>)">
			<div class="container">
				<a href="<?php echo SITEURL; ?>"><img class="responsive-img wow fadeIn" src="<?php echo THEMEPATH; ?>images/identidad/logo.png"></a>	
			</div>
		</section>
		<section class="container padding-top-bottom-50">
			<h2 class="text-center uppercase margin-bottom-20 font-strong wow fadeInLeft"><?php the_title(); ?></h2>
			<div class="faqs wow fadeIn">
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
							<h4 class="font-normal"><?php the_title(); ?></h4>
							<div class="content-faq"><?php the_content(); ?></div>
						</div>			
					<?php $i ++; endwhile; wp_reset_postdata();
				endif;  ?>
			</div>
		</section>
	<?php endwhile; endif; 
get_footer(); ?>