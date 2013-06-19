<?php 
Layout::extend('layouts/userTries');
$title = 'Details of UserTries #' . $userTries->id ;
?>

<?php Part::draw('userTries/details', $userTries) ?>

<?php echo Html::anchor(Url::action('UserTriesController::index'), 'Back to list of userTriess') ?>
<hr />