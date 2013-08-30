	<title>Blackboard System - Admin General Settings</title>
</head>

<body>
<div class="wrapper">
  <div id="headercon">
    <div id="headerinner">
      <div id="logo"><?php echo $this->Html->image("blackboard-logo.jpg") ?></div>
      <div id="nav">
        <ul>
        <li>
        <?php
        echo $this->Html->image("nav-arrow.jpg", array('class' => 'imgcon'));
        echo $this->Html->link('Grading', array('controller' => 'pages', 'action' => 'grading-select-department'))
        ;?>
        </li>
        <li>
        <?php
        echo $this->Html->image("nav-arrow.jpg", array('class' => 'imgcon'));
        echo $this->Html->link('Results', array('controller' => 'pages', 'action' => 'results-select-department') )
        ;?>
        </li>
        <li style="border-right:1px solid #bfbfc1">
        <?php
        echo $this->Html->image("nav-arrow.jpg", array('class' => 'imgcon'));
        echo $this->Html->link('Admin', array('controller' => 'SchoolSessions', 'action' => 'add') )
        ;?>
        </li>
        </ul>
      </div>
      
      <?php echo $this->element('logout'); ?>
    </div>
  </div>
  <div id="bodycon">
  <div id="breadcrumbs">