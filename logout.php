<?php
session_start();

//echo $_SESSION['l_uname'];
//echo $_SESSION['l_pwd'];
//echo count($_SESSION);

unset($_SESSION['l_uname']);
unset($_SESSION['l_pwd']);
unset($_SESSION['cname']);
unset($_SESSION['user']);
unset($_SESSION['python']);
unset($_SESSION['java']);
unset($_SESSION['hardware']);


//echo count($_SESSION);

// destroy the session
session_destroy(); 


header('Location: index.php');
?>