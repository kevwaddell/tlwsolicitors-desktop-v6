<?php 
/*
Template Name: Sitemap page
*/
 ?>

<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>				 
 <main id="main-content">

		<?php if (has_post_thumbnail()) { ?>
			<?php get_template_part( 'parts/banners/banner', 'slim-img' ); ?>			
		<?php } ?>	
		
		<article <?php post_class("content-section"); ?>>
	
			<div class="container">
			
			<div class="entry wide-entry">
				<div class="main-txt">	
					<h1 class="text-center"><?php the_title(); ?></h1>
				
					<?php the_content(); ?>	
				</div>
			</div>
			
			<div class="search-form-wrap text-center">
			<?php get_search_form(); ?>
			</div>
	
			<section id="site-map-lists">
	
				<div class="row">
				<!-- Left -->
				<?php get_template_part( 'parts/sitemap/column', 'left' ); ?>
				
				<!-- Right -->
				<?php get_template_part( 'parts/sitemap/column', 'right' ); ?>
				
				</div>
	
			</section>

			</div>
			</div>
		</article>


 </main>	
<?php endwhile; ?>
<?php endif; ?>
	
<?php get_footer(); ?>
