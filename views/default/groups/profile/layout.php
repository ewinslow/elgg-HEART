<?php

$group = $vars['entity'];

?>

<div class="HEART-banner HEART-banner-groups">
	<?php echo elgg_view_entity_icon($group, 'master'); ?>
</div>
<h1 class="HEART-heading-motto"><?php echo elgg_view('output/text', array('value' => $group->name)); ?></h1>
<h2 class="elgg-heading-main"><?php echo elgg_view('output/text', array('value' => $group->briefdescription)); ?></h2>
<div class="elgg-grid phl">
	<div class="elgg-col elgg-col-1of2">
		<?php echo elgg_view('output/longtext', array('value' => $group->description)); ?>
		<?php echo elgg_view('output/url', array('text' => 'Donate', 'class' => 'elgg-button elgg-button-special', 'href' => '#')); ?>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<?php echo elgg_view('groups/profile/widgets', $vars); ?>
	</div>
</div>