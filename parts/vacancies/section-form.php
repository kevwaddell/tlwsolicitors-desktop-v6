<?php
global $jobs_pg;
$today = date('Ymd');


if (is_post_type_archive()) {
$form = get_field('form', $jobs_pg->ID);	
$section_title = get_field('form_section_title', $jobs_pg->ID);
} else {
$form = get_field('form');	
$section_title = get_field('form_section_title');
$job_display_to_date = get_field( 'job_display_to_date');	
}
	
if (empty($section_title)) {
$section_title = $form->title;
}	
?>
<?php if (is_post_type_archive() || $job_display_to_date > $today) { ?>
<div class="rule"></div>
<section id="form-section" class="pg-section with-header">
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		
		<?php gravity_form($form->id, false, true, true, null, true); ?>
	</div>
</section>
<?php } ?>