~function () {
  var map;

  function init () {
    var center = new google.maps.LatLng(45.504093, -73.576428);
    var options = {
      zoom: 15,
      center: center,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map_canvas'), options);
  }

  google.maps.event.addDomListener(window, 'load', init);  
} ();
