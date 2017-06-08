<noscript>
		
<?php $no_script_notice = get_field('no_script_notice', 'option'); ?>
<style>
body.atfc-desktop-css.loading {
-webkit-filter: blur(0px);
-moz-filter: blur(0px);
-o-filter: blur(0px);
-ms-filter: blur(0px);
filter: blur(0px);	
}	
</style>

	<div class="no-script-wrap">
		<div class="no-script-inner-wrap">
	
			<div class="no-script-inner">
				<?php echo $no_script_notice; ?>
				<a href="<?php echo get_option('home'); ?>" title="refresh" class="btn btn-default btn-lg btn-block">Refresh</a>
			</div>
		
		</div>
	</div>
	
</noscript>
