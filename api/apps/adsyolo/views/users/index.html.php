<?php 
Layout::extend('layouts/users');
$title = 'Index';
?>

<h3><?php echo Html::anchor(Url::action('UsersController::newForm'), 'Create New Users') ?></h3>

<?php if(isset($flash)): ?>
	<div class="error">
	<?php echo $flash; ?>
	</div>
<?php endif; ?>

<?php foreach($usersSet as $users): ?>
	<?php Part::draw('users/details', $users) ?>
	<hr />
<?php endforeach; ?>