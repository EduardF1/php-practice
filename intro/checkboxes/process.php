<?php
if (isset($_POST['agree']) and $_POST['agree'] === 'true') {
    echo 'Set and correct value!';
} else {
    echo 'You must agree to the Terms & Conditions';
}