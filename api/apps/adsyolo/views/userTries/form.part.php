<?php
Part::input($form, 'ModelForm');
Part::input($title, 'string');
?>
<?php $form->begin(); ?>
	<fieldset>
		<legend><?php echo $title ?></legend>
		<?php $form->input('id'); ?>		
				<p>
			<label for="<?php echo $form->userid->getName(); ?>">Userid</label><br />
			<?php $form->input('userid'); ?>
		</p>
		<p>
			<label for="<?php echo $form->timestamp->getName(); ?>">Timestamp</label><br />
			<?php $form->input('timestamp'); ?>
		</p>
		<p>
			<label for="<?php echo $form->tries->getName(); ?>">Tries</label><br />
			<?php $form->input('tries'); ?>
		</p>

		<input type="submit" value="Save" />
	</fieldset>
<?php $form->end(); ?>