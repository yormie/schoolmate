<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 * @property Arm $Arm
 * @property Assessment $Assessment
 */
class Student extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'matric_number' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Your custom message here',
			
			),
		),
		'reg_term' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',

			),
		),
		'reg_session' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
		'arm_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
			),
		),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'First name is required',
			),
		),
		
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Last name is required',
			),
		),
		'sex' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				 'message' => 'Select gender for the student',
			),
		),
		'address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You have not entered address for the new student',
			),
		),
		'dob' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Date of bitrh of the student is required',
			),
		),
		'date_created' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_modified' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'parent_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter the name of the parents',
			),
		),
		'report' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Arm' => array(
			'className' => 'Arm',
			'foreignKey' => 'arm_id',
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Assessment' => array(
			'className' => 'Assessment',
			'foreignKey' => 'student_id',
			'dependent' => false,
		)
	);

}
