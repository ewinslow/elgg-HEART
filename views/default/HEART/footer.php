<?php

	$footer = elgg_get_plugin_setting('footer_text', 'HEART');

	echo elgg_view('output/longtext', array('value' => "<small>$footer</small>", 'class' => 'clearfloat mtl'));
