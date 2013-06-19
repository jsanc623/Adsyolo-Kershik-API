<?php
Part::input($form, 'ModelForm');
Part::input($title, 'string');
?>
<?php $form->begin(); ?>
	<fieldset>
		<legend><?php echo $title ?></legend>
		<?php $form->input('id'); ?>		
				<p>
			<label for="<?php echo $form->title->getName(); ?>">Title</label><br />
			<?php $form->input('title'); ?>
		</p>
		<p>
			<label for="<?php echo $form->company->getName(); ?>">Company</label><br />
			<?php $form->input('company'); ?>
		</p>
		<p>
			<label for="<?php echo $form->reward->getName(); ?>">Reward</label><br />
			<?php $form->input('reward'); ?>
		</p>
		<p>
			<label for="<?php echo $form->url->getName(); ?>">Url</label><br />
			<?php $form->input('url'); ?>
		</p>
		<p>
			<label for="<?php echo $form->thumb_url->getName(); ?>">Thumb Url</label><br />
			<?php $form->input('thumb_url'); ?>
		</p>
		<p>
			<label for="<?php echo $form->isApp->getName(); ?>">Is App</label><br />
			<?php $form->input('isApp'); ?>
		</p>
		<p>
			<label for="<?php echo $form->isSurvey->getName(); ?>">Is Survey</label><br />
			<?php $form->input('isSurvey'); ?>
		</p>
		<p>
			<label for="<?php echo $form->isVideo->getName(); ?>">Is Video</label><br />
			<?php $form->input('isVideo'); ?>
		</p>

		<input type="submit" value="Save" />
	</fieldset>
<?php $form->end(); ?>