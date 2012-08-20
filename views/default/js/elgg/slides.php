elgg.provide('elgg.slides');

elgg.slides.init = function() {
	$('.elgg-slides').cycle({timeout:10000});
};

elgg.register_hook_handler('init', 'system', elgg.slides.init);
