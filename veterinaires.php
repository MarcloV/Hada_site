<!doctype html>

<html>


	<?php
	session_start();
	?>

<?php include "header.php"?>



<body>
	
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbPBx7xiArxx5WcDlJdK4StAK8SsuESSI&libraries=places"></script>
	<script type="text/javascript">
		var myLocation, map, interest, distance;
		var markers = [];
		window.onload = function() {
			drawMap();

		}

		function drawMap() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(onSuccess, onError, {
					maximumAge: 2 * 60 * 1000,
					timeout: 5 * 60 * 1000,
					enableHighAccuracy: true
				});
			} else {
				alert("Your navigator doesnt support geolocation");
			}
		}

		function onSuccess(position) {
			var lat = position.coords.latitude;
			var long = position.coords.longitude;
			myLocation = new google.maps.LatLng(lat, long);
			var mapOptions = {
				center: myLocation,
				zoom: 12,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById('mapArea'), mapOptions);
			findPlaces();

		}

		function onError(error) {
			switch (error.code) {
				case PERMISSION_DENIED:
					alert("Permission denied");
					break;
				case PERMISSION_UNVAILABLE:
					alert("Permission denied");
					break;
				case TIMEOUT:
					alert("Permission denied");
					break;
				default:
					alert("N/A");
					break;
			}
		}

		function findPlaces() {
			var request = {
				location: myLocation,
				radius: '1500',
				type: 'veterinary_care'
			}
			var services = new google.maps.places.PlacesService(map);
			services.nearbySearch(request, createMarkers);
		}

		function createMarkers(response, status) {
			var latlngbounds = new google.maps.LatLngBounds();
			if (status === google.maps.places.PlacesServiceStatus.OK) {
				clearMarkers();
				for (var i = 0; i < response.length; i++) {
					drawMarker(response[i]);
					latlngbounds.extend(response[i].geometry.location);
				}
				map.fitBounds(latlngbounds);
			} else if (status === google.maps.places.PlacesServiceStatus.ZERO_RESULTS) {
				alert("Aucun élément ne correspond à votre recherche");
			} else {
				alert("Il y a eu une erreur. Veuillez réessayer !");
			}
		}

		function drawMarker(obj) {
			var marker = new google.maps.Marker({
				map: map,
				position: obj.geometry.location
			});
			markers.push(marker);
			var infowindow = new google.maps.InfoWindow({
				content: '<strong>' + obj.name + '</strong><br/><br/>Rating: ' + obj.rating + '<br/>Adress: ' + obj.vicinity
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, this);
			});
		}

		function clearMarkers() {
			if (markers) {
				for (i in markers) {
					markers[i].setMap(null);

				}
			}
			markers = [];
		}

	</script>

	<?php include "nav.php"?>

	<div class="row">
		<div class="col s12">
			<div class="card card-blue">
				<div class="row">
					<div class="col s12 m6 offset-m3">
						<h5 class="title-page">Vétérinaires</h5>
					</div>
				</div>
				<div class="row">
		<div id="mapArea" style="width: 100%; height: 80vh; margin-top: 20px"></div>
				</div>
			</div>
		</div>
	</div>



			<script type="text/javascript">
				var elem = document.querySelector('.collapsible.expandable');
				var instance = M.Collapsible.init(elem, {
					accordion: false
				});
				

			</script>

</body>

</html>
