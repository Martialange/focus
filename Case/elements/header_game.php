<?php

use Game\Auth;

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'function.php';
require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Auth.php';
if(!isset($session)){
    $session=new Auth;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>
        <?php if(isset($title)):?>
            <?= $title?>
        <?php else:?>
            CaseConsulting
        <?php endif ?>
    </title>
 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="jumbotron.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark  bg-success col-md-12 ">
        <a class="navbar-brand" href="/index.php">CaseConsulting</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/index.php" data-toggle="dropdown" >Thematics</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01" >
                        <?php foreach($Matiere as $code=>$thematic):?>
                            <a class="dropdown-item" href="menu.php?thematics=<?=$code?>"><?=$thematic?></a>
                        <?php endforeach?>
                    </div>
                </li>
            </ul>
            <div class="navbar-nav ml-auto">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="/index.php"  data-toggle="dropdown"  aria-expanded="false"><?='Quit'?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

