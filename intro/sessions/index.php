<?php
session_start();
//$_SESSION['name'] = "Eduard";

// unset session
// unset($_SESSION['name']);

// clear all session data
// session_destroy();
echo $_SESSION['name'];