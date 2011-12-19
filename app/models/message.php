<?php
class Message extends AppModel {
	var $name = 'Message';

	var $validate = array(
		'message' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Message cannot be empty...',
				'allowEmpty' => false,
				'required' => true,
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxlength' => array(
				'rule' => array('maxlength', 2048), // in bytes
				'message' => 'Message exceeds allowed 2048 characters...',
				'allowEmpty' => false,
				'required' => true,
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	var $belongsTo = array(
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'from_member',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Member' => array(
			'className' => 'Member',
			'foreignKey' => 'to_member',
			'conditions' => '',
			'fields' => '',
		 	'order' => ''
		)
	);
}
?>
