<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

?>

<?php echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz')); ?>
<div class="clearfloat pbs"></div>
<div class="elgg-grid">
	<div class="elgg-col elgg-col-1of2">
		<div class="fb-like" data-href="<?php echo elgg_get_site_url(); ?>" data-send="false" data-width="450" data-show-faces="false"></div>
		<div class="clearfloat pbs"></div>
		
		<?php
		echo elgg_view('google/plusone', array(
			'href' => elgg_get_site_url(),
			'annotation' => 'inline', 
		));
		?>
	</div>
	<div class="elgg-col elgg-col-last HEART-legal">
		HEART is a Christian faith-based non-profit (501 (c) 3) organization.
		HEART is a registered TRUST in Kenya and has a fully qualified board
		of Kenyan Trustees who work with the American counterpart of HEART a
		501 C-3 organization comprised of health professionals and concerned
		business leaders.
	</div>
</div>
