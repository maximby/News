<?php

if (isset($_POST['go'])) {
    $el1 = null;
    if (!empty( $_POST['title'])) {
        $title =  trim($_POST['title']);
        $title = stripslashes($title);
        $title = strip_tags($title);
        $title = htmlspecialchars($title);

    } else {
        $el1 = 'Заполните поле "Название статьи"<br />';
    }

    $el2 = null;
    if (!empty( $_POST['text'])) {
        $text =  trim($_POST['text']);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);
    } else {
        $el2 = 'Заполните поле "Текст статьи"<br />';
    }

    $eEn = $el1.$el2;

    if ($eEn == null) {
        $news->title = $title;
        $news->text = $text;
        $news->ssve();
        $title = null;
        $text = null;
    }
}

?>

<div class="starter-template">
    <p class="lead">Добавление новой статьи</p>
</div
<div class="forms">
    <form  action="form.php" method="post" name="add_article" >
        <p><input type="text" name="title" id="title" value="<?=$title?>" size="95"  />
            <span> Название статьи</span>
            <br />
            <span class="error"><?=$el1?></span>
        </p>
        <p><textarea name="text" id="text" cols="118" rows="20" placeholder="Текст статьи"><?=$text?></textarea>
        </p>
        <span class="error"><?=$el2?></span>
        <input type="hidden" name="go" value="5">
        <p><input name="submit" type="submit" id="submit" value="Отправить" />
        </p>
    </form>
</div>
