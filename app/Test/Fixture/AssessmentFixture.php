<?php
/**
 * AssessmentFixture
 *
 */
class AssessmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'year_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'term' => array('type' => 'integer', 'null' => false, 'default' => null),
		'subject_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ca_score' => array('type' => 'integer', 'null' => false, 'default' => null),
		'exam_score' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => null),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'date_modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'student_id' => 1,
			'year_id' => 1,
			'term' => 1,
			'subject_id' => 1,
			'ca_score' => 1,
			'exam_score' => 1,
			'status' => 1,
			'date_created' => '2013-08-24 06:05:21',
			'date_modified' => '2013-08-24 06:05:21'
		),
	);

}
