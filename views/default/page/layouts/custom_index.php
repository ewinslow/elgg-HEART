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
	<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/photos/TaitaStudent-banner.jpg" height="362" width="100%" />
	<div class="HEART-banner-text">
		<p><?php echo elgg_echo('HEART:vision'); ?></p>
		<?php
			echo elgg_view('output/url', array(
				'href' => 'http://africaheart.com/programsupport.html',
				'text' => elgg_echo('donate'),
				'class' => 'elgg-button elgg-button-special elgg-button-large',
				'title' => 'Click me!',
			));
		?>
	</div>
</div>
<h2 class="HEART-heading-motto"><?php echo elgg_echo('HEART:motto'); ?></h2>
<div class="elgg-grid pal">
	<div class="elgg-col elgg-col-2of3 mrl">
		<?php
			//Through the teaching of volunteer teams, community development and empowerment of local leaders, HEART provides pivotal HIV/AIDS and other opportunistic disease prevention training to Kenya. HEARTS’s efforts are in response to the call of those who lack access to the basic knowledge necessary to survive.
// 			$intro = '<h1>HEART is dedicated to empowering Kenyans, through education and resources, to create a healthy, disease free life for themselves and their communities. <a href="/about">Read more...</a></h1>';

// 			echo elgg_view('output/longtext', array('value' => $intro));

			echo elgg_list_entities(array(
				'type' => 'object',
				'subtypes' => array('blog', 'album'),
				'full_view' => false,
				'list_type' => 'list',
				'limit' => 5,
				'pagination' => false,
			));
		?>
	</div>
	<div class="elgg-col elgg-col-1of3 pll">
		<?php echo elgg_view_module('aside', 'Mission Statement', elgg_echo('HEART:mission'), array('class' => 'mbl')); ?>
		<?php echo elgg_view_module('aside', 'Guiding Scripture', elgg_echo('HEART:scripture')); ?>
		<a href="http://africaheart.com/ourWork.html">
			<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/Heart-Wheel-on-Gold.jpg" />
		</a>
	</div>
</div>
