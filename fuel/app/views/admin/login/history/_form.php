<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('User id', 'user_id'); ?>

			<div class="input">
				<?php echo Form::input('user_id', Input::post('user_id', isset($login_history) ? $login_history->user_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Login date', 'login_date'); ?>

			<div class="input">
				<?php echo Form::input('login_date', Input::post('login_date', isset($login_history) ? $login_history->login_date : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>