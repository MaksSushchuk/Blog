<?php

namespace Controller\Admin;
use View\View;
use Services\Services;

class MainController  {

    protected $view;

    public function __construct()
    {   
        $this->db = new Services();
        $this->view = new View(__DIR__ . '/../../resourses/Admin');
    }
}