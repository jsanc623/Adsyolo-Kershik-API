<?php
Part::input($userTries, 'UserTries');
?>
<form method="POST" action="<?php echo Url::action('UserTriesController::delete', $userTries->id) ?>">
	<fieldset>
	<h3><?php echo Html::anchor(Url::action('UserTriesController::details', $userTries->id), 'UserTries #' . $userTries->id) ?></h3>
	<p>
		<strong>Userid</strong>: <?php echo $userTries->userid; ?><br />
		<strong>Timestamp</strong>: <?php echo $userTries->timestamp; ?><br />
		<strong>Tries</strong>: <?php echo $userTries->tries; ?><br />

	</p>
	<?php echo Html::anchor(Url::action('UserTriesController::editForm', $userTries->id), 'Edit') ?> - 
	<input type="hidden" name="_METHOD" value="DELETE" />
	<input type="submit" name="delete" value="Delete" />
	</fieldset>
</form>