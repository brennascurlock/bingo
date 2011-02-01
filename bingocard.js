$(document).ready(function() {
	var $dialog = $('<div></div>')
		.html('<label for="restaurant">Restaurant</label><input type="text" name="restaurant" />')
		.dialog({
			autoOpen: false,
			title: 'Add Visit Info'
		});

	$('ul.abc li a').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
		return false;
	});
});