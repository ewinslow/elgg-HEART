<?php

$plugin_root = dirname(__DIR__);

// Initializes $CONFIG;
require_once "$plugin_root/Elgg/engine/settings.example.php";

// Bare minimum of engine needed to run tests
require_once "$plugin_root/Elgg/engine/lib/elgglib.php";

// elgg_normalize_url required for ElggMenuItem
require_once "$plugin_root/Elgg/engine/lib/output.php";


elgg_register_classes("$plugin_root/classes");
