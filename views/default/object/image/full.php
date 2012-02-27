<?php
/**
 * Full view of an image
 *
 * @uses $vars['entity'] TidypicsImage
 *
 * @author Cash Costello
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 */


$image = $photo = $vars['entity'];

elgg_register_menu_item('title', array(
	'name' => 'back',
	'text' => '&laquo; Back to Album',
	'href' => $photo->getContainerEntity()->getUrl(),
	'class' => 'elgg-button elgg-button-action',
));

$img = elgg_view_entity_icon($image, 'master', array(
	'href' => $image->getIconURL('master'),
	'img_class' => 'tidypics-photo',
	'link_class' => 'tidypics-lightbox',
));
elgg_load_js('lightbox');
elgg_load_css('lightbox');

$owner_link = elgg_view('output/url', array(
	'href' => $photo->getOwnerEntity()->getUrl(),
	'text' => $photo->getOwnerEntity()->name,
));
$author_text = elgg_echo('byline', array($owner_link));

$owner_icon = elgg_view_entity_icon($photo->getOwnerEntity(), 'tiny');

$metadata = elgg_view_menu('entity', array(
	'entity' => $vars['entity'],
	'handler' => 'photos',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

$subtitle = "$author_text $date $categories $comments_link";

$params = array(
	'entity' => $photo,
	'title' => false,
	'metadata' => $metadata,
	'subtitle' => $subtitle,
	'tags' => $tags,
);
$list_body = elgg_view('object/elements/summary', $params);

$params = array('class' => 'mbl');
$summary = elgg_view_image_block($owner_icon, $list_body, $params);


if ($photo->description) {
	echo elgg_view('output/longtext', array(
		'value' => $photo->description,
		'class' => 'mbl',
	));
}

echo '<div class="tidypics-wrapper-photo">';
echo elgg_view('object/image/navigation', $vars);
//echo elgg_view('tidypics/tagging/help');
//echo elgg_view('tidypics/tagging/select', array('photo' => $photo));
echo $img;
echo '</div>';

echo $summary;