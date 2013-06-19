<?php 
Layout::extend('layouts/users');
if(isset($users->id)) {
	$title = 'Edit Users #' . $users->id;
} else {
	$title = 'Create New Users';
}
$title = $title;
?>

<?php Part::draw('users/form', $_form, $title) ?>

<?php echo Html::anchor(Url::action('UsersController::index'), 'Users List') ?>