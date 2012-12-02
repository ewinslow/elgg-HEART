<?php


$content = elgg_view('HEART/donate/online');

$body = elgg_view_layout('one_column', array(
	'title' => 'Donate Online',
	'content' => $content,
));

echo elgg_view_page("Donate Online", $body);
