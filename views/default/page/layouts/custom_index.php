<?php
/**
 * Elgg custom index layout
 *
 * You can edit the layout of this page with your own layout and style.
 * Whatever you put in this view will appear on the front page of your site.
 *
 */
 


$donateOptions = array(
	'href' => 'http://africaheart.com/programsupport.html',
	'text' => elgg_echo('donate'),
	'class' => 'elgg-button elgg-button-special elgg-button-large',
	'title' => 'Click me!',
);

//TODO(evan): Make these all the same height -- ideally 480px...
$projects = array(
	array(
		'name' => 'WEEP',
		'link' => '/weep',
		'briefdescription' => 'Bringing HIV positive mothers from death to life',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/WEEP-960x480.jpg'),
		'paypalId' => 'DY472GNDSD7AU',
	),
	array(
		'name' => 'Kids for School',
		'link' => '/kfs',
		'briefdescription' => 'One Goat + Uniform = A Child\'s Future',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/KFS-960x480.jpg'),
		'paypalId' => 'GP9ADSADRLMCW',
	),
	array(
		'name' => 'Greenhouses',
		'link' => '/gfc',
		'briefdescription' => 'Providing a community with food security, nutrition, and income',
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
			<a href="<?php echo $project['link']; ?>"><h4><?php echo $project['name']; ?></h4></a>
			<p><?php echo $project['briefdescription']; ?><p>
			<?php
				$donateOptions['href'] = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id={$project['paypalId']}";
				echo elgg_view('output/url', $donateOptions);
			?>
		</div>
		<img src="<?php echo $project['iconUrl']; ?>" alt="" height="480" width="960" />
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
		<?php echo elgg_view_module('aside', 'Mission Statement', elgg_echo('HEART:mission'), array('class' => 'mbl')); ?>
		<?php echo elgg_view_module('aside', 'Guiding Scripture', elgg_echo('HEART:scripture')); ?>
		<a href="http://africaheart.com/ourWork.html">
			<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/HEART-Wheel.jpg" />
		</a>
	</div>
</div>
