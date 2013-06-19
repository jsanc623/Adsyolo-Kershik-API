<?php 
Layout::extend('layouts/openOffers');
$title = 'Index';
?>

<h3><?php echo Html::anchor(Url::action('OpenOffersController::newForm'), 'Create New OpenOffers') ?></h3>

<?php if(isset($flash)): ?>
	<div class="error">
	<?php echo $flash; ?>
	</div>
<?php endif; ?>

<?php foreach($openOffersSet as $openOffers): ?>
	<?php Part::draw('openOffers/details', $openOffers) ?>
	<hr />
<?php endforeach; ?>