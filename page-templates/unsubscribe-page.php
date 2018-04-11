<?php 
/*
Template Name: Newsletter unsubscribe template
*/
?>

<?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">
		
	<!-- BANNER SECTION -->
	<?php if ( has_post_thumbnail() ) { 	?>
	<?php get_template_part( 'parts/banners/banner', 'img' ); ?>		
	<?php } ?>				
		
	<!-- MAIN TEXT SECTION -->
	<article <?php post_class("content-section"); ?>>
		
		<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
		
		<div class="container">
			
			<div class="row">

				<div class="col-xs-10">		
					<div class="entry">
					
					<div class="main-txt">
		
						<?php the_content(); ?>
						
						<?php if (isset($_GET['unsubscribed'])) { ?>
							<div class="alert alert-success text-center">
							<h2 class="text-success caps">Contact removal successful!</h2>	
							<p>You have unsubscribed from the TLW Solicitors email marketing list.</p>
							<p><a href="<?php echo get_option('home'); ?>/" class="btn btn-success btn-lg txt-col-wht">Continue&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></p>
							</div>		
						<?php } else { ?>
						<!-- Start of unsubscribe -->
						<script language="javascript">
						<!-- function validate_unsubscribe(frm) { var isError = false; var emailAddress = frm.Email.value; if (emailAddress == '' || emailAddress.indexOf('@') == -1) { alert('Please enter your email address'); isError = true; } return !isError; } //--><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span>
						</script>
							<div class="well well-lg">
							<h2>Please enter your email address</h2>
							<form id="unsubscribe" action="http://dmtrk.net/unsub" method="post" name="unsubscribe">
								<input name="addressbookid" type="hidden" value="0" />
								<!-- UserID - required field, do not remove -->
								<input name="userid" type="hidden" value="88348" />
								<!-- ReturnURL - when the user hits submit, they'll get sent here -->
								<input name="ReturnURL" type="hidden" value="https://www.tlwsolicitors.co.uk/join-our-mailing-list/unsubscribe/?unsubscribed=1" />
								<!-- Email - the user's email address -->
								<div class="form-group">
									<label for="Email">Email:</label>
									<input name="Email"  class="form-control input-lg" type="text" />
								</div>
								<input class="btn btn-primary btn-lg" name="Submit" type="Submit" value="Unsubscribe" />
							</form>
							</div>
						<?php } ?>
		
					</div>
																
				</div>
				</div>
				
				<div class="col-xs-2">
					<?php get_sidebar(); ?>
				</div>	
				
			</div>
									
		</div>
		
	</article>
				
	</main>	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
