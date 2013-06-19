<?php
Part::input($openOffers, 'OpenOffers');
?>
<form method="POST" action="<?php echo Url::action('OpenOffersController::delete', $openOffers->id) ?>">
	<fieldset>
	<h3><?php echo Html::anchor(Url::action('OpenOffersController::details', $openOffers->id), 'OpenOffers #' . $openOffers->id) ?></h3>
	<p>
		<strong>Title</strong>: <?php echo $openOffers->title; ?><br />
		<strong>Company</strong>: <?php echo $openOffers->company; ?><br />
		<strong>Reward</strong>: <?php echo $openOffers->reward; ?><br />
		<strong>Url</strong>: <?php echo $openOffers->url; ?><br />
		<strong>Thumb Url</strong>: <?php echo $openOffers->thumb_url; ?><br />
		<strong>Is App</strong>: <?php echo $openOffers->isApp; ?><br />
		<strong>Is Survey</strong>: <?php echo $openOffers->isSurvey; ?><br />
		<strong>Is Video</strong>: <?php echo $openOffers->isVideo; ?><br />

	</p>
	<?php echo Html::anchor(Url::action('OpenOffersController::editForm', $openOffers->id), 'Edit') ?> - 
	<input type="hidden" name="_METHOD" value="DELETE" />
	<input type="submit" name="delete" value="Delete" />
	</fieldset>
</form>