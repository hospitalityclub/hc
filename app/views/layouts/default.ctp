<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>HC Devel Layout</title>
		<link rel="stylesheet" type="text/css" href="/hc3/css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/hc3/css/text.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/hc3/css/grid.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/hc3/css/layout.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/hc3/css/nav.css" media="screen" />
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
	</head>
	<body>
		<div class="container_16">
			<div class="clear"></div>
            <?php echo $this->element('navigation'); ?>
			<div class="clear"></div>
            <?php echo $content_for_layout; ?>
            <?php echo $this->element('footer'); ?>
            <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <script type="text/javascript" src="/hc3/js/mootools-1.2.1-core.js"></script>
        <script type="text/javascript" src="/hc3/js/mootools-1.2-more.js"></script>
        <script type="text/javascript" src="/hc3/js/mootools-fluid16-autoselect.js"></script>
    </body>
</html>
