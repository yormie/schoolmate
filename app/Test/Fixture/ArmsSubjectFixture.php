<?php
/**
 * ArmsSubjectFixture
 *
 */
class ArmsSubjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'arm_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'subject_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			
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
			'arm_id' => 1,
			'subject_id' => 1
		),
	);

}
