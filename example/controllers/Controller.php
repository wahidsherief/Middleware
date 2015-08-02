<?php

/**
* Base Controller Class
*/
class Controller
{
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    public function middleware($val)
    {
        $this->middleware = new Middleware($val);
    }
}