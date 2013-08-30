<div class="assessments view">
<h2><?php  echo __('Assessment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assessment['Student']['id'], array('controller' => 'students', 'action' => 'view', $assessment['Student']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assessment['Year']['name'], array('controller' => 'years', 'action' => 'view', $assessment['Year']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Term'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assessment['Subject']['name'], array('controller' => 'subjects', 'action' => 'view', $assessment['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ca Score'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['ca_score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exam Score'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['exam_score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($assessment['Assessment']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assessment'), array('action' => 'edit', $assessment['Assessment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assessment'), array('action' => 'delete', $assessment['Assessment']['id']), null, __('Are you sure you want to delete # %s?', $assessment['Assessment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Assessments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assessment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
