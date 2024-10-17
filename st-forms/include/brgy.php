
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3"></script>

<div id="map_div" style="height: 680px;"></div>



 <?php
include '../forms/php/app.php';
?>
 

<script>
var map;
var places =
[["Brgy 165","<h3> <?php $br =  GetBrgyByBrgy("Barangay 165"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?> </h3>",14.7099, 121.0046, '<?= $color ?>'],


["Brgy 166","<h3>  <?php $br =  GetBrgyByBrgy("Barangay 166"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.71949, 121.01282, '<?= $color ?>'],

["Brgy 167","<h3> <?php $br =  GetBrgyByBrgy("Barangay 167"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.7294, 121.0113, '<?= $color ?>'],

["Brgy 168","<h3> <?php $br =  GetBrgyByBrgy("Barangay 168"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.7392, 121.0199, '<?= $color ?>'],



["Brgy 169","<h3> <?php $br =  GetBrgyByBrgy("Barangay 169"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?> </h3>",14.73257, 121.02348, '<?= $color ?>'],


["Brgy 170","<h3> <?php $br =  GetBrgyByBrgy("Barangay 170"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.73940, 121.03423, '<?= $color ?>'],



["Brgy 171","<h3> <?php $br =  GetBrgyByBrgy("Barangay 171"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.75209, 121.01793, '<?= $color ?>'],


["Brgy 172","<h3> <?php $br =  GetBrgyByBrgy("Barangay 172"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.74598, 121.04012, '<?= $color ?>'],


["Brgy 173","<h3> <?php $br =  GetBrgyByBrgy("Barangay 173"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.75418, 121.03494, '<?= $color ?>'],


["Brgy 174","<h3> <?php $br =  GetBrgyByBrgy("Barangay 174"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.75940, 121.05214, '<?= $color ?>'],


["Brgy 175","<h3> <?php $br =  GetBrgyByBrgy("Barangay 175"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.76562, 121.03638, '<?= $color ?>'],


["Brgy 176","<h3> <?php $br =  GetBrgyByBrgy("Barangay 176"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.77513, 121.04211, '<?= $color ?>'],


["Brgy 177","<h3> <?php $br =  GetBrgyByBrgy("Barangay 177"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.74961, 121.04967, '<?= $color ?>'],


["Brgy 178","<h3> <?php $br =  GetBrgyByBrgy("Barangay 178"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.74993, 121.06361, '<?= $color ?>'],


["Brgy 179","<h3> <?php $br =  GetBrgyByBrgy("Barangay 179"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.75449, 121.07650, '<?= $color ?>'],


["Brgy 180","<h3> <?php $br =  GetBrgyByBrgy("Barangay 180"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.76259, 121.07865, '<?= $color ?>'],




["Brgy 181","<h3> <?php $br =  GetBrgyByBrgy("Barangay 181"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.76821, 121.08439, '<?= $color ?>'],


["Brgy 183","<h3> <?php $br =  GetBrgyByBrgy("Barangay 183"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.75990, 121.08367, '<?= $color ?>'],


["Brgy 184","<h3> <?php $br =  GetBrgyByBrgy("Barangay 184"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.7195, 121.0128, '<?= $color ?>'],


["Brgy 185","<h3> <?php $br =  GetBrgyByBrgy("Barangay 185"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.76948, 121.07579, '<?= $color ?>'],


["Brgy 186","<h3> <?php $br =  GetBrgyByBrgy("Barangay 186"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.76721, 121.06934, '<?= $color ?>'],


["Brgy 187","<h3> <?php $br =  GetBrgyByBrgy("Barangay 187"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.76589, 121.06074, '<?= $color ?>'],

["Brgy 188","<h3> <?php $br =  GetBrgyByBrgy("Barangay 188"); foreach ($br as $brs){ $name = $brs['Brgy']; $stat = $brs['Status'];
if($stat == "Moderate"){$color = "Blue";}elseif($stat == "Clean"){$color = "Green";}else{$color =  "Red";}
 echo $name.'</br> STATUS: '.$stat;  } ?>  </h3>",14.77324, 121.06361, '<?= $color ?>']
];
</script>

<script type="text/javascript">
/*
 * use google maps api built-in mechanism to attach dom events
 */
google.maps.event.addDomListener(window, "load", function () {

    /*
     * create map
     */
    var map = new google.maps.Map(document.getElementById("map_div"), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
         styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]

    });

    /*
     * create infowindow (which will be used by markers)
     */
    var infoWindow = new google.maps.InfoWindow();
    /*
     * create bounds (which will be used auto zoom map)
     */
    var bounds = new google.maps.LatLngBounds();

    /*
     * marker creater function (acts as a closure for html parameter)
     */
    function createMarker(options, html) {
        var marker = new google.maps.Marker(options);
        bounds.extend(options.position);
        if (html) {
            google.maps.event.addListener(marker, "click", function () {
                infoWindow.setContent(html);
                infoWindow.open(options.map, this);
                map.setZoom(map.getZoom() + 1)
                map.setCenter(marker.getPosition());
            });
        }
        return marker;
    }

    /*
     * add markers to map
     */
    for (var i = 0; i < places.length; i++) {
        var point = places[i];
        createMarker({
            position: new google.maps.LatLng(point[2], point[3]),
            map: map,
            icon: {
                path: "M27.648 -41.399q0 -3.816 -2.7 -6.516t-6.516 -2.7 -6.516 2.7 -2.7 6.516 2.7 6.516 6.516 2.7 6.516 -2.7 2.7 -6.516zm9.216 0q0 3.924 -1.188 6.444l-13.104 27.864q-0.576 1.188 -1.71 1.872t-2.43 0.684 -2.43 -0.684 -1.674 -1.872l-13.14 -27.864q-1.188 -2.52 -1.188 -6.444 0 -7.632 5.4 -13.032t13.032 -5.4 13.032 5.4 5.4 13.032z",
                scale: 0.6,
                strokeWeight: 0.2,
                strokeColor: 'green',
                strokeOpacity: 1,
                fillColor: point[4],
                fillOpacity: 0.85,
            },
        }, point[1]);
    };
    map.fitBounds(bounds);
});

</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTC8h1SaprocJsR01DYcRoRWa1bVwLEuY&callback=initMap"
    async defer></script>