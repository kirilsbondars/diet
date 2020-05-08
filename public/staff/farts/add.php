<?php
require_once ("../../../src/initialize.php");

$date_time = correct_input($_GET["date_time"]);
$user_id = correct_input($_GET["user_id"]);

if (empty($date_time))
    Fart::add_fart_now($user_id);
else
    Fart::add_fart($date_time, $user_id);