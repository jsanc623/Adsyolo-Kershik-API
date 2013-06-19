<?php 
Layout::extend('layouts/openOffers');
$title = 'Details of OpenOffers #' . $openOffers->id ;
?>

<?php Part::draw('openOffers/details', $openOffers) ?>

<?php echo Html::anchor(Url::action('OpenOffersController::index'), 'Back to list of openOfferss') ?>
<hr />