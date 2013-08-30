<?php
App::uses('AppController', 'Controller');
/**
 * Assessments Controller
 *
 * @property Assessment $Assessment
 */
class AssessmentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Assessment->recursive = 0;
		$this->set('assessments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Assessment->id = $id;
		if (!$this->Assessment->exists()) {
			throw new NotFoundException(__('Invalid assessment'));
		}
		$this->set('assessment', $this->Assessment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assessment->create();
			if ($this->Assessment->save($this->request->data)) {
				$this->Session->setFlash(__('The assessment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assessment could not be saved. Please, try again.'));
			}
		}
		$students = $this->Assessment->Student->find('list');
		$years = $this->Assessment->Year->find('list');
		$subjects = $this->Assessment->Subject->find('list');
		$this->set(compact('students', 'years', 'subjects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Assessment->id = $id;
		if (!$this->Assessment->exists()) {
			throw new NotFoundException(__('Invalid assessment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Assessment->save($this->request->data)) {
				$this->Session->setFlash(__('The assessment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assessment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Assessment->read(null, $id);
		}
		$students = $this->Assessment->Student->find('list');
		$years = $this->Assessment->Year->find('list');
		$subjects = $this->Assessment->Subject->find('list');
		$this->set(compact('students', 'years', 'subjects'));
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
		$this->Assessment->id = $id;
		if (!$this->Assessment->exists()) {
			throw new NotFoundException(__('Invalid assessment'));
		}
		if ($this->Assessment->delete()) {
			$this->Session->setFlash(__('Assessment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Assessment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
