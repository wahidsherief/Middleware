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
    
    /**
     * instantiate middleware class
     * @param  string $val the location name where to redirect if user is a guest.
     */
    public function middleware($val)
    {
        $this->middleware = new Middleware($val);
    }
}