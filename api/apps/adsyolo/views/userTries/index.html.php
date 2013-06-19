<?php 
Layout::extend('layouts/userTries');
$title = 'Index';
?>

<h3><?php echo Html::anchor(Url::action('UserTriesController::newForm'), 'Create New UserTries') ?></h3>

<?php if(isset($flash)): ?>
	<div class="error">
	<?php echo $flash; ?>
	</div>
<?php endif; ?>

<?php foreach($userTriesSet as $userTries): ?>
	<?php Part::draw('userTries/details', $userTries) ?>
	<hr />
<?php endforeach; ?>