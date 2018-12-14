
  $( function() {
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
	  heightStyle: "content",
	  collapsible: true,
      icons: icons
    });
    $( "#toggle" ).button().on( "click", function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
  } );
 

// Hotel datepicker
// Start date
$(function() {
	$('#hStartDate').datepicker({
		onSelect: function(dateText) {
			$('#hStartDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#hStartDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});
// End date
$(function() {
	$('#hEndDate').datepicker({
		onSelect: function(dateText) {
			$('#hEndDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#hEndDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});

// Car datepicker
// Start date
$(function() {
	$('#cStartDate').datepicker({
		onSelect: function(dateText) {
			$('#cStartDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#cStartDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});
// End date
$(function() {
	$('#cEndDate').datepicker({
		onSelect: function(dateText) {
			$('#cEndDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#cEndDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});

// Experience datepicker
//Start date
$(function() {
	$('#eStartDate').datepicker({
		onSelect: function(dateText) {
			$('#eStartDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#eStartDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});

// Transport date picker
//Start date
$(function() {
	$('#tStartDate').datepicker({
		onSelect: function(dateText) {
			$('#tStartDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#tStartDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});
// End date
$(function() {
	$('#tEndDate').datepicker({
		onSelect: function(dateText) {
			$('#tEndDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#tEndDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});

// Dining date picker
//Start date
$(function() {
	$('#dStartDate').datepicker({
		onSelect: function(dateText) {
			$('#dStartDateVal').datepicker("setDate", $(this).datepicker("getDate"));
		}
	});
});

		$(function() {
			$('#dStartDateVal').datepicker({
				dateFormat: "yy-mm-dd"
			});
		});


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

var i = 0;
var myImg = document.getElementById("imgcar");
    
	function zoomin(){

       i++;
       myImg.style.transform = "scale(1."+ i +")";
    }
