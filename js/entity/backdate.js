elgg.provide('elgg.backdate');

elgg.backdate.init = function() {
	$('.elgg-menu-item-backdate').live('click', function() {
		var guid = /\d+/.exec(this.children[0].hash);
		$form = $('<div></div>');
		$form.dialog({
			title: "Change Date",
			modal: true
		});
		$form.load(elgg.config.wwwroot + 'ajax/view/form/entity/backdate?guid=' + guid);
		$form.submit(function() {
			$form.dialog('destroy');
		});
	});
};

elgg.register_hook_handler('init', 'system', elgg.backdate.init);