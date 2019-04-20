$(document).ready(function () {
  'use strict';

 

  var marker;

  function initMap() {
    var position = {lat:13.754026, lng:100.521327};
    var map = new google.maps.Map(document.getElementById('loc-mp'), {
      center:position,
      zoom:12,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: [
        {
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#ebe3cd"
            }
          ]
        },
        {
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#523735"
            }
          ]
        },
        {
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#f5f1e6"
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#c9b2a6"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#dcd2be"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#ae9e90"
            }
          ]
        },
        {
          "featureType": "landscape.natural",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#93817c"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#a5b076"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#447530"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#f5f1e6"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#fdfcf8"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#f8c967"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#e9bc62"
            }
          ]
        },
        {
          "featureType": "road.highway.controlled_access",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e98d58"
            }
          ]
        },
        {
          "featureType": "road.highway.controlled_access",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#db8555"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#806b63"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#8f7d77"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#ebe3cd"
            }
          ]
        },
        {
          "featureType": "transit.station",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#b9d3c2"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#92998d"
            }
          ]
        }
      ],
      //center: {lat: 59.325, lng: 18.070}
    });
    
    marker = new google.maps.Marker({
      position: position,
      map: map,
      title:"5555"
      // draggable: true,
      // animation: google.maps.Animation.DROP,
    });
    var info = new google.maps.InfoWindow({
      content : '<p align="center" style="width:200px; font-size:17px; color:#E949A1;"><b>พอใจ ออโต้</b></p>'
    });
    info.open(map,marker);
    
    google.maps.event.addListener(marker,'click',function(){
      info.open(map,marker);
    });

    
  //   var directionsService = new google.maps.DirectionService;
  //   var directionsDisplay = new google.maps.DirectionRenderer;
  //  directionsDisplay.setMap(map);

  //   var onChangeHandler = function(){
  //     calculateAndDisplayRoute(directionsService,directionsDisplay);
  //   }
   
  //    document.getElementById('bb').addEventListener("click",onChangeHandler);



  }//--END initMap--//

  // function calculateAndDisplayRoute(directionsService,directionsDisplay)
  // {
  //   directionsService.route({
  //     origin: กรุงเทพ,
  //     destination: เชียงใหม่,
  //     travelMode: 'DRIVING' 
  //   },function(response,status){
  //     if(status === 'OK'){
  //         directionsDisplay.setDirections(response);
  //     }else{
  //       window.alert('Directions request failed due to' + status);
  //     }
  //   });

  // }

    


   google.maps.event.addDomListener(window, 'load', initMap);



  
  });