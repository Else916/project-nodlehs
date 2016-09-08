<script>
function initMap() {
		var mapLoc = {lat: 24.345459, lng: 54.532};
		var mapDiv = document.getElementById('map_canvas');
		var map = new google.maps.Map(mapDiv, {
				zoom: 17,
				center: mapLoc,
		});
		var marker = new google.maps.Marker({
			position: mapLoc,
			map: map,
			title: 'Al Dhafra Private Schools - Abu Dhabi'
		});
}
</script>
<div class="col-sm-9 col-md-9 prima-Div">
	<h3 class="title"><span>Contact Information</span></h3>
	<p><div id="map_canvas"></div></p>

	<p><b>GPS Coordinates Contact:</b> <i>24°20'43.7</i>" <b>N</b> <i>54°31'54.9</i>" <b>E</b></p>
	<p><b>Address:</b> P.O. Box 25801, ME09 Mohamed Bin Zayed City, Abu Dhabi, UAE</p>

	<ul class="contact-info">
		<li class="fa fa-phone"> Phone: 0097126108400 / 0097126108401</li>
		<li class="fa fa-fax"> Fax: 0097125599883</li>
		<li class="fa fa-envelope"> Email: <?php echo safe_mailto('administration@dhafraschools.com') ?></li>
		<li class="fa fa-globe"> Website: <?php echo anchor('http://auh.dhafraschools.com') ?></li>
	</ul>
	<p style="font-size:18px;"><b><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;&nbsp;For complains email at complaints@dhafraschools.com</b></p>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1l2Yrpf8FqU6GLScXwR4p3jjuLuFua0I&callback=initMap" type="text/javascript"></script>
