<?php
Part::input($form, 'ModelForm');
Part::input($title, 'string');
?>
<?php $form->begin(); ?>
	<fieldset>
		<legend><?php echo $title ?></legend>
		<?php $form->input('id'); ?>		
				<p>
			<label for="<?php echo $form->username->getName(); ?>">Username</label><br />
			<?php $form->input('username'); ?>
		</p>
		<p>
			<label for="<?php echo $form->password->getName(); ?>">Password</label><br />
			<?php $form->input('password'); ?>
		</p>
		<p>
			<label for="<?php echo $form->first_name->getName(); ?>">First Name</label><br />
			<?php $form->input('first_name'); ?>
		</p>
		<p>
			<label for="<?php echo $form->last_name->getName(); ?>">Last Name</label><br />
			<?php $form->input('last_name'); ?>
		</p>
		<p>
			<label for="<?php echo $form->date_created->getName(); ?>">Date Created</label><br />
			<?php $form->input('date_created'); ?>
		</p>

		<input type="submit" value="Save" />
	</fieldset>
<?php $form->end(); ?>