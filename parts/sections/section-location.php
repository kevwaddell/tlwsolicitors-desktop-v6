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
				<div id="wide-map-canvas"></div>
			</div>
		</div>
	</div>

</section>

<script>
function wide_map_init() {
var TLW_MAP_ID = 'TLW_style';
	
var wide_map;
var TLW_MAPTYPE_ID = 'wide_map';
var myLatLang = new google.maps.LatLng( "<?php echo $location['lat']; ?>", "<?php echo $location['lng']; ?>");
var img_url = "<?php echo $map_marker; ?>";
var marker;

 var image = {
	 url: img_url,
	 // This marker is 20 pixels wide by 32 pixels tall.
	 size: new google.maps.Size(60, 70),
	 // The origin for this image is 0,0.
	 origin: new google.maps.Point(0,0),
	 // The anchor for this image is the base of the flagpole at 0,32.
	 anchor: new google.maps.Point(30, 60)
	 };
	 
var mapOptions = {
	zoom: 12, 
	center: myLatLang, 
	mapTypeControlOptions: {
		 mapTypeIds: [google.maps.MapTypeId.ROADMAP, TLW_MAPTYPE_ID]
	}
	};
	
wide_map = new google.maps.Map(document.getElementById('wide-map-canvas'), mapOptions);
	
marker = new google.maps.Marker({position: myLatLang,map: wide_map,icon: image,title: "TLW Solicitors"});
};
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWfwM9bo9zsSfrpXwMZ0bDZbhvgiP1tKo&callback=wide_map_init" async defer></script>

<?php } ?>