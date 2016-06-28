var map = L.map('mapp');

// var mapnikTiles = L.tileLayer.provider('OpenStreetMap.Mapnik');
// mapnikTiles.addTo(map);

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
   attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
   maxZoom: 18
}).addTo(map);

map.attributionControl.setPrefix(''); // Don't show the 'Powered by Leaflet' text.
// Set the initial viewport of the map. Here we're centering on Savas' hometown and zooming out a bit.
map.setView([ -4.064483962702459, 39.680116111412644], 19);
function addDataToMap(data, map) {
    var dataLayer = L.geoJson(data);
    dataLayer.addTo(map);
    // Define an array. This could be done in a seperate js file.
    // This tidy formatted section could even be generated by a server-side script
    // or fetched seperately as a jsonp request.
    // var markers = [
    //    [ -4.0630124566992984, 39.68017038423568, "SEACOM Kenya" ],
    //    [ -4.063360267451436, 39.6790271345526, "Mombasa County Council Cell" ],
    //    [ -4.0634405314498645, 39.678131276741624, "Treasury Square<br><a href=\"#'s_Column\">wp</a>" ]
    // ];
    //
    // //Loop through the markers array
    // for (var i=0; i<markers.length; i++) {
    //
    //    var lon = markers[i][0];
    //    var lat = markers[i][1];
    //    var popupText = markers[i][2];
    //
    //     var markerLocation = new L.LatLng(lat, lon);
    //     var marker = new L.Marker(markerLocation);
    //     map.addLayer(marker);
    //     marker.bindPopup(popupText);
    //
    // }
}

//set up a standalone popup (use a popup as a layer)
var popup = L.popup({keepInView:true})
     .setLatLng([-4.0627863, 39.6796483])
     .setContent("Swahilipot Innovation Hub HQ")
     .openOn(map);

$.getJSON("dist/js/mombasaGEOJSON.js", function(data) { addDataToMap(data, map); });
