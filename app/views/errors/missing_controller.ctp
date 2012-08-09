<div class="grid_16">
    <h2 id="page-heading">Hospitality Club > Error<span style="float: right;">Development Version 0.1</h2>
</div>
<div class="clear"></div>
<div class="grid_4">
    <?php echo $this->element('menu'); ?>
    <?php echo $this->element('list'); ?>
</div>
<div class="grid_7">
    <h2><?php __('Missing Controller'); ?></h2>
 
    <p class="error">
        <strong><?php __('Error'); ?>: </strong>
        <?php printf(__('%s could not be found.', true), '<em>' . $controller . '</em>'); ?>
    </p>
    <p class="error">
        <strong><?php __('Error'); ?>: </strong>
        <?php printf(__('Create the class %s below in file: %s', true), '<em>' . $controller . '</em>', APP_DIR . DS . 'controllers' . DS . Inflector::underscore($controller) . '.php'); ?>
    </p>
    <pre>
    &lt;?php
    class <?php echo $controller;?> extends AppController {

        var $name = '<?php echo $controllerName;?>';
    }
    ?&gt;
    </pre>
  
</div>
<div class="grid_5">
    <!-- Login / Register box -->
    <?php echo $this->element('login_register'); ?>
    <!-- Search box-->
    <?php echo $this->element('search'); ?>
</div>
