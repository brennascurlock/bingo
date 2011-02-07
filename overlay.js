$(document).ready(function() {
var currentId = $(this).attr('id');

	$((currentId).each(function() {
		var $link = $(this);
		var $dialog = $('<div></div>')
			.load($link.attr('href'))
			.dialog({
				autoOpen: false,
				title: $link.attr('title'),
				width: 300,
				height: 400
			});

		$link.click(function() {
			$dialog.dialog('open');

			return false;
		});
		
	});
});
