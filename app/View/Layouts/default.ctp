<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$appDescription = __d('app_dev', 'FiXiT: the facility maintenance app');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $appDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
  echo $this->Html->meta('icon');

  echo $this->Html->css('bootstrap');

  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('script');
  ?>

  <style type="text/css">
  body {
    height: 100%;
    /* The html and body elements cannot have any padding or margin. */
  }  

  #wrap > .container {
    padding-top: 60px;
  }

  code {
    font-size: 80%;
  }
  </style>
</head>
<body>
 <!-- Part 1: Wrap all page content here -->
 <div id="wrap">

  <!-- Fixed navbar -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar">hiiiiiiiiiii</span>
          <span class="icon-bar">hiiiiiiiiiii</span>
          <span class="icon-bar">hiiiiiiiiiii</span>
        </button>
        <a class="brand" href="">FiXiT</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li <?php if($this->params['controller'] == 'jobs') { echo 'class="active"'; }?> ><?php echo $this->Html->link('Jobs',   array('controller' => 'jobs', 'action' => 'index')); ?></a></li>
            <li <?php if($this->params['controller'] == 'issues') { echo 'class="active"'; }?> ><?php echo $this->Html->link('Issues',  array('controller' => 'issues', 'action' => 'index')); ?></a></li>
            <li <?php if($this->params['controller'] == 'locations') { echo 'class="active"'; }?> ><?php echo $this->Html->link('Locations',   array('controller' => 'locations', 'action' => 'index')); ?></a></li>
            <li <?php if($this->params['controller'] == '') { echo 'class="active"'; }?> ><?php echo $this->Html->link('About',  array('controller' => '#', 'action' => '')); ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="container">
    <div class="page-header">
     <h2>FiXiT - Ashesi</h2>
     <p class="lead">Lorem ipsum dolor sit amet, veniam
      <?php echo $this->Html->link('Ashesi University College','http://www.ashesi.edu.gh/',array('target' => '_blank', 'escape'=>false));?>, 
      FiXit, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="content">

     <?php echo $this->Session->flash(); ?>

     <?php echo $this->fetch('content'); ?>
   </div>
 </div>
 <div id="footer">
  <div class="container text-center">
   <?php //echo $this->Html->link(
    // $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
    // 'http://www.cakephp.org/',
     //array('target' => '_blank', 'escape' => false)
     //);
   ?>
   </br>
   <p>Copyright &copy; 2013 FiXiT Community</p>
   <p>
    <?php echo $this->Html->link('Contact',  array('controller' => '#', 'action' => '')); ?>  | 
    <?php echo $this->Html->link('Developers',  array('controller' => '#', 'action' => '')); ?> | powered by 
    <?php echo $this->Html->link('DeBoat Webs',  array('controller' => '#', 'action' => '')); ?>
  </p>
</div>
</div>
</div>
<div class='container'>
  <div class="muted credit">
    <?php //echo $this->element('sql_dump'); ?>
  </div>
</div>
</body>
</html>
