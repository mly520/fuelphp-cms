<h2>Viewing #<?php echo $login_history->id; ?></h2>

<p>
	<strong>User id:</strong>
	<?php echo $login_history->user_id; ?></p>
<p>
	<strong>Login date:</strong>
	<?php echo $login_history->login_date; ?></p>

<?php echo Html::anchor('admin/login/history/edit/'.$login_history->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/login/history', 'Back'); ?>