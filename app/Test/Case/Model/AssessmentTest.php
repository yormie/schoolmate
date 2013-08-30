<?php
App::uses('Assessment', 'Model');

/**
 * Assessment Test Case
 *
 */
class AssessmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assessment',
		'app.student',
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
		$this->Assessment = ClassRegistry::init('Assessment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assessment);

		parent::tearDown();
	}

}
