<?php
require_once ("../../../src/initialize.php");

$date_time = correct_input($_GET["date_time"]);
$user_id = correct_input($_GET["user_id"]);

Fart::add_fart($date_time, $user_id);