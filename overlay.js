$(document).ready(function() {

	$('.popup').each(function() {
		var $link = $(this);
		var $dialog = $('<div></div>')
			.load($link.attr('href'))
			.dialog({
				autoOpen: false,
				title: $link.attr('title'),
				width: 400,
				
				//stack: false

			});

		$link.click(function() {
			$dialog.dialog('open');
			return false;
			
            $('#visitdate').datepicker();

			//return false;
		});

	});

	$(function() {
		$( "#accordion" ).accordion({
			collapsible: true
		});
	});

	$('#leaderboard tbody tr:even').css('background-color','#d0d0d0');

	/* $('form.login a').each(function() {
	var $link = $(this);
	var $dialog = $('<div></div>')
		.load($link.attr('href'))
		.dialog({
			autoOpen: false,
			title: "Enter your information.",
			width:400,
			height:200
		});
	
	$link.click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
		return false;
		});
	});
	*/

});

