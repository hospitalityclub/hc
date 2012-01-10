<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php // echo $this->Html->charset(); ?>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/reset.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/wf.main.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="/hc3/css/grid.css" media="screen" />
  <!--[if IE 6]><link rel="stylesheet" type="text/css" href="/hc3/css/ie6.css" media="screen" /><![endif]-->
  <!--[if IE 7]><link rel="stylesheet" type="text/css" href="/hc3/css/ie.css" media="screen" /><![endif]-->

  <link  href="http://fonts.googleapis.com/css?family=Shadows+Into+Light:regular&v1" rel="stylesheet" type="text/css" >
  <title>
    <?php __('Hospitality Club (Development)'); ?> -
    <?php echo $title_for_layout; ?>
  </title>
</head>
<body>
  <div class="container_16">
    <div class="grid_16">
      <h3 style="color: #f9c"><?php echo $this->Session->flash(); ?> </h3>
    </div>

    <?php echo $content_for_layout; ?>

<br />
    <div class="grid_16">
<center>Hospitality Club Developer Release 1 Tue Jan 10 14:22:38 CET 2012 </center>
    </div>
  </div> <!-- container_16 -->
  <?php // echo $this->Js->writeBuffer(); ?>
</body>
</html>
