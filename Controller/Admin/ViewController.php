<?php

namespace Controller\Admin;
use Model\Article;
use View\View;

class ViewController extends \Controller\Admin\MainController {

    public function __construct()
    {
        parent::__construct();
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);
        $this->view->renderHtml('view.php', ['article' => $article]);
    }
}