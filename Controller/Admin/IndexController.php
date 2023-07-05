<?php
namespace Controller\Admin;
use View\View;
use Model\Article;

class IndexController extends \Controller\Admin\MainController {

    public function __construct()
    {
        parent::__construct();
    }

    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('index.php', ['articles' => $articles]);
    }


}