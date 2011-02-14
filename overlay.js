$(document).ready(function() {

	$('.popup').each(function() {
		var $link = $(this);
		var $dialog = $('<div></div>')
			.load($link.attr('href'))
			.dialog({
				autoOpen: false,
				title: $link.attr('title'),
				width: 400
				});

		$link.click(function() {
			$dialog.dialog('open');
			return false;

			$('#visitdate').datepicker({
				showButtonPanel: true,
				showOn: "button",
				buttonImage: "images/calendar.gif",
				buttonImageOnly: true
			}
			);
						

		});

	});

	
	$(function() {
		$( "#accordion" ).accordion({
			collapsible: true
		});
	});

	$('#leaderboard tbody tr:even').css('background-color','#d0d0d0');
	$(function() {
		$( "#draggable" ).draggable({
			snap:true,
			snapMode:"inner"

		});
		
		$( ".droppable" ).droppable({
			accept: "#draggable",
			containment: "parent",
			activeClass: "ui-state-hover",
			hoverClass: "ui-state-active",
			drop: function( event, ui ) {
				$( this )
					.addClass( "ui-state-highlight" )
			
			}
		});
	});

});

