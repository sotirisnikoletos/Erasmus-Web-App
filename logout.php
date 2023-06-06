<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="login.html">Go back</a>';
header('location: login.html');
?>