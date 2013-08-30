<div class="students view">
<h2><?php  echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matric Number'); ?></dt>
		<dd>
			<?php echo h($student['Student']['matric_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reg Term'); ?></dt>
		<dd>
			<?php echo h($student['Student']['reg_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reg Session'); ?></dt>
		<dd>
			<?php echo h($student['Student']['reg_session']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arm'); ?></dt>
		<dd>
			<?php echo $this->Html->link($student['Arm']['name'], array('controller' => 'arms', 'action' => 'view', $student['Arm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mid Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['mid_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($student['Student']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($student['Student']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($student['Student']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($student['Student']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($student['Student']['date_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['parent_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report'); ?></dt>
		<dd>
			<?php echo h($student['Student']['report']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), null, __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Arms'), array('controller' => 'arms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arm'), array('controller' => 'arms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Assessments'); ?></h3>
	<?php if (!empty($student['Assessment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Year Id'); ?></th>
		<th><?php echo __('Term'); ?></th>
		<th><?php echo __('Subject Id'); ?></th>
		<th><?php echo __('Ca Score'); ?></th>
		<th><?php echo __('Exam Score'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($student['Assessment'] as $assessment): ?>
		<tr>
			<td><?php echo $assessment['id']; ?></td>
			<td><?php echo $assessment['student_id']; ?></td>
			<td><?php echo $assessment['year_id']; ?></td>
			<td><?php echo $assessment['term']; ?></td>
			<td><?php echo $assessment['subject_id']; ?></td>
			<td><?php echo $assessment['ca_score']; ?></td>
			<td><?php echo $assessment['exam_score']; ?></td>
			<td><?php echo $assessment['comments']; ?></td>
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
