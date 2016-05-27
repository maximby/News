<?php

require __DIR__ . '/autoload.php';

$cntrl = isset($_GET['cntrl']) ? $_GET['cntrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$nameController = $cntrl . 'Controller';
$controller = new $nameController;
$method = 'action' . $act;


$controller->$method();