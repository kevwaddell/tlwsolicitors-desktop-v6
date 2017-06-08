<?php
global $section;  
$faqs_active = $section['faqs_active'];		
?>
<?php if ($faqs_active) { ?>

<?php 
$section_title = $section['section_title'];	
$questions_ID = $section['questions'];
$faq_qestions = get_field( 'faq_qestions', $questions_ID);
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
<a name="faqs" id="faqs" class="section-target"></a>
	<div class="container">
		<h2 class="section-header"><?php echo $section_title; ?></h2>
			
		<div class="faq-items">
		
			<?php foreach ($faq_qestions as $k => $q) { ?>
			<?php if ($k > 0) { ?>
			<div class="rule"></div>			
			<?php } ?>
			<div class="faq-item">
				<div class="question"><?php echo $q['faq_question']; ?></div>
				<div class="answer"><?php echo $q['faq_answer']; ?></div>
			</div>
			<?php } ?>
	
		</div>
	</div>	
</section>
<?php } ?>