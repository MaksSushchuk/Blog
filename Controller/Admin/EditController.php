<?php

namespace Controller\Admin;
use Model\Article;
use View\View;

class EditController extends \Controller\Admin\MainController {

    public function __construct()
    {
        parent::__construct();
    }

    public function edit(int $articleId)
    {
        $article = Article::getById($articleId);
   
         $this->view->renderHtml('edit.php',['article' => $article]);
    }
}