<?php
App::uses('AppModel', 'Model');
/**
 * Assessment Model
 *
 * @property Student $Student
 * @property Year $Year
 * @property Subject $Subject
 */
class Assessment extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'student_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'year_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
			),
		),
		'term' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
			),
		),
		'subject_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
			),
		),
		'ca_score' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
			),
		),
		'exam_score' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
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
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
		),
		'Year' => array(
			'className' => 'Year',
			'foreignKey' => 'year_id',
		),
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_id',
		)
	);
}
