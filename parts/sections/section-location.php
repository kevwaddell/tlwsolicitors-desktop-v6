<?php  
global $section;
$map_active = $section['map_active'];		
?>
<?php if ($map_active) { ?>

<?php
	$location = get_field('global_location', 'options');	
	$address = get_field('global_address', 'options');
	$section_title = $section['section_title'];
	$options = $section['map_section_options'];
	//echo '<pre>';print_r($options);echo '</pre>';
	
	if (empty($section_title)) {
	$section_title = "Location map";
	}
//echo '<pre>';print_r($address);echo '</pre>';
	$map_marker = get_stylesheet_directory_uri()."/_/img/map-marker.png";
?>
<div class="rule"></div>
<section id="wide-map" class="pg-section">
	<a id="find-us" name="find-us"></a>
	
	<div class="container">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		<div class="row">
			<div class="col-xs-3">
				<div class="location-box">
					<?php foreach ($options as $op) { ?>
						<?php if ($op == 'address') { ?>
							<address>
							<span class="company bold caps col-red font-size-25"><?php bloginfo('name'); ?></span><br>
							<?php echo $address; ?>
							</address>	
						<?php } ?>
						<?php if ($op == 'route') { ?>
						<button id="route-finder-btn" class="btn btn-block"><i class="fa fa-car"></i> Route finder</button>			
						<?php } ?>	
					<?php } ?>
				</div>
			</div>
			<div class="col-xs-9">
				<div id="map-canvas"></div>
				<script>
		      function initMap() {
		        var uluru = {lat: <?php echo $location['lat']; ?>, lng: <?php echo $location['lng']; ?>};
		        var map = new google.maps.Map(document.getElementById('map-canvas'), {
		          zoom: 14,
		          center: uluru
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		    </script>
		    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWfwM9bo9zsSfrpXwMZ0bDZbhvgiP1tKo&callback=initMap"></script>
			</div>
		</div>
	</div>

</section>
<?php } ?>