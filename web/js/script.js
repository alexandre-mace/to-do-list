$(function () {
	$('#appbundle_task_author').keyup(function (e) {
		var url = $('span').data('url')

		const word = $('#appbundle_task_author').val();
		$.ajax({
			type: "POST",
			url: '/user/test',
			data: {
				word: word
			},
			success: function (response) {
				autocomplete(response)
			}
		});
	});

	$('#sortable').sortable({
		start: function (event, ui) {
			var start_position = ui.item.index();
			ui.item.data('start_position', start_position);
		},
		update: function (event, ui) {
			let movement = ui.position.top - ui.originalPosition.top > 0 ? "down" : "up";
			let url = ui.item.data('url');
			let end_position = ui.item.index();
			let start_position = ui.item.data('start_position');
			$.ajax({
				type: "POST",
				url: url,
				data: {
					end_position: end_position,
					start_position: start_position,
					movement: movement
				},
				dataType: "json",
				success: function (response) {}
			});
		}
	});

	function autocomplete(names) {
        $('#autocomplete').empty()
        names.forEach(function (name) {
            $('#autocomplete').append(`<li id="${name}">${name}</li>`);
		})

    }

    $('#autocomplete').on('click', 'li', function () {
        $('#appbundle_task_author').val($(this).html());
    })
});