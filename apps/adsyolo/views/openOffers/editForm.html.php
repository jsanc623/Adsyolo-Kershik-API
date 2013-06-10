<?php 
Layout::extend('layouts/openOffers');
if(isset($openOffers->id)) {
	$title = 'Edit OpenOffers #' . $openOffers->id;
} else {
	$title = 'Create New OpenOffers';
}
$title = $title;
?>

<?php Part::draw('openOffers/form', $_form, $title) ?>

<?php echo Html::anchor(Url::action('OpenOffersController::index'), 'OpenOffers List') ?>