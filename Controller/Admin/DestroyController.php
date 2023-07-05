<?php

namespace Controller\Admin;
use Controller\Admin\MainController;
use Model\Article;

class DestroyController extends \Controller\Admin\MainController {

    public function __construct()
    {
        parent::__construct();
    }

    public function delete(int $articleId){

        Article::delete($articleId);
        $articles = Article::findAll();
        $this->view->renderHtml('index.php', ['articles' => $articles]);

    }
}