
 var marker;
          function initialize() {
            // Variabel untuk menyimpan informasi (desc)
            var infoWindow = new google.maps.InfoWindow;
            //  Variabel untuk menyimpan peta Roadmap
            var mapOptions = {
              mapTypeId: google.maps.MapTypeId.ROADMAP
            } 
            // Pembuatan petanya
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            // Variabel untuk menyimpan batas kordinat
            var bounds = new google.maps.LatLngBounds();

    // Create the Google Map using out element and options defined above
    function addMarker(lat, lng, info) {
                var lokasi = new google.maps.LatLng(lat, lng);
                bounds.extend(lokasi);
                var marker = new google.maps.Marker({
                    map: map,
                    position: lokasi
                });       
                map.fitBounds(bounds);
                bindInfoWindow(marker, map, infoWindow, info);
             }
            
            // Menampilkan informasi pada masing-masing marker yang diklik
            function bindInfoWindow(marker, map, infoWindow, html) {
              google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
              });
            }
     
            }
          google.maps.event.addDomListener(window, 'load', initialize);