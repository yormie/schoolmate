<?php
App::uses('AppModel', 'Model');
/**
 * Subject Model
 *
 * @property Assessment $Assessment
 * @property Arm $Arm
 */
class Subject extends AppModel {

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
				'message' => 'Enter the subject name',

			),
		),
		'max_ca' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Enter maximum mark obtainable for the CA',
			),
		),
		'max_exam' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Enter maximum mark obtainable for the Exams',
			),
		),
		'date_modified' => array(
			'datetime' => array(
				'rule' => array('datetime'),
			),
		),
		'date_created' => array(
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
			'foreignKey' => 'subject_id',
			'dependent' => false,
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Arm' => array(
			'className' => 'Arm',
			'joinTable' => 'arms_subjects',
			'foreignKey' => 'subject_id',
			'associationForeignKey' => 'arm_id',
			'unique' => 'keepExisting',
		)
	);

}
