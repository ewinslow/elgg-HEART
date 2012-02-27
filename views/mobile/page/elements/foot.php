<?php

echo elgg_view('footer/analytics');

foreach (elgg_get_loaded_js('head') as $script) {
	echo "<script src=\"$script\"></script>";
}

foreach (elgg_get_loaded_js('footer') as $script) {
	echo "<script src=\"$script\"></script>";
}