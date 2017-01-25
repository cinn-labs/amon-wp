(function($) {
  /*
  *  newMap
  *
  *  This function will render a Google Map onto the selected jQuery element
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$el (jQuery element)
  *  @return	n/a
  */

  function newMap( $el ) {
    // var
    var $markers = $el.find('.marker');
    var $circles = $el.find('.circle');

    // vars
    var args = {
      zoom: 16,
      scrollwheel: false,
      center: new google.maps.LatLng(0, 0),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // create map
    var map = new google.maps.Map( $el[0], args);

    // add a markers reference
    map.markers = [];

    // add a circles reference
    map.circles = [];

    // add markers
    $markers.each(function(){
      addMarker( $(this), map );
    });

    // add circles
    $circles.each(function(){
      addCircle( $(this), map );
    });

    // center map
    centerMap( map );

    // return
    return map;
  }

  /*
  *  addMarker
  *
  *  This function will add a marker to the selected Google Map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$marker (jQuery element)
  *  @param	map (Google Map object)
  *  @return	n/a
  */

  function addMarker( $marker, map ) {
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

    // create marker
    var marker = new google.maps.Marker({
      position: latlng,
      map: map
    });

    // add to array
    map.markers.push( marker );

    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() ) {
      // create info window
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });

      // show info window when marker is clicked
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open( map, marker );
      });
    }
  }

  /*
  *  addCircle
  *
  *  This function will add a circle to the selected Google Map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	$circle (jQuery element)
  *  @param	map (Google Map object)
  *  @return	n/a
  */

  function addCircle( $circle, map ) {
    var latlng = new google.maps.LatLng( $circle.attr('data-lat'), $circle.attr('data-lng') );

    // create marker
    var circle = new google.maps.Circle({
      center: latlng,
      map: map,
      radius: 350,
      strokeWeight: 0,
      fillColor: '#E8221B',
      fillOpacity: 0.35,
    });

    // add to array
    map.circles.push( circle );
  }

  /*
  *  centerMap
  *
  *  This function will center the map, showing all markers attached to this map
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	4.3.0
  *
  *  @param	map (Google Map object)
  *  @return	n/a
  */

  function centerMap( map ) {
    // vars
    var bounds = new google.maps.LatLngBounds();

    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ) {
      var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
      bounds.extend( latlng );
    });

    // loop through all circles and create bounds
    $.each( map.circles, function( i, marker ) {
      var latlng = new google.maps.LatLng( marker.center.lat(), marker.center.lng() );
      bounds.extend( latlng );
    });

    // only 1 marker + circles?
    if( (map.markers.length + map.circles.length) == 1 ) {
      // set center of map
      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
    } else {
      // fit to bounds
      map.fitBounds( bounds );
    }

  }

  /*
  *  document ready
  *
  *  This function will render each map when the document is ready (page has loaded)
  *
  *  @type	function
  *  @date	8/11/2013
  *  @since	5.0.0
  *
  *  @param	n/a
  *  @return	n/a
  */
  // global var
  var map = null;

  $(document).ready(function(){
    console.log(0);
    $('.amonMap').each(function(){
      console.log(1);
      // create map
      map = newMap( $(this) );
    });
  });

})(jQuery);
