$( function() {
    $.widget( "ui.timespinner", $.ui.spinner, {
      options: {
        // seconds
        step: 60 * 1000,
        // hours
        page: 60
      },
 
      _parse: function( value ) {
        if ( typeof value === "string" ) {
          // already a timestamp
          if ( Number( value ) == value ) {
            return Number( value );
          }
          return +Globalize.parseDate( value );
        }
        return value;
      },
 
      _format: function( value ) {
        return Globalize.format( new Date(value), "t" );
      }
    });
 
    $( "#spinner1" ).timespinner();
 
    $( "#culture" ).on( "change", function() {
      var current = $( "#spinner1" ).timespinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner1" ).timespinner( "value", current );
    });
  } );

$( function() {
    $.widget( "ui.timespinner", $.ui.spinner, {
      options: {
        // seconds
        step: 60 * 1000,
        // hours
        page: 60
      },
 
      _parse: function( value ) {
        if ( typeof value === "string" ) {
          // already a timestamp
          if ( Number( value ) == value ) {
            return Number( value );
          }
          return +Globalize.parseDate( value );
        }
        return value;
      },
 
      _format: function( value ) {
        return Globalize.format( new Date(value), "t" );
      }
    });
 
    $( "#spinner2" ).timespinner();
 
    $( "#culture" ).on( "change", function() {
      var current = $( "#spinner2" ).timespinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner2" ).timespinner( "value", current );
    });
  } );

$( function() {
    $.widget( "ui.timespinner", $.ui.spinner, {
      options: {
        // seconds
        step: 60 * 1000,
        // hours
        page: 60
      },
 
      _parse: function( value ) {
        if ( typeof value === "string" ) {
          // already a timestamp
          if ( Number( value ) == value ) {
            return Number( value );
          }
          return +Globalize.parseDate( value );
        }
        return value;
      },
 
      _format: function( value ) {
        return Globalize.format( new Date(value), "t" );
      }
    });
 
    $( "#spinner3" ).timespinner();
 
    $( "#culture" ).on( "change", function() {
      var current = $( "#spinner3" ).timespinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner3" ).timespinner( "value", current );
    });
  } );

$( function() {
    $.widget( "ui.timespinner", $.ui.spinner, {
      options: {
        // seconds
        step: 60 * 1000,
        // hours
        page: 60
      },
 
      _parse: function( value ) {
        if ( typeof value === "string" ) {
          // already a timestamp
          if ( Number( value ) == value ) {
            return Number( value );
          }
          return +Globalize.parseDate( value );
        }
        return value;
      },
 
      _format: function( value ) {
        return Globalize.format( new Date(value), "t" );
      }
    });
 
    $( "#spinner4" ).timespinner();
 
    $( "#culture" ).on( "change", function() {
      var current = $( "#spinner4" ).timespinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner4" ).timespinner( "value", current );
    });
  } );

$( function() {
    $.widget( "ui.timespinner", $.ui.spinner, {
      options: {
        // seconds
        step: 60 * 1000,
        // hours
        page: 60
      },
 
      _parse: function( value ) {
        if ( typeof value === "string" ) {
          // already a timestamp
          if ( Number( value ) == value ) {
            return Number( value );
          }
          return +Globalize.parseDate( value );
        }
        return value;
      },
 
      _format: function( value ) {
        return Globalize.format( new Date(value), "t" );
      }
    });
 
    $( "#spinner5" ).timespinner();
 
    $( "#culture" ).on( "change", function() {
      var current = $( "#spinner5" ).timespinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner5" ).timespinner( "value", current );
    });
  } );

$( function() {
    $.widget( "ui.timespinner", $.ui.spinner, {
      options: {
        // seconds
        step: 60 * 1000,
        // hours
        page: 60
      },
 
      _parse: function( value ) {
        if ( typeof value === "string" ) {
          // already a timestamp
          if ( Number( value ) == value ) {
            return Number( value );
          }
          return +Globalize.parseDate( value );
        }
        return value;
      },
 
      _format: function( value ) {
        return Globalize.format( new Date(value), "t" );
      }
    });
 
    $( "#spinner6" ).timespinner();
 
    $( "#culture" ).on( "change", function() {
      var current = $( "#spinner6" ).timespinner( "value" );
      Globalize.culture( $(this).val() );
      $( "#spinner6" ).timespinner( "value", current );
    });
  } );