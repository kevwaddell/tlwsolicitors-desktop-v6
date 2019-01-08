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
		
			<?php 
			gravity_form($form->id, false, true, true, null, true);
			gravity_form_enqueue_scripts($form->id, true); 
			?>
			
			<script>
			( function( $, window, document, undefined )
				{
					$( 'input[type=file]' ).each( function()
					{
						var $input	 = $( this ),
							$label	 = $input.parents( '.gfield' ).find('label'),
							labelVal = $label.html();
							
							//console.log(labelVal);
				
						$input.on( 'change', function( e ) {
							
							var fileName = '';
				
							if( this.files && this.files.length > 1 ) {
								fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
							} else if( e.target.value ) {
								fileName = e.target.value.split( '\\' ).pop();
							}
							
							console.log(fileName);
							
							if( fileName ) {
							$label.empty().html( fileName );
							} else {
							$label.html( labelVal );
							}
						});
				
						// Firefox bug fix
						$input.on( 'focus', function(){ $label.addClass( 'has-focus' ); }).on( 'blur', function(){ $label.removeClass( 'has-focus' ); });
					});
				})( jQuery, window, document );
			</script>
	</div>
</section>
<?php } ?>