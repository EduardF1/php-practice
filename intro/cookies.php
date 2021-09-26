<?php
/////////////////////////////////////////               Cookies                  ///////////////////////////////////////

/*
 *  Note about cookies:
 *  - The setcookie function must be called before any HTML code within a script.
 */
$exp_time = time() + 86400; // 1 day
$exp_time_unset = time() - 86400;

//setcookie("name1", "Eduard", $exp_time);
//print_r($_COOKIE["name1"]);
//setcookie("age", 23, $exp_time);

// unset cookie
//setcookie('age', "", $exp_time_unset);

if (isset($_COOKIE['age'])) {
    echo $_COOKIE['age'];
} else {
    echo "Cookie not set.";
}
