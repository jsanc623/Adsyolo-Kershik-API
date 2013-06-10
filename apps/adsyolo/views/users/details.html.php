<?php 
Layout::extend('layouts/users');
$title = 'Details of Users #' . $users->id ;
?>

<?php Part::draw('users/details', $users) ?>

<?php echo Html::anchor(Url::action('UsersController::index'), 'Back to list of userss') ?>
<hr />