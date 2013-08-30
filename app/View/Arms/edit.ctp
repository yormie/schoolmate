<div class="arms form">
<?php echo $this->Form->create('Arm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Arm'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
		echo $this->Form->input('Subject');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Arm.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Arm.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Arms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
