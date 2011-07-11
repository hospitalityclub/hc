<?php
class Member extends AppModel {
	var $name = 'Member';
  var $belongsTo = array(
    'Country',
    'City',
    // this is the way to get seccountry auto-magically translated to a string
    'SecCountry' => array(
      'className'    => 'Country',
      'foreignKey'    => 'seccountry'
    )
  );   
	var $displayField = 'name';
}
?>
