<?php
/**
 * Elgg header logo
 * The logo to display in elgg-header.
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
?>

<a href="<?php echo elgg_get_site_url(); ?>">
	<img style="margin-bottom: -2px"
	     alt="HEART: Empowering the people of Africa to survive the HIV/AIDS pandemic"
             src="http://africaheart.org/mod/HEART/assets/graphics/HEART-header-banner-2013-01-12.jpg" />
</a>
