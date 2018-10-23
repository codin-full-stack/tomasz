function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(54.723395, 25.337875),
      zoom:14,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }