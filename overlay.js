$(document).ready(function() {

	$('#A').each(function() {
		var $link = $(this);
		var $dialog = $('<div></div>')
			.load($link.attr('href'))
			.dialog({
				autoOpen: false,
				title: $link.attr('title'),
				width: 300,
				height: 300,
                stack: false

			});

		$link.click(function() {
			$dialog.dialog('open');

            $('#visitdate').datepicker();

			return false;
		});

	});

});

