<?php
App::uses('Student', 'Model');

/**
 * Student Test Case
 *
 */
class StudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student',
		'app.assessment',
		'app.year',
		'app.subject',
		'app.arm',
		'app.arms_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Student = ClassRegistry::init('Student');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Student);

		parent::tearDown();
	}

}
