<?php
/**
 * Elgg header logo
 * The logo to display in elgg-header.
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
?>

<a href="<?php echo elgg_get_site_url(); ?>">
	<hgroup>
		<h1 class="elgg-heading-site">
			<?php echo $site->name; ?>
		</h1>
		<h2 class="elgg-heading-site">
			<?php echo $site->description; ?>
		</h2>
	</hgroup>
</a>