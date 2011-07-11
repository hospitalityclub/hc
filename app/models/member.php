<?php
class Member extends AppModel {
	var $name = 'Member';
  var $belongsTo = array('Country', 'City');   
	var $displayField = 'name';
}
?>
