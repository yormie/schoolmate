<div class="arms view">
<h2><?php  echo __('Arm'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($arm['Arm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($arm['Arm']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($arm['Arm']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($arm['Arm']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Arm'), array('action' => 'edit', $arm['Arm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Arm'), array('action' => 'delete', $arm['Arm']['id']), null, __('Are you sure you want to delete # %s?', $arm['Arm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Arms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arm'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($arm['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Matric Number'); ?></th>
		<th><?php echo __('Reg Term'); ?></th>
		<th><?php echo __('Reg Session'); ?></th>
		<th><?php echo __('Arm Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Mid Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th><?php echo __('Parent Name'); ?></th>
		<th><?php echo __('Report'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($arm['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['matric_number']; ?></td>
			<td><?php echo $student['reg_term']; ?></td>
			<td><?php echo $student['reg_session']; ?></td>
			<td><?php echo $student['arm_id']; ?></td>
			<td><?php echo $student['first_name']; ?></td>
			<td><?php echo $student['mid_name']; ?></td>
			<td><?php echo $student['last_name']; ?></td>
			<td><?php echo $student['sex']; ?></td>
			<td><?php echo $student['address']; ?></td>
			<td><?php echo $student['dob']; ?></td>
			<td><?php echo $student['date_created']; ?></td>
			<td><?php echo $student['date_modified']; ?></td>
			<td><?php echo $student['parent_name']; ?></td>
			<td><?php echo $student['report']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subjects'); ?></h3>
	<?php if (!empty($arm['Subject'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Max Ca'); ?></th>
		<th><?php echo __('Max Exam'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($arm['Subject'] as $subject): ?>
		<tr>
			<td><?php echo $subject['id']; ?></td>
			<td><?php echo $subject['name']; ?></td>
			<td><?php echo $subject['max_ca']; ?></td>
			<td><?php echo $subject['max_exam']; ?></td>
			<td><?php echo $subject['date_modified']; ?></td>
			<td><?php echo $subject['date_created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subjects', 'action' => 'view', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subjects', 'action' => 'edit', $subject['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subjects', 'action' => 'delete', $subject['id']), null, __('Are you sure you want to delete # %s?', $subject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
