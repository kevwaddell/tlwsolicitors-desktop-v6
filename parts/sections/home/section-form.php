<?php
$hp_form_active = get_field('hp_form_active', 'option');
$all_forms_active = get_field('all_forms_active', 'option');
?>
<?php if ($hp_form_active && $all_forms_active) {

$form = get_field('hp_form', 'option');	
?>
<section id="hp-form" class="pg-section">
	<div class="container">
		<?php gravity_form($form->id, false, true, false, '', false); ?>
	</div>
</section>
<?php get_template_part( 'parts/global/color', 'strip' ); ?>
<?php } ?>