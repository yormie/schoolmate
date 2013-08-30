<div class="assessments index">
	<h2><?php echo __('Assessments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_id'); ?></th>
			<th><?php echo $this->Paginator->sort('year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('term'); ?></th>
			<th><?php echo $this->Paginator->sort('subject_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ca_score'); ?></th>
			<th><?php echo $this->Paginator->sort('exam_score'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($assessments as $assessment): ?>
	<tr>
		<td><?php echo h($assessment['Assessment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assessment['Student']['id'], array('controller' => 'students', 'action' => 'view', $assessment['Student']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assessment['Year']['name'], array('controller' => 'years', 'action' => 'view', $assessment['Year']['id'])); ?>
		</td>
		<td><?php echo h($assessment['Assessment']['term']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assessment['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $assessment['Subject']['id'])); ?>
		</td>
		<td><?php echo h($assessment['Assessment']['ca_score']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['exam_score']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['status']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($assessment['Assessment']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $assessment['Assessment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assessment['Assessment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assessment['Assessment']['id']), null, __('Are you sure you want to delete # %s?', $assessment['Assessment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Assessment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
