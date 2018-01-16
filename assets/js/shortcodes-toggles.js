jQuery( document ).ready( function() {

  //Accordions
  if ( jQuery( '.ctsc-accordion' ).length ) {
    jQuery( '.ctsc-accordion' ).each( function() {
      var accordion = jQuery( this );

      accordion.find( '.ctsc-accordion-title' ).on( 'click touchstart', function( e ) {

        //Get accordion group, close all others with the same group
        var accordionGroup = accordion.data( 'group' );
        if ( accordionGroup ) {
          jQuery( '.ctsc-accordion[data-group=' + accordionGroup + ']' ).find( '.ctsc-accordion-content' ).slideUp( 300 );
          jQuery( '.ctsc-accordion[data-group=' + accordionGroup + ']' ).removeClass( 'ctsc-accordion-open' );
        }
        if ( ! accordion.find( '.ctsc-accordion-content' ).is( ':visible' ) ) {
          accordion.find( '.ctsc-accordion-content' ).slideDown( 300 );
          accordion.addClass( 'ctsc-accordion-open' );
        } else {
          accordion.find( '.ctsc-accordion-content' ).slideUp( 300 );
          accordion.removeClass( 'ctsc-accordion-open' );
        }
        e.preventDefault();
      } );
    } );
  }

  //Tabs
  jQuery( '.ctsc-tablist' ).tabs();
} );
