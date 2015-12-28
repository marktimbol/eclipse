//app.js
//$b = jQuery.noConflict();

$(document).ready(function() {

	var currentDate = new Date();

	$('.materialboxed').materialbox();

	$('.modal-trigger').leanModal();

    $('.collapsible').collapsible({
    	accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });	
	
	$('.datepicker').pickadate({
		formatSubmit: 'yyyy-mm-dd',
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 3, // Creates a dropdown of 15 years to control year
		min: currentDate,
		// `true` sets it to today. `false` removes any limits.
		max: false
	});

	$('.parallax').parallax();

});