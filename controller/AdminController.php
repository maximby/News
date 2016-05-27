<?php

class AdminController {

    public function actionFormAddArticle()  {

        $news = new News();

        $view = new View();
        $view->display('admin/formAddArticle.php');
    }
}