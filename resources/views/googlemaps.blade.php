
    <style>
        #map {
            height: {{ $maps[0]->height }}px;
            z-index: 99;
        }
    </style>


    <script>
        jQuery(function($)
        {
            $('body').find('#{{ $maps[0]->content_id }} .sectionElement').append('<div id="map"></div>');
        })
    </script>
<script>

    function initMap() {

        var center = {lat: {{ $maps[0]->lat }}, lng: {{ $maps[0]->lng }} };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: {{ $maps[0]->zoom }},
            center: center
        });


        var infowindow = new google.maps.InfoWindow({
            content: '{!! $maps[0]->marker !!}'
        });

        var marker = new google.maps.Marker({
            position: center,
            map: map
        });

        infowindow.open(map, marker);

    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJWfdYEGg_NBcr2sFS5sBbewQgFtNWg9U&signed_in=true&callback=initMap"></script>
