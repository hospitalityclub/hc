<?php
class MembersController extends AppController {

	var $name = 'Members';

  // auth settings, this controller is used for auth
  function beforeFilter() {
    $this->Auth->fields = array(
      'username' => 'username',
      'password' => 'password'
    );
  }

  // user logs out, this kills the session
  function logout() {
    $this->redirect($this->Auth->logout());
  }

  // keep this action empty, this is used for auth
  function login() {
  }

  // this action should never be reached
	function index() {
	}

  // this should be modified to be profile show
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid member', true));
			$this->redirect(array('action' => 'index'));
		}
		// $this->set('member', $this->Member->read(null, $id));
    $this->set('member', $this->Member->findByUsername($id));
	}

  // should be modified to edit profile
	function edit($username = null) {
		if (!$username && empty($this->data)) {
			$this->Session->setFlash(__('Invalid member', true));
      // what do we do here?
			//$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Member->save($this->data)) {
				$this->Session->setFlash(__('The member has been saved', true));
				// this is a fix only, cake keeps redirecting to /edit/$id
        $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The member could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
      $this->data = $this->Member->findByUsername($username);
		}
	}
}
?>
