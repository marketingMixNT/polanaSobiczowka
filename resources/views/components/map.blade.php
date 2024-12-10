

<div id="map" style="width: 100%; height: 480px;">

</div>

<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyBel5yeh6EpmEI-QaZ53VGxf0x5rR-d-to"></script>

<script type="text/javascript">
    var map;
        var lat=49.289247;
        var lng=19.920882;
        var zoom=14;
	
     
        function initialize() {
            var myOptions = {
                zoom: zoom,
                center: new google.maps.LatLng(lat, lng),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
panControl: true,
 zoomControl: true,
 mapTypeControl: true,
scaleControl: true,
streetViewControl: false,
scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,

            };
            map = new google.maps.Map(document.getElementById('map'), myOptions);
			
			 // stworzenie markera
                var punkt  = new google.maps.LatLng(49.289247,19.920882);
				 backgroundColor: 'none';
                var opcjeMarkera =
                {
                    position: punkt,
                    map: map,
                    title: "Apartamenty Polana Sobiczkowa"
                }
                var marker = new google.maps.Marker(opcjeMarkera);
        }
        window.onload=initialize;
</script>