<?php

$plugin_root = dirname(__DIR__);

// Initializes $CONFIG;
require_once "$plugin_root/Elgg/engine/settings.example.php";

// Bare minimum of engine needed to run tests
require_once "$plugin_root/Elgg/engine/lib/elgglib.php";

// Register auto-load classes for 1.9
include_once "$plugin_root/Elgg/engine/lib/autoloader.php";

elgg_register_classes("$plugin_root/classes");
