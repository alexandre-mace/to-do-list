$(function () {
	$('#sortable').sortable({
		start: function (event, ui) {
			var start_pos = ui.item.index();
			ui.item.data('start_pos', start_pos);
		},
		update: function (event, ui) {
			var movement = ui.position.top - ui.originalPosition.top > 0 ? "down" : "up";
			let index = ui.item.data('index');
			let url = ui.item.data('url');
			var end_pos = ui.item.index();
			var start_pos = ui.item.data('start_pos');
			// alert(start_pos);  Position avant
			// alert(end_pos); Position actuelle

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