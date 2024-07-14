<?php
session_start();

unset($_SESSION['login_user']);
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location:index.php");
exit;


?>