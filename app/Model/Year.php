<?php
App::uses('AppModel', 'Model');
/**
 * Year Model
 *
 * @property Assessment $Assessment
 */
class Year extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter a name for the new session',
			),
		),
		'date_created' => array(
			'datetime' => array(
				'rule' => array('datetime'),
			),
		),
		'date_modified' => array(
			'datetime' => array(
				'rule' => array('datetime'),
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Assessment' => array(
			'className' => 'Assessment',
			'foreignKey' => 'year_id',
			'dependent' => false,
		)
	);

}
