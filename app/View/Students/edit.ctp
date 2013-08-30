<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('matric_number');
		echo $this->Form->input('reg_term');
		echo $this->Form->input('reg_session');
		echo $this->Form->input('arm_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('mid_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('sex');
		echo $this->Form->input('address');
		echo $this->Form->input('dob');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
		echo $this->Form->input('parent_name');
		echo $this->Form->input('report');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Student.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Student.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Arms'), array('controller' => 'arms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arm'), array('controller' => 'arms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
