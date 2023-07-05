<?php

namespace Controller\Admin;
use Model\Article;
use Controller\Admin\MainController;
class StoreController extends MainController{


    function __construct(){

        parent::__construct();
    }

    public static function add($title,$text){
        $articles = Article::findAll();
        if(gettype($title === 'string') && gettype($text === 'string')){
        $createOfFirst = true;
        foreach($articles as $article){
            if($article['title'] === $title){
                $createOfFirst = false;
            }
        }
        if($createOfFirst){
            Article::add($title,$text);
        }
        }
    }
    


    public static function index(){
        $articles = Article::findAll();
        return $this->view->renderHtml('index.php',['articles' => $articles]);
    }
}
