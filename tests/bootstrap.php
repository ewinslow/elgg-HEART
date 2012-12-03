<?php

$plugin_root = dirname(__DIR__);

require_once "$plugin_root/Elgg/engine/lib/elgglib.php";
require_once "$plugin_root/Elgg/engine/lib/autoloader.php";

elgg_register_classes("$plugin_root/classes");
