<?php
/**
 * Elgg header logo
 * The logo to display in elgg-header.
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
?>

<div class="elgg-grid clearfix">
	<div class="elgg-col elgg-col-1of4 clearfix mrl mbs">
		<a href="<?php echo elgg_get_site_url(); ?>">
			<embed width="218" height="200" src="http://67.199.32.150/images/index%5BBTN%5D.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" />
		</a>
	</div>
	<div class="elgg-col elgg-col-3of4 elgg-col-last clearfix">
		<a href="<?php echo elgg_get_site_url(); ?>">
			<embed width="607" height="200" src="http://67.199.32.150/header[anime].swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash">
		</a>
	</div>
</div>
<hr class="divider" />