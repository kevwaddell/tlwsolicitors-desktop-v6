<?php 
$freephone_num = get_field('freephone_num', 'option');	
$blog_page = get_option('page_for_posts');	
$contact_page = get_page_by_title("Contact us");
$about_page = get_page_by_title("About TLW Solicitors");		
//echo '<pre class="debug">';print_r($contact_page);echo '</pre>';
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
						<a href="<?php echo get_permalink($blog_page); ?>" id="blog-btn" class="btn btn-default link-btn"><span>TLW <b><?php echo get_the_title($blog_page); ?></b></span><i class="fa fa-bullhorn"></i></a>
						<a href="<?php echo get_permalink($contact_page); ?>" id="contact-btn" title="<?php echo get_the_title($contact_page); ?>"  class="btn btn-default"><span class="sr-only"><?php echo get_the_title($contact_page); ?></b></span><i class="fa fa-envelope"></i></a>
						<a href="<?php echo get_permalink($about_page); ?>" id="about-btn" title="<?php echo get_the_title($about_page); ?>" class="btn btn-default"><span class="sr-only"><?php echo get_the_title($about_page); ?></b></span><i class="fa fa-info-circle"></i></a>
						<button id="search-btn" class="btn btn-default"><span class="sr-only">Search</span><i class="fa fa-search"></i></button>
						<button id="nav-btn" class="btn btn-default in-active"><span class="sr-only">Menu</span><i class="fa fa-bars"></i></button>
					</div>
				</div>
			
			</div>
		
		</div>
			
</header>

<?php get_template_part( 'parts/global/color', 'strip' ); ?>