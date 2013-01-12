<p>HEART is empowering the people of Africa to survive the HIV/AIDS pandemic through the following projects with the support and continued partnership of people like you.</p>

<p><strong>Thank you for your support!</strong></p>

<p><em>Your information is safe: HEART uses PayPal for secure online transactions. All amounts are in U.S. Dollars.</em></p>

<p>To maximize your donation's effect on the people of Kenya, donate to the General Fund:</p>

<p><a href="https://www.paypal.com/cgi-bin/webscr?hosted_button_id=G49Y74KAAFQN2&cmd=_s-xclick" class="elgg-button elgg-button-special elgg-size-large">Donate to greatest need</a></p>

<p>Finally, you can also donate to a specific project below:</p>
<?php

$donatable_projects = elgg_get_entities_from_metadata(array(
	'type' => 'user',
	'metadata_names' => array('donate'),
));
?>

<ul class="elgg-list elgg-list-entity">
<?php foreach ($donatable_projects as $project) { ?>
	<li class="elgg-item">
		
		<div class="elgg-image-block">
			<div class="elgg-image">
				<img src="<?php echo $project->getIconURL(); ?>" width="100" height="100" />
			</div>
			<div class="elgg-body">
				<h3 class="elgg-text">
				<?php
					echo elgg_view('output/url', array(
						'href' => $project->getURL(),
						'text' => $project->name,
					));
				?>
				</h3>
				<div class="elgg-subtext">
					<?php echo elgg_view('output/text', array('value' => $project->briefdescription)); ?>
				</div>
				<?php 
					echo elgg_view('output/url', array(
						'href' => $project->donate, 
						'text' => 'Donate', 
						'class' => 'elgg-button elgg-button-special'
					)); 
				?>
			</div>
		</div>
	</li>
	<?php } ?>
</ul>

