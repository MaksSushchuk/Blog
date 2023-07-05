<?php

namespace Controller\Admin;
use Model\Article;
use Controller\Admin\MainController;
class CreateController extends MainController {

    function __construct(){
        parent::__construct();

    }

    public function create(){
        return $this->view->renderHtml('create.php');
    }

    
}

?>
