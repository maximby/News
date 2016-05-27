<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/news/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>
    <link href="css/news/bootstrap-responsive.css" rel="stylesheet">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://mybootstrap.ru/wp-content/themes/clear-theme/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://mybootstrap.ru/wp-content/themes/clear-theme/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://mybootstrap.ru/wp-content/themes/clear-theme/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://mybootstrap.ru/wp-content/themes/clear-theme/img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://mybootstrap.ru/wp-content/themes/clear-theme/img/favicon.png">
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://localhost:63342/php4/lynda/News/index.php">World news</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    Logged in as <a href="#" class="navbar-link">Username</a>
                </p>
                <ul class="nav">
                    <li class="active"><a href="http://localhost:63342/php4/lynda/News/index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <h2><?=$item->title?></h2>
        <p style="font-size: 1.3em"><?=$item->text?></p>
        <p><a class="btn" href="http://localhost:63342/php4/lynda/News/index.php">На главную »</a></p>
    </div><!--/row-->

    <hr>

    <footer>
        <p>© Company <?= date('Y') ?></p>
    </footer>

</div><!--/.fluid-container-->



</body></html>
