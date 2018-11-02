$(function () {
	$('#sortable').sortable({
		start: function (event, ui) {
			var start_pos = ui.item.index();
			ui.item.data('start_pos', start_pos);
		},
		update: function (event, ui) {
			let movement = ui.position.top - ui.originalPosition.top > 0 ? "down" : "up";
			let url = ui.item.data('url');
			let end_pos = ui.item.index();
			let start_pos = ui.item.data('start_pos');
			$.ajax({
				type: "POST",
				url: url,
				data: {
					end_pos: end_pos,
					start_pos: start_pos,
					movement: movement
				},
				dataType: "json",
				success: function (response) {
					console.log(response);
				}
			});
		}
	});
});