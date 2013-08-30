<div class="years view">
<h2><?php  echo __('Year'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($year['Year']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($year['Year']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($year['Year']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($year['Year']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Year'), array('action' => 'edit', $year['Year']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Year'), array('action' => 'delete', $year['Year']['id']), null, __('Are you sure you want to delete # %s?', $year['Year']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Assessments'); ?></h3>
	<?php if (!empty($year['Assessment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Year Id'); ?></th>
		<th><?php echo __('Term'); ?></th>
		<th><?php echo __('Subject Id'); ?></th>
		<th><?php echo __('Ca Score'); ?></th>
		<th><?php echo __('Exam Score'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($year['Assessment'] as $assessment): ?>
		<tr>
			<td><?php echo $assessment['id']; ?></td>
			<td><?php echo $assessment['student_id']; ?></td>
			<td><?php echo $assessment['year_id']; ?></td>
			<td><?php echo $assessment['term']; ?></td>
			<td><?php echo $assessment['subject_id']; ?></td>
			<td><?php echo $assessment['ca_score']; ?></td>
			<td><?php echo $assessment['exam_score']; ?></td>
			<td><?php echo $assessment['status']; ?></td>
			<td><?php echo $assessment['date_created']; ?></td>
			<td><?php echo $assessment['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'assessments', 'action' => 'view', $assessment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'assessments', 'action' => 'edit', $assessment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'assessments', 'action' => 'delete', $assessment['id']), null, __('Are you sure you want to delete # %s?', $assessment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
