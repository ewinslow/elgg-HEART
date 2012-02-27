<?php 
	$blog = $vars['entity'];
?>
<article>
	<aside class="float mrl mbl">
		<?php echo elgg_view_entity_icon($blog, 'medium', array('override' => true)); ?>
		<div class="elgg-subtext">
			<?php
				echo elgg_view('output/url', array(
					'href' => $blog->getOwnerEntity()->getURL(),
					'text' => $blog->getOwnerEntity()->name,
					'is_trusted' => true,
				));
			?>
		</div>
		<div class="elgg-subtext">
			<?php echo elgg_view('output/date', array('value' => $blog->time_created)); ?>
		</div>
	</aside>
	<div class="elgg-body">
		<?php echo elgg_view('output/longtext', array('value' => $blog->description)); ?>
		<footer>
			<?php 
				echo elgg_view_menu('entity', array(
					'entity' => $vars['entity'],
					'handler' => 'blog',
					'sort_by' => 'priority',
					'class' => 'elgg-menu-hz',
				));
			?>
		</footer>
	</div>
</article>