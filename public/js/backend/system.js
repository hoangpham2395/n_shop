var SystemController = {
	delete: function(e) {
		$('form#del_form').attr('action', $(e).attr('data-route'));
	}
};