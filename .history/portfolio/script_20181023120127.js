// function myMap() {
//   var mapProp= {
//       center:new google.maps.LatLng(54.723395, 25.337875),
//       zoom:14,
//   };
//   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
//   }

  function myMap() {
    var myLatLng = {lat: 54.723395, lng: 25.337875};

    var map = new google.maps.Map(document.getElementById('googleMap'), {
      zoom: 15,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
    });
  }