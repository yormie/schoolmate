<?php
App::uses('AppController', 'Controller');
/**
 * Arms Controller
 *
 * @property Arm $Arm
 */
class ArmsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Arm->recursive = 0;
		$this->set('arms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Arm->id = $id;
		if (!$this->Arm->exists()) {
			throw new NotFoundException(__('Invalid arm'));
		}
		$this->set('arm', $this->Arm->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Arm->create();
			if ($this->Arm->save($this->request->data)) {
				$this->Session->setFlash(__('The class has been saved'));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The class could not be saved. Please, try again.'));
			}
		}
		$arms = $this->Arm->find('all');
		$this->set(compact('arms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Arm->id = $id;
		if (!$this->Arm->exists()) {
			throw new NotFoundException(__('Invalid arm'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Arm->save($this->request->data)) {
				$this->Session->setFlash(__('The arm has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arm could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Arm->read(null, $id);
		}
		$subjects = $this->Arm->Subject->find('list');
		$this->set(compact('subjects'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Arm->id = $id;
		if (!$this->Arm->exists()) {
			throw new NotFoundException(__('Invalid arm'));
		}
		if ($this->Arm->delete()) {
			$this->Session->setFlash(__('Arm deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Arm was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
