<?php

use Game\Auth;

require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'function.php';
require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Auth.php';
if(!isset($session)){
    $session=new Auth();
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

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark  bg-success col-md-12 ">
        <a class="navbar-brand" href="/index.php">CaseConsulting</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" >Thematics</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01" >
                        <?php foreach($Matiere as $code=>$thematic):?>
                            <a class="dropdown-item" href="menu.php?thematics=<?=$code?>"><?=$thematic?></a>
                        <?php endforeach?>
                    </div>
                </li>
            </ul>
            <form class="form-inline mr-auto mt-7 col-md-7" method="GET">
                <input class="form-control col-10" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-1 " type="submit">Search</button>
            </form>
            <div class="navbar-nav ml-auto">
                <?php if($session->is_connected()):?>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" data-toggle="dropdown"  >learn on Case</a>
                            <div class="dropdown-menu p-4 text-muted dropdown-menu-right" >
                                <p>
                                    <h7>Some example text that's free-flowing within the dropdown menu.</h7>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" data-toggle="dropdown"  >learn on Case</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <?php for($k=0;$k<4;$k++):?>
                                    <a href="" class="dropdown-item"><?='Case'.$k;?></a>
                                <?php endfor?>
                            </div>
                        </li>
                    </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#"  data-toggle="dropdown"  ><?='User1'?></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Available</a>
                            <a class="dropdown-item" href="#">Edit Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Account Settings</a>
                            <a class="dropdown-item" href="/logout.php">Sign out</a>
                        </div>
                    </li>
                <?php else:?>
                    <ul class="navbar-nav ml-auto">
                        <?= nav_item('/login.php', 'Log in'); ?>
                        <?= nav_item('/signup.php', 'Sign up'); ?>
                    </ul>
                <?php endif?>
            </div>  
        </div>
    </nav>
