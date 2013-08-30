<?php
/**
 * SubjectFixture
 *
 */
class SubjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'max_ca' => array('type' => 'integer', 'null' => false, 'default' => null),
		'max_exam' => array('type' => 'integer', 'null' => false, 'default' => null),
		'date_modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'max_ca' => 1,
			'max_exam' => 1,
			'date_modified' => '2013-08-24 06:09:41',
			'date_created' => '2013-08-24 06:09:41'
		),
	);

}
