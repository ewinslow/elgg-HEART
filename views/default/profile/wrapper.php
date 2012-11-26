<?php
/**
 * Profile info box
 */

$user = elgg_get_page_owner_entity();
?>
<article class="elgg-image-block elgg-size-large">
	<aside class="elgg-image">
		<?php echo elgg_view_entity_icon($user, 'large'); ?>
		<br/>
		<?php 
			if ($user->donate) {
				echo elgg_view('output/url', array(
					'href' => $user->donate,
					'text' => 'Donate',
					'class' => 'elgg-button elgg-button-large elgg-button-special',
				));
			}
		?>
	</aside>
	<div class="elgg-body">
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
		<div class="pal"></div>
		<?php 
			echo elgg_list_entities(array(
				'type' => 'object',
				'subtypes' => array('album', 'blog'),
				'owner_guid' => $user->guid,
				'full_view' => false,
			));
		?>
	</div>
</article>
