<?php

use Phalcon\Tag as Tag;

class DashboardController extends ControllerBase
{

	public function initialize()
    {
        $this->view->setTemplateAfter('admin');
        Tag::setTitle('Dashboard');
        parent::initialize();
    }

    public function indexAction()
    {
    }

}