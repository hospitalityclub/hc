<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php // echo $this->Html->charset(); ?>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/reset.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/text.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/grid.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/layout.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/nav.css" media="screen" />
  <!--[if IE 6]><link rel="stylesheet" type="text/css" href="/hc3/css/ie6.css" media="screen" /><![endif]-->
  <!--[if IE 7]><link rel="stylesheet" type="text/css" href="/hc3/css/ie.css" media="screen" /><![endif]-->
  <link  href="http://fonts.googleapis.com/css?family=Shadows+Into+Light:regular&v1" rel="stylesheet" type="text/css" >
  <?php echo $this->Html->script('jquery'); ?>
  <title>
    <?php __('Hospitality Club (Development)'); ?> -
    <?php echo $title_for_layout; ?>
  </title>
</head>
<body>
  <div class="container_16">
    <div class="grid_16">
      <h3 style="color: red"><?php echo $this->Session->flash(); ?> </h3>
      <?php echo $this->element('header'); ?>
    </div>

    <?php echo $content_for_layout; ?>

    <div class="grid_16">
      <?php echo $this->element('sql_dump'); ?>
    </div>
  </div> <!-- container_16 -->
  <?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
