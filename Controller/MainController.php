<?php
namespace Controller;
use View\View;
use Services\Services;
use Model\Article;
class MainController{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../resourses');
        $this->db = new Services();
    }

    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main.php', ['articles' => $articles]);
    }
}