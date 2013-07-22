<?php

class IndexController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Programmer OneArt');
        parent::initialize();
    }

    public function indexAction()
    {

        $this->view->aUser = User::findFirst();
        $this->view->userList = User::find();

    }

}

