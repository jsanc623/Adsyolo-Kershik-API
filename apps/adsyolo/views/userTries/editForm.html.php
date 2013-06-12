<?php 
Layout::extend('layouts/userTries');
if(isset($userTries->id)) {
	$title = 'Edit UserTries #' . $userTries->id;
} else {
	$title = 'Create New UserTries';
}
$title = $title;
?>

<?php Part::draw('userTries/form', $_form, $title) ?>

<?php echo Html::anchor(Url::action('UserTriesController::index'), 'UserTries List') ?>