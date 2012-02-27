<?php
/**
 * Object summary
 *
 * Sample output
 * <article>
 *   <h3><a href="">Title</a></h3>
 *   <p class="elgg-subtext">Posted 3 hours ago by George</p>
 *   <div class="elgg-content">Excerpt text</div>
 * </article>
 *
 * @uses $vars['entity']    ElggEntity
 * @uses $vars['title']     Title link (optional) false = no title, '' = default
 * @uses $vars['subtitle']  HTML for the subtitle (optional)
 * @uses $vars['content']   HTML for the entity content (optional)
 */

$entity = $vars['entity'];

$title_link = elgg_extract('title', $vars, '');
if ($title_link === '') {
	if (isset($entity->title)) {
		$text = $entity->title;
	} else {
		$text = $entity->name;
	}
	$title_link = elgg_view('output/url', array(
		'text' => $text,
		'href' => $entity->getURL(),
		'is_trusted' => true,
	));
}

$subtitle = elgg_extract('subtitle', $vars, elgg_view('object/elements/strapline', array('entity' => $entity)));
$content = elgg_extract('content', $vars, '');


echo "<article>";

if ($title_link) {
	echo "<h3 class=\"mbn\">$title_link</h3>";
}
echo "<div class=\"elgg-subtext\">$subtitle</div>";

echo elgg_view('object/summary/extend', $vars);

if ($content) {
	echo "<div class=\"elgg-content\">$content</div>";
}

echo "</article>";