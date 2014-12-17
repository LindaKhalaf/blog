// when .modal-wide opened, set content-body height based on browser height; 200 is appx height of modal padding, modal title and button bar

// $('#myModal').modal({
//   keyboard: false
// })
// $(".modal-wide").on("show.bs.modal", function() {
//   var height = $(window).height() - 200;
//   $(this).find(".modal-body").css("max-height", height);
// });

// $('article').readmore({
//   speed: 75,
//   maxHeight: 500
// });

$('article').readmore({embedCSS: false});

$('article').readmore({
	beforeToggle: function(trigger, element, expanded) {
		if (expanded) {
		$('html, body').animate( { scrollBottom: element.offset().bottom }, {duration: 100 } );
	}
	}
});

$('article').readmore({
  afterToggle: function(trigger, element, expanded) {
    if(! expanded) { // The "Close" link was clicked
      $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
    }
  }
});
// // Hide the extra content initially, using JS so that if JS is disabled, no problemo.
// $('article:first').readmore('destroy');

// Hide the extra content initially, using JS so that if JS is disabled, no problemo.
// $('.read-more-content').addClass('hide');
// $('.read-more-content').addClass('open');

// // Set up the toggle.
// $('article').click(function() {
//   $(this).toggleClass('hide');
// });

// $('article').click(function(){
//   $(this).toggleClass('open');
// })