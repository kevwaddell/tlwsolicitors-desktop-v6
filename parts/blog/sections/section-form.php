<?php
$form = get_field('form');	
$section_title = get_field('form_section_title');	
if (empty($section_title)) {
$section_title = $form->title;
}
?>
<div class="rule"></div>
<section id="form-section" class="pg-section with-header with-icon-logo">
	<div class="container">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		
		<?php 
		gravity_form($form->id, false, true, false, '', false);
		gravity_form_enqueue_scripts( $form->id );
		?>
		
	</div>
</section>