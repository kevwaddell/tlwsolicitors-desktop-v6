<?php 
global $profiles;
$profiles_total = count($profiles);
//echo '<pre class="debug">';print_r($profiles);echo '</pre>';
?>
<div class="rule"></div>
<section id="our-team-section" class="pg-section">
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>
	
		<div class="our-team-wrapper">
			<?php foreach ($profiles as $post) : ?>
			<?php
			setup_postdata($post);	 
			$position = get_field('position');
			$email = get_field('email');
			$departments = get_field('departments');
			$profile_img = get_field('profile_img'); 
			?>
			<article class="team-profile txt-closed">
				<div class="profile-inner">
					<div class="profile-img" style="background-image: url(<?php echo $profile_img['sizes']['profile-thumb']; ?>);"></div>
					<header class="profile-info">
						<h3><?php the_title(); ?></h3>
						<div class="email"><a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a></div>
					</header>
					<div class="profile-txt txt-hide">
						<div class="position caps font-slab-serif">
							<?php if ($position != "Senior Partner") { ?>
							<span>Department</span>
							<?php } ?>
	
							<?php echo $position; ?>
						</div>
						<?php the_content(); ?>
						<button class="btn profile-info-btn"><span class="sr-only">View bio</span></button>
					</div>
				</div>
			</article>
			<?php endforeach; ?>	
			<?php wp_reset_postdata(); ?>	
		</div>
	</div>
	
</section>