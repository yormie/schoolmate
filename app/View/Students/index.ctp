<div class="students index">
	<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('matric_number'); ?></th>
			<th><?php echo $this->Paginator->sort('reg_term'); ?></th>
			<th><?php echo $this->Paginator->sort('reg_session'); ?></th>
			<th><?php echo $this->Paginator->sort('arm_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mid_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('dob'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_name'); ?></th>
			<th><?php echo $this->Paginator->sort('report'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($students as $student): ?>
	<tr>
		<td><?php echo h($student['Student']['id']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['matric_number']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['reg_term']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['reg_session']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($student['Arm']['name'], array('controller' => 'arms', 'action' => 'view', $student['Arm']['id'])); ?>
		</td>
		<td><?php echo h($student['Student']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['mid_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['sex']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['dob']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['date_modified']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['parent_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['report']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Arms'), array('controller' => 'arms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arm'), array('controller' => 'arms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
