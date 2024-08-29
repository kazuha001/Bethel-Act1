<?php 
session_start();

$_SESSION = [];

session_destroy();

header('Location: http://localhost/Bethel-Act1-main/index.html');

exit;

?>