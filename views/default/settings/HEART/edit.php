<?php

echo "<div>";
echo "<label>Footer text:</label>";
echo elgg_view('input/longtext', array('name' => 'params[footer_text]', 'value' => elgg_get_plugin_setting('footer_text', 'HEART')));
echo "</div>";