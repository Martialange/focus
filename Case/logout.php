<?php

use Game\Auth;

require_once __DIR__.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.'Auth.php';
$session=New Auth;

$session->disconnected();
