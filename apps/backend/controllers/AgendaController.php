<?php

use Phalcon\Tag as Tag;

class AgendaController extends ControllerBase
{

	public function initialize()
    {
        $this->view->setTemplateAfter('admin');
        Tag::setTitle('Agenda');
        parent::initialize();
    }

    public function indexAction()
    {
    }

}