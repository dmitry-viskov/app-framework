<?php
require_once 'App/Event/Observable/Abstract.php';

class App_Event_Observable_System extends App_Event_Observable_Abstract
{

    protected static $instance;

    private function __construct()
    {}

    private function __clone()
    {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}