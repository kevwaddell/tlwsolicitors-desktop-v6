<?php 
global $form_active;
global $all_forms_active;
?>
<?php if ($form_active && $all_forms_active) { ?>
<div id="video-viewer" class="viewer-closed">
	<button id="close-video"><i class="fa fa-times"></i><span class="sr-only">Close video</span></button>
	<div class="video-viewer-inner"></div>
</div>
<?php } ?>