<?php

$plugin = $vars['plugin'];

?>
<div class="elgg-module elgg-module-info">
	<div class="elgg-head">
		<h3>Promotional banner:</label>
	</div>
	<div class="elgg-body">
		<label>
		<?php echo elgg_view('input/checkbox', array(
			'name' => 'params[promo_banner_enabled]',
			'value' => 'yes',
			'default' => 'no',
			'checked' => $plugin->promo_banner_enabled === 'yes',
		)); ?>
		Enable banner
		</label>

		<div class="elgg-input-wrapper">
			<label for="HEART-promo-banner-content">Content:</label>
			<?php echo elgg_view('input/longtext', array(
				'name' => 'params[promo_banner_content]',
				'value' => $plugin->promo_banner_content,
				'id' => 'HEART-promo-banner-content',
			)); ?>
		</div>
	</div>
</div>

