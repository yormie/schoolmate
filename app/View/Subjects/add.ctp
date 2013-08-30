<div class="subjects form">
<?php echo $this->Form->create('Subject'); ?>
	<fieldset>
		<legend><?php echo __('Add Subject'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('max_ca');
		echo $this->Form->input('max_exam');
		//echo $this->Form->checkbox('Arm');
		echo $this->Form->input('Arm', array('multiple' => 'checkbox', 'label' => 'Select classes to offer new subject'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subjects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Arms'), array('controller' => 'arms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Arm'), array('controller' => 'arms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
