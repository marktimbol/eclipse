//app.js
$b = jQuery.noConflict();

$b(document).ready(function() {

	var currentDate = new Date();

	$b('.materialboxed').materialbox();

	$b('.modal-trigger').leanModal();

    $b('.collapsible').collapsible({
    	accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });	
	
	$b('.datepicker').pickadate({
		formatSubmit: 'yyyy-mm-dd',
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 3, // Creates a dropdown of 15 years to control year
		min: currentDate,
		// `true` sets it to today. `false` removes any limits.
		max: false
	});

	$b('.parallax').parallax();

});