<?php
global $section;
$all_forms_active = get_field('all_forms_active', 'option');
$form_active = $section['form_activated'];	
$form = $section['form'];	
$section_title = $section['section_title'];	
$col_bg = $section['section_bg_col_active'];
$enquiry_type = $post->post_title;

if ($post->post_parent != 0) {
$enquiry_type = get_the_title($post->post_parent);	
} 

if (empty($section_title)) {
$section_title = $form->title;
}
?>
<?php if ($form_active && $all_forms_active) { ?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
<a name="request-a-callback" id="request-a-callback"></a>	
	<div class="container">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		
		<?php gravity_form($form->id, false, true, false, array('enquiry-type' => $enquiry_type), false); ?>
		
	</div>

</section>
<?php } ?>