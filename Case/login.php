<?php

use Game\Auth;

$title= 'Login';
require_once __DIR__.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Auth.php';
$session=new Auth;
require 'data/aprecu_Case.php';
require 'elements/header.php';?>

<body>
    
    <form class=" form-signin mx-5">
        <div class="container text-center col-md-4 ">
            <img class="mb-4" src="/img/CaseConsulting.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">CaseConsulting</h1>
            <p>Sign Up and Start Learning</p>
        </div>

        <div class=" container form-label-group col-md-4">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Email address</label>
        </div>

        <div class=" container form-label-group col-md-4">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>

        <div class=" container checkbox col-md-4">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="container btn btn-lg btn-primary btn-block col-md-2" type="submit">Sign in</button>
    </form>
</body>

<?php require 'elements/footer.php';?>






