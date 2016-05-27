<?php

class NewsController {

    public function actionAll()  {
        $items = News::getAll();
        //var_dump($items);
        include __DIR__ . '/../view/news/all.php';
    }

    public function actionOne()  {
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../view/news/one.php';
    }
}
