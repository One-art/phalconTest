<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    protected function initialize()
    {
        //Phalcon\Tag::prependTitle('INVO | ');

        $scriptsFooter = $this->assets->collection('footer')->setLocal(false);
        $scriptsFooter->addJs('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js')->addJs('//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js');

        $scriptsHeader = $this->assets->collection('header')->setLocal(false);
        $scriptsHeader->addCss('//netdna.bootstrapcdn.com/bootswatch/2.3.2/cosmo/bootstrap.min.css');

    }

}