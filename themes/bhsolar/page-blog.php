<?php get_header(); ?>
	<section id="page-banner" class="bg-image text-center padding-top-20 padding-bottom-100" style="background-image: url(<?php echo the_post_thumbnail_url("large"); ?>)">
		<div class="container">
			<a href="<?php echo SITEURL; ?>"><img class="responsive-img wow fadeIn" src="<?php echo THEMEPATH; ?>images/identidad/logo.png"></a>	
		</div>
	</section>
	<section id="blog_bhs" class="container padding-top-bottom-50">
		<h2 class="text-center uppercase margin-bottom-20 font-strong wow fadeInLeft"><?php the_title(); ?></h2>
		<div class="row">
			<?php
			$blog_args = array(
				'post_type' 		=> 'post',
				'posts_per_page' 	=> -1,
				'order'				=> 'DESC',
			);
			$blog_query = new WP_Query( $blog_args );
			if ( $blog_query->have_posts() ) : 
				$i = 1;
				while ( $blog_query->have_posts() ) : $blog_query->the_post(); 
					$post_id = get_the_ID();?>
					<div class="col s12 sm6 m4 l3 margin-bottom-20">
						<div class="card-post">
							<a href="<?php echo the_permalink(); ?>"><div class="bg-image padding-bottom-60p margin-bottom-10" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div></a>
							<div class="card-box-content">
								<h3 class="margin-bottom-10 text-center"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="margin-bottom-20"><?php the_excerpt(); ?></div>
								<div class="text-right"><a href="<?php echo the_permalink(); ?>" class="btn inline-block">Ver más <em class="icon-right-open"></em></a></div>
							</div>
						</div>
					</div>					
				<?php $i ++; endwhile; wp_reset_postdata();
			endif;  ?>
		</div>
	</section>
<?php get_footer(); ?>