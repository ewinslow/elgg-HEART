<?php
/**
 * Elgg custom index layout
 *
 * You can edit the layout of this page with your own layout and style.
 * Whatever you put in this view will appear on the front page of your site.
 *
 */
 


$donateOptions = array(
	'text' => elgg_echo('donate'),
	'class' => 'elgg-button elgg-button-special elgg-button-large',
	'title' => 'Click me!',
);

$projects = array(
	array(
		'displayName' => 'HEART Fundraiser Dinner',
		'url' => 'http://africaheart.org/events/heart-on-safari-2013',
		'fullImage' => array(
			'url' => elgg_normalize_url('/mod/HEART/assets/graphics/HEART-on-Safari-2013.jpg'),
		),
		'summary' => 'Join our Safari. Come see what\'s new.',
	),
);

$oldProjects = array(
	array(
		'name' => 'WEEP',
		'link' => elgg_normalize_url('/weep'),
		'briefdescription' => 'Orphan Prevention Program -- Bringing HIV positive mothers from death to life',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/WEEP-960x480.jpg'),
		'paypalId' => 'DY472GNDSD7AU',
	),
	array(
		'name' => 'Kids for School',
		'link' => elgg_normalize_url('/kfs'),
		'briefdescription' => 'One Goat + Uniform = A Child\'s Future -- Education through Empowerment',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/KFS-960x480.jpg'),
		'paypalId' => 'GP9ADSADRLMCW',
	),
	array(
		'name' => 'Greenhouses',
		'link' => elgg_normalize_url('/gfc'),
		'briefdescription' => 'Providing a community with food security, nutrition, and income-generating activity for empowerment',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/Greenhouse-960x480.jpg'),
		'paypalId' => 'YFHMJHMXQ8562',
	),
);

?>

<h3 class="HEART-hidden-accessible">Project banners</h3>
<ul class="elgg-slides HEART-banners">
	<?php foreach ($projects as $project): ?>
	<li>
		<div class="HEART-banners-caption">
			<h4><?php echo $project['displayName']; ?></h4>
			<p><?php echo $project['summary']; ?></p>
			<p>
				<a href="<?php echo $project['url']; ?>"
				   class="elgg-button elgg-button-special elgg-button-large">
					Get tickets
				</a>
			</p>
		</div>
		<a href="<?php echo $project['url']; ?>">
			<img src="<?php echo $project['fullImage']['url']; ?>"
			     alt="<?php echo $project['displayName']; ?>"
                             title="<?php echo $project['displayName']; ?>"
			     width="960" height="480" />
		</a>
	</li>
	<?php endforeach; ?>
</ul>

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
		<?php echo elgg_view_module('aside', 'Vision Statement', elgg_echo('HEART:vision')); ?>
		<a href="http://africaheart.com/ourWork.html">
			<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/HEART-Wheel.jpg" alt="Our Work" class="mbl" />
		</a>
		<?php echo elgg_view_module('aside', 'Mission Statement', elgg_echo('HEART:mission')); ?>
		<?php echo elgg_view_module('aside', 'Guiding Scripture', elgg_echo('HEART:scripture')); ?>
	</div>
</div>
