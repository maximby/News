<?php

class NewsController {

    public function actionAll()  {
        $news = News::findAll();

        $view = new View();

        $view->items = $news;
        $view->display('news/all.php');

    }

    public function actionOne()  {
        $id = $_GET['id'];
        $news = News::findOneByPk($id);
        $view = new View();

        $view->item = $news;
        $view->display('news/one.php');
    }
}
