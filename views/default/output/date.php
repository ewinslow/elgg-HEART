<?php

if (!is_numeric($vars['value'])) {
	$vars['value'] = strtotime($vars['value']);
}


$datetime = date('c', $vars['value']);
$text = date('M d, Y', $vars['value']);


echo "<time datetime=\"$datetime\">{$text}</time>";