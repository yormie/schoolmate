<?php
/**
 * StudentFixture
 *
 */
class StudentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'matric_number' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reg_term' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'reg_session' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'arm_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mid_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sex' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dob' => array('type' => 'date', 'null' => false, 'default' => null),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'date_modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'parent_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'matric_number' => 'Lorem ipsum dolor sit amet',
			'reg_term' => 1,
			'reg_session' => 'Lorem ipsum dolor sit amet',
			'arm_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'mid_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'sex' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'dob' => '2013-08-24',
			'date_created' => '2013-08-24 06:07:01',
			'date_modified' => '2013-08-24 06:07:01',
			'parent_name' => 'Lorem ipsum dolor sit amet',
			'report' => 1
		),
	);

}
