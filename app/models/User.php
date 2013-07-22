<?php


class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $password;
     
    /**
     *
     * @var integer
     */
    public $time_register;
     
    /**
     *
     * @var integer
     */
    public $time_last_visit;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap() {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'password' => 'password', 
            'time_register' => 'time_register', 
            'time_last_visit' => 'time_last_visit'
        );
    }

}
