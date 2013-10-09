  $(function() {
  	$( "#widgetarea" )
    .sortable({
      	items: "div:not(.not-sortable)"
    });
 	
 	$('.collapsible').on('click', function() {
   		$(this).children("div").slideToggle();
	});


  });