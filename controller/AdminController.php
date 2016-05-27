<?php

class AdminController {

    public function actionFormAddArticle()  {

        $news = new News();

        include __DIR__ . '/../view/baseHeader.php';
        include __DIR__ . '/../view/admin/formAddArticle.php';
        include __DIR__ . '/../view/baseFooter.php';
    }
}