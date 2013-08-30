<div class="years form">
<?php echo $this->Form->create('Year'); ?>
	<fieldset>
		<legend><?php echo __('Edit Year'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Year.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Year.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Years'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('controller' => 'assessments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('controller' => 'assessments', 'action' => 'add')); ?> </li>
	</ul>
</div>
