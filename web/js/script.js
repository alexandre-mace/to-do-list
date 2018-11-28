$(function () {
	// SORT BY POSITION
	$("#sortable").sortable({
		start: function (event, ui) {
			var startPosition = ui.item.index();
			ui.item.data("startPosition", startPosition);
		},
		update: function (event, ui) {
			let movement = ui.position.top - ui.originalPosition.top > 0 ? "down" : "up";
			let url = ui.item.data("url");
			let endPosition = ui.item.index();
			let startPosition = ui.item.data("startPosition");
			$.ajax({
				type: "POST",
				url: url,
				data: {
					endPosition: endPosition,
					startPosition: startPosition,
					movement: movement
				},
				dataType: "json",
				success: function (response) {}
			});
		}
	});
});