<?php
App::uses('Year', 'Model');

/**
 * Year Test Case
 *
 */
class YearTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.year',
		'app.assessment',
		'app.student',
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
		$this->Year = ClassRegistry::init('Year');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Year);

		parent::tearDown();
	}

}
