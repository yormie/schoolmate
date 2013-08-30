<?php
App::uses('Arm', 'Model');

/**
 * Arm Test Case
 *
 */
class ArmTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.arm',
		'app.student',
		'app.assessment',
		'app.year',
		'app.subject',
		'app.arms_subject'
	);

    $data = array(
			'Arm' => array(
				'name' => 'Blue'
			)
		);

	public function testSave(){
		$this->Arm->create();
		$this->assertNotEmpty($this->Arm->save($data));

	}

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Arm = ClassRegistry::init('Arm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Arm);

		parent::tearDown();
	}

}
