<?php

class ContactForm extends Phalcon\Forms\Form
{
    public function initialize()
    {
        $this->add(new Text("name"));

        $this->add(new Text("telephone"));

        $this->add(new Select("telephoneType", TelephoneTypes::find(), array(
            'using' => array('id', 'name')
        )));
    }
}