<?php
Part::input($users, 'Users');
?>
<form method="POST" action="<?php echo Url::action('UsersController::delete', $users->id) ?>">
	<fieldset>
	<h3><?php echo Html::anchor(Url::action('UsersController::details', $users->id), 'Users #' . $users->id) ?></h3>
	<p>
		<strong>Username</strong>: <?php echo $users->username; ?><br />
		<strong>Password</strong>: <?php echo $users->password; ?><br />
		<strong>First Name</strong>: <?php echo $users->first_name; ?><br />
		<strong>Last Name</strong>: <?php echo $users->last_name; ?><br />
		<strong>Date Created</strong>: <?php echo $users->date_created; ?><br />

	</p>
	<?php echo Html::anchor(Url::action('UsersController::editForm', $users->id), 'Edit') ?> - 
	<input type="hidden" name="_METHOD" value="DELETE" />
	<input type="submit" name="delete" value="Delete" />
	</fieldset>
</form>