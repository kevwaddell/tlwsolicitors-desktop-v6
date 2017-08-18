<?php 
/*
Template Name: Sitemap page
*/
 ?>

<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		 
 <main id="main-content">
 
		<?php if (has_post_thumbnail()) { ?>
			<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
		<?php } ?>		

		<article <?php post_class("content-section"); ?>>
	
			<div class="container">
			
				<div class="entry site-map-entry">
					<div class="main-txt">	
						<?php the_content(); ?>	
					</div>
				</div>
				
				<div class="search-form-wrap text-center">
				<?php get_search_form(); ?>
				</div>
			
			</div>
			
			<div class="rule"></div>
			<section id="site-map-lists">
				<div class="container">
					<h2 class="section-header">Pages</h2>
					<div class="row">
					<!-- Left -->
					<?php get_template_part( 'parts/sitemap/column', 'left-pages' ); ?>
					
					<!-- Right -->
					<?php get_template_part( 'parts/sitemap/column', 'right-pages' ); ?>
					
					</div>
					<div class="rule"></div>
					<h2 class="section-header">Articles</h2>
					<div class="row">
					<!-- Left -->
					<?php get_template_part( 'parts/sitemap/column', 'left-articles' ); ?>
					
					<!-- Right -->
					<?php get_template_part( 'parts/sitemap/column', 'right-articles' ); ?>
					
					</div>
				</div>
			</section>

		</article>


 </main>	
<?php endwhile; ?>
<?php endif; ?>
	
<?php get_footer(); ?>
