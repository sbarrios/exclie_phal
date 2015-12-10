<?php

use Phalcon\Tag as Tag;

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('client');
        Tag::setTitle('Sign In');
        parent::initialize();
    }

    public function indexAction()
    {
        if (!$this->request->isPost()) {
            Tag::setDefault('email', 'demo@phalconphp.com');
            Tag::setDefault('password', 'phalcon');
        }
    }

    /**
     * Register authenticated user into session data
     *
     * @param Users $user
     */
    private function _registerSession($user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->name
        ));
    }

    /**
     * This actions receive the input from the login form
     *
     */
    public function loginAction()
    {
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email', 'email');

            $password = $this->request->getPost('password');
            $password = sha1($password);

            $user = Users::findFirst("email='$email' AND password='$password' AND active='Y'");
            if ($user != false) {
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->name);
                return $this->forward('dashboard/index');
            }

            $username = $this->request->getPost('email', 'alphanum');
            $user = Users::findFirst("username='$username' AND password='$password' AND active='Y'");
            if ($user != false) {
                $this->_registerSession($user);
                $this->flash->success('Welcome ' . $user->name);
                return $this->forward('dashboard/index');
            }

            $this->flash->error('Wrong email/password');
        }

        return $this->forward('index/index');
    }

    /**
     * Finishes the active session redirecting to the index
     *
     * @return unknown
     */
    public function logoutAction()
    {
        $this->session->remove('auth');
        $this->flash->success('Goodbye!');
        return $this->forward('index/index');
    }
}
