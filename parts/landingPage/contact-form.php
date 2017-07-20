<?php
global $form;	
?>
<div class="rule"></div>
<section id="form-section" class="pg-section">
	<div class="container">
	
	<h2 class="section-header">Make your claim today</h2>
	
	<?php 
		gravity_form($form->id, false, true, true, '', false);
		gravity_form_enqueue_scripts( $form->id );
	?>
	
	</div>
</section>	
