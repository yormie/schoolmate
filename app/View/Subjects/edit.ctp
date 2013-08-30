<div class="subjects form">
<?php echo $this->Form->create('Subject'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subject'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('max_ca');
		echo $this->Form->input('max_exam');
		echo $this->Form->input('date_modified');
		echo $this->Form->input('date_created');
		echo $this->Form->input('Arm');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subject.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subject.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Arms'), array('controller' => 'arms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arm'), array('controller' => 'arms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
