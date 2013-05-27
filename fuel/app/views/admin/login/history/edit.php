<h2>Editing Login_history</h2>
<br>

<?php echo render('admin/login/history/_form'); ?>
<p>
	<?php echo Html::anchor('admin/login/history/view/'.$login_history->id, 'View'); ?> |
	<?php echo Html::anchor('admin/login/history', 'Back'); ?></p>
