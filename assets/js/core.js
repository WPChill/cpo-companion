jQuery( document ).ready( function() {

  jQuery( '.ctsc-map' ).each( function() {
    var data = jQuery( this ).data(), // Get the data from this element
        options = { // Create map options object
          center: { lat: parseFloat(data.lat), lng: parseFloat(data.lng) },
          disableDefaultUI: data.controls || false,
          zoom: data.zoom || 15,
          mapTypeId: 'roadmap'
        };
    var styles = [
      {
        stylers: [ { hue: data.color }, { saturation: -20 } ]
      }, {
        featureType: 'road',
        elementType: 'labels',
        stylers: [ { visibility: 'off' } ]
      } ];

    // Create and display the map
    var map = new google.maps.Map( this, options );
    map.setOptions( { styles: styles } );
  } );

  //FADE IN ELEMENTS WHEN SCROLLING
  ctscWaypointFade();

  //FILL PROGRESS BARS
  ctscWaypointProgress();

  //SKIPPING BUTTONS
  //Adds smooth scrolling to an anchor link with the specified class
  jQuery( '.ctsc-back-top' ).click( function( e ) {
    var targetID = jQuery( this ).attr( 'href' );
    e.preventDefault();
    jQuery( 'html, body' ).animate( {
      scrollTop: jQuery( targetID ).offset().top
    }, 1000 );
  } );
} );

function ctscWaypointFade() {
  if ( jQuery.isFunction( jQuery.fn.waypoint ) ) {
    jQuery( '.ctsc-animation' ).waypoint( function() {
      var areaDelay = 0;
      var element = jQuery( this );
      if ( jQuery( this ).attr( 'data-delay' ) ) {
        areaDelay = jQuery( this ).attr( 'data-delay' );
      }
      setTimeout( function() {
        element.addClass( 'ctsc-animation-active' );
      }, areaDelay );
    }, { offset: '80%' } );
  }
}

function ctscWaypointProgress() {
  if ( jQuery.isFunction( jQuery.fn.waypoint ) ) {
    jQuery( '.ctsc-progress .bar-content' ).waypoint( function() {
      var element = jQuery( this );
      var progressData = element.data();
      element.animate( { width: progressData.value + '%' }, 1500 );
    }, {
      offset: '95%'
    } );
  }
}
