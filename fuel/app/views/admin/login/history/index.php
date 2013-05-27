<h2>Listing Login_histories</h2>
<br>
<?php if ($login_histories): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>Login date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($login_histories as $login_history): ?>		<tr>

			<td><?php echo $login_history->user_id; ?></td>
			<td><?php echo $login_history->login_date; ?></td>
			<td>
				<?php echo Html::anchor('admin/login/history/view/'.$login_history->id, 'View'); ?> |
				<?php echo Html::anchor('admin/login/history/edit/'.$login_history->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/login/history/delete/'.$login_history->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Login_histories.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/login/history/create', 'Add new Login history', array('class' => 'btn btn-success')); ?>

</p>
