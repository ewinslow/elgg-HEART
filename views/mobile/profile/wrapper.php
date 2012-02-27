<?php
/**
 * Profile info box
 */

$user = elgg_get_page_owner_entity();
?>
<article>
	<aside class="float mrm mbm">
		<?php echo elgg_view_entity_icon($user, 'medium'); ?>
	</aside>
	<?php echo elgg_view_title(elgg_view('output/text', array('value' => $user->name)), array('class' => 'man')); ?>
	<div class="elgg-subtext">
		<?php echo elgg_view('output/text', array('value' => $user->briefdescription)); ?>
	</div>
	<div class="elgg-subtext mbm">
	<?php 
		if ($user->contactemail) {
			echo elgg_view('output/email', array('value' => $user->contactemail));
		}
	?>
	</div>
	<?php echo elgg_view('output/longtext', array('value' => $user->description)); ?>
	<div class="clearfloat pam"></div>
	<?php 
		echo elgg_view_module('info', 'Activity', elgg_list_entities(array(
			'type' => 'object',
			'subtypes' => array('album', 'blog'),
			'owner_guid' => $user->guid,
			'full_view' => false,
		)));
	?>
</article>