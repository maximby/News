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

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://bootstrap-3.ru/assets/ico/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/baseTemplate/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/baseTemplate/starter-template.css" rel="stylesheet">

</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost:63342/php4/lynda/News/index.php">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost:63342/php4/lynda/News/index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="http://localhost:63342/php4/lynda/News/index.php?cntrl=Admin&act=FormAddArticle">Admin</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div class="container">



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



</div>
<!-- /.container -->

</body>
</html>
