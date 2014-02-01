function initialize() {
  var myLatlng = new google.maps.LatLng(34.177765, -118.784371);
  var mapOptions = {
    zoom: 11,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Oak Park, CA'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);