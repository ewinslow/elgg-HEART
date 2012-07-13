<?php
/**
 * Elgg custom index layout
 *
 * You can edit the layout of this page with your own layout and style.
 * Whatever you put in this view will appear on the front page of your site.
 *
 */
 
$donate = elgg_view('output/url', array(
	'href' => 'http://africaheart.com/programsupport.html',
	'text' => elgg_echo('donate'),
	'class' => 'elgg-button elgg-button-special elgg-button-large',
	'title' => 'Click me!',
));

$projects = array(
	array(
		'name' => 'WEEP',
		'briefdescription' => 'Bringing HIV positive mothers from death to life',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/WEEP.jpg')
	),
	array(
		'name' => 'Kids for School',
		'briefdescription' => 'One Goat + Uniform = A Childs Future',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/KFS.jpg')
	),
	array(
		'name' => 'Greenhouses',
		'briefdescription' => 'Providing a community with food security, nutrition, and income',
		'iconUrl' => elgg_normalize_url('/mod/HEART/assets/graphics/photos/Greenhouse.jpg')
	),
);

?>

<h3 class="HEART-hidden-accessible">Project banners</h3>
<ul class="elgg-slides HEART-banners">
	<?php foreach ($projects as $project): ?>
	<li>
		<div class="HEART-banners-caption">
			<h4><?php echo $project['name']; ?></h4>
			<p><?php echo $project['briefdescription']; ?><p>
			<?php echo $donate; ?>
		</div>
		<img src="<?php echo $project['iconUrl']; ?>" alt="" />
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
			<img src="<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/Heart-Wheel-on-Gold.jpg" />
		</a>
	</div>
</div>
