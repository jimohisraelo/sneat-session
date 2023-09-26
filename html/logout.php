<?php
session_start();
unset($_SESSION["email"]);
header('location: auth-login-basic.php');