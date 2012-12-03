<?php

$plugin_root = dirname(__DIR__);

require_once "$plugin_root/Elgg/engine/start.php";

elgg_register_classes("$plugin_root/classes");
