<?php echo $this->Html->meta('Blackboard System - Admin', '/comments/index.rss', array('type' => 'rss'))?>
</head>
<body>
<div class="wrapper">
  <div id="headercon">
    <div id="headerinner">
      <div id="logo"><?php echo $this->Html->image("blackboard-logo.jpg") ?></div>
      <div id="loggedin">
      	<ul>
      
     <li> Paul Stayt </li>
     <li style="margin-top:-2px;"> | </li>
     <li><?php echo $this->Html->link("Settings", array('controller'=>'pages', 'action' => ''));?></li> 
     <li style="margin-top:-2px;">|</li>
     <li><?php echo $this->Html->link("Logout", array('controller'=>'pages', 'action' => ''));?></li>
     
     </ul>
     
     </div>
      
     	</ul>
    </div>
  </div>
  
  <div id="bodycon">
  
	
	<div id="breadcrumbs">
	   <?php echo $this->Html->tag('h1', 'Admin'); ?>
	   <?php echo $this->Html->tag('h2', 'General Settings'); ?>
	</div>
    <div class="clearfloat"></div>
    
  <div id="tablecon">
    
  <?php echo $this->Form->create('Arm', array('action'=>'add')); ?>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="headerbord">
    <th colspan="2" >General Settings for adding Classes</th>
    </tr>
  <tr>
    <td class="sndrow" width="34%">Class Name</td>
    <td width="66%" align="left"><?php echo $this->Form->input('name', array('class' => 'txtfield', 'error' => false, 'label' => false)); ?></td>
    </tr>
 
</table>
   <?php echo $this->Form->button('Save Changes', array('controller' => 'arms', 'action' => 'add', 'required' => false, 'style'=>array('height:40px; width:300px; margin-top:20px; float:right;'))); ?>
<div class="clearfloat"></div>
 <?php echo $this->Form->end(); ?>
   </div>  
  <div class="clearfloat" style="padding-bottom:70px;"></div>
  </div>
  
  
</div>
</html>