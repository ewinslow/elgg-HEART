<?php

$blog = $vars['entity'];

echo elgg_view('object/elements/summary', array(
	'entity' => $blog,
	'content' => elgg_view('output/longtext', array('value' => $blog->excerpt)),
));