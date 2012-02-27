<?php
/**
 * Display an album in a gallery
 *
 * @uses $vars['entity'] TidypicsAlbum
 *
 * @author Cash Costello
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 */

$album = elgg_extract('entity', $vars);

$album_cover = elgg_view_entity_icon($album, 'medium');

$title = elgg_view('output/url', array(
	'text' => $album->getTitle(),
	'href' => $album->getURL(),
	'is_trusted' => true,
));

$container_link = elgg_view('output/url', array(
	'text' => $album->getContainerEntity()->name,
	'href' => $album->getContainerEntity()->getURL(),
	'is_trusted' => true,
));
$footer = elgg_echo('album:num', array($album->getSize()));

echo <<<ALBUM

<div style="width:200px;text-align:center">
	$album_cover
	<h3>$title</h3>
	<div>$container_link</div>
	<div class="elgg-subtext">$footer</div>
</div>

ALBUM;
?>