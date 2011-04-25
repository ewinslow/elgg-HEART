<?php
/**
 * HEART default project view.
 *
 * @package Elgg
 * @subpackage Core
 */

$icon = elgg_view_entity_icon($vars['entity'], 'large');

$title = elgg_view('output/text', array('value' => $vars['entity']->name));
$blurb = elgg_view('output/text', array('value' => $vars['entity']->briefdescription));

$body =<<<BODY
<h1>$title</h1>
<p>$blurb</p>
BODY;

echo elgg_view_image_block($icon, $body);
