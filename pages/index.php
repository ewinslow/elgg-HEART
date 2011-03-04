<?php
/**
 * Elgg custom index page
 * 
 */

elgg_push_context('front');

elgg_push_context('widgets');

$body = elgg_view('pages/index');

echo elgg_view_page('Home', $body);
