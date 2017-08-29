<?php 
global $post;	
$contact_pg = get_page_by_title("Contact us");
?>

<?php if ($post->ID === $contact_pg->ID) { ?>

<div id="route-finder-pop-up" class="off">
	<div class="route-finder-pop-up-inner-wrap">
		<div class="route-finder-pop-up-inner">	
			<button type="button" id="close-route-finder" class="btn btn-default pull-right"><i class="fa fa-close"></i></button>
			<div class="pop-up-header">Route Finder</div>  			
			<form action="https://maps.google.com/maps" method="get" target="_blank" class="route-finder">
				<div class="form-group">
					<label for="daddr">Enter Your Post code:</label>
					<input type="hidden" name="daddr" value="NE29 7ST">
					<input type="text" class="form-control input-lg" name="saddr" maxlength="9" id="start">
				</div>
		
				<button class="btn btn-block">Get directions</button>
			</form>
		</div>
	</div>
</div>

<?php } ?>
