<?php

$entity = $vars['entity'];

?>

<div class="elgg-input-wrapper">
	<label>New published time:</label><br/>
	<input type="date" name="published" value="<?php echo date('Y-m-d', $entity->time_created); ?>" />
</div>

<div class="elgg-foot">
	<input type="hidden" name="guid" value="<?php echo $entity->guid; ?>" />
	<button type="submit">Submit</button>
</div>
