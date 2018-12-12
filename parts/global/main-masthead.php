<?php 
$freephone_num = get_field('freephone_num', 'option');	
$blog_page = get_option('page_for_posts');	
?>
<header class="header" role="banner">
	
		<div class="container">
			
			<div class="row">
			
				<div class="col-xs-4">
					<div class="text-hide logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
				</div>
				
				<div class="col-xs-3">
					<div class="tel-num bold txt-col-red text-center"><span class="caps txt-col-gray font-lite">Freephone: </span> <?php echo $freephone_num; ?></div>
				</div>
				
				<div class="col-xs-5">
					<div class="header-action-btns pull-right">
						<a href="<?php echo get_permalink($blog_page); ?>" id="blog-btn" class="btn btn-default"><span><?php bloginfo('name'); ?> <b><?php echo get_the_title($blog_page); ?></b></span><i class="fa fa-bullhorn fa-lg"></i></a>
						<button id="search-btn" class="btn btn-default"><span class="sr-only">Search</span><i class="fa fa-search fa-lg"></i></button>
						<button id="nav-btn" class="btn btn-default in-active"><span class="sr-only">Menu</span><i class="fa fa-bars fa-lg"></i></button>
					</div>
				</div>
			
			</div>
		
		</div>
			
</header>

<?php get_template_part( 'parts/global/color', 'strip' ); ?>