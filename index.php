<?php

require __DIR__.'/autoload.php';

$view = new \App\View();
$view->users=\App\Models\User::findAll();

$view->title="My site";

$cont=$view->render(__DIR__.'/App/templates/index.php');
$cont=str_replace('@','!!!~',$cont);
echo $cont;

echo count($view);