<?php
class MembersController extends AppController {
    var $name = 'Members';
    var $helpers = array( 'Form', 'Html', 'Js' => array('Jquery')); 
    var $paginate = array(
        'limit' => 40,
        'order' => array(
        // 'Member.id' => 'asc'
        )
    );
    var $layout = 'login';

    // Auth settings
    function beforeFilter() {
        $this->Auth->fields = array(
            'username' => 'username',
            'password' => 'password'
        );
        $this->Auth->authError = "Please log in first in order to continue...";
        $this->Auth->allow('register');
    }

    // User logs out
        function logout() {
        $this->redirect($this->Auth->logout());
    }

    // Keep this one empty
    function login() {
        $this->layout = 'login';
    }

    // Register method
    function register() {
        if (!empty($this->data)) {
            if ($this->data['Member']['password'] == $this->Auth->password($this->data['Member']['password_confirm'])) {
                $this->Member->create();
                $this->Member->save($this->data);
                $this->redirect(array('controller' => 'countries'));
            }
        }
    } 

    // Displays a city (this might change)
    function city($id = null) {
        // retrieve only needed data
        $this->Member->recursive = -1;
        $this->paginate = array(
            'conditions' => array(
            'Member.city_id' => $id
            ),
            'fields' => array(
                'id','name','nbcomment'
            ),
            'limit' => 50
        );
        $members = $this->paginate('Member');
        $this->set('members', $members);
    }

    // repeated for testing


    // Displays the user profile
    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid member', true));
            $this->redirect(array('action' => 'index'));
        }
        // $this->set('member', $this->Member->read(null, $id));
        $this->set('member', $this->Member->findById($id));
    }

    // amonaco: should we have the username in the url?
	function name($id = null) {
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
