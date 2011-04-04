<?php
/**
 * Elgg custom index layout
 *
 * You can edit the layout of this page with your own layout and style.
 * Whatever you put in this view will appear on the front page of your site.
 *
 */
?>
<div class="HEART-banner">
	<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/graphics/photos/TaitaStudent-banner.JPG"/>
	<div class="HEART-banner-text">
		<p>Empowering the people of<br/>Africa to survive the<br/>HIV/AIDS pandemic.</p>
		<p><?php
			echo elgg_view('output/url', array(
				'href' => '/donate',
				'text' => 'Donate',
				'class' => 'elgg-button elgg-button-special elgg-button-large',
				'title' => 'Click me!',
			));
		?></p>
	</div>
</div>
<h2 class="elgg-heading-main">Knowledge = Power = Survival</h2>
<div class="elgg-grid">
	<div class="elgg-col elgg-col-2of3">
		<?php
			//Through the teaching of volunteer teams, community development and empowerment of local leaders, HEART provides pivotal HIV/AIDS and other opportunistic disease prevention training to Kenya. HEARTS’s efforts are in response to the call of those who lack access to the basic knowledge necessary to survive.
			$intro = '<p class="elgg-output">HEART is dedicated to empowering Kenyans, through education and resources, to create a healthy, disease free life for themselves and their communities. <a href="/about">Read more...</a></p>';

			echo elgg_view('output/longtext', array('value' => $intro));

		?>
		<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/graphics/Heart-Wheel-on-Gold.jpg" />
	</div>
	<div class="elgg-col elgg-col-1of3">
	<?php
		if (elgg_is_active_plugin('thewire')) {
			$body = elgg_list_entities(array(
				'type' => 'object',
				'subtype' => 'thewire',
				'limit' => 8,
				'pagination' => FALSE,
				'view_type_toggle' => FALSE,
				'full_view' => FALSE,
			));

			echo elgg_view_module('info', elgg_echo('thewire'), $body);
		}
	?>
	</div>
</div>
