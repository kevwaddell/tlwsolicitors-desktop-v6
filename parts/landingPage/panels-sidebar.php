<?php
global $form_active;
global $all_forms_active;
$sb_plug_text_active = get_field('sb_plug_text_active');
?>

<aside class="lp-sidebar">
	<div class="container">
		<div class="row">
			<?php if ($sb_plug_text_active) { 
			$sb_plug_txt = get_field('sb_plug_txt');	
			?>
			<div class="col-xs-6">
				<div class="sb-plug sb-panel text-center">
					<i class="panel-icon fa fa-comments"></i>
					<span class="header caps block">Contact us today</span>
					<div class="panel-txt"><?php echo $sb_plug_txt; ?></div>
				</div>
			</div>
			<?php } ?>
			
			<?php if ($form_active && $all_forms_active) { ?>
			<div class="col-xs-6">
				<div class="sb-plug-btn sb-panel text-center">
					<i class="panel-icon fa fa-check"></i>
					<span class="header caps block">Fill in our simple form</span>
					<div class="panel-txt">and one of our experts will contact you.</div>
					<button id="jump-2-form" type="button" class="btn btn-default btn-block btn-lg">Claim Today</button>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</aside>
<div class="rule"></div>
