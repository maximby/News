<?php

class AdminController {

    public function actionFormAddArticle()  {

        $news = new News();

        $view = new View();
        $view->news = new News();
        $view->display('admin/formAddArticle.php');
    }
}