<?php
/**
 * View for blog objects
 *
 * @package Blog
 */

$view = $vars['entity']->getType() . "/" . $vars['entity']->getSubtype() . "/" . elgg_get_context();

if (elgg_view_exists($view, false)) {
	echo elgg_view($view, $vars);
	return;
}

$full = elgg_extract('full_view', $vars, FALSE);

if ($full) {
	echo elgg_view('object/blog/full', $vars);
} else {
	echo elgg_view('object/blog/summary', $vars);
}
