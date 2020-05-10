<?php
require_once ("../../../src/initialize.php");

$date_time = correct_input($_GET["date_time"]);
$user_id = correct_input($_GET["user_id"]);

$farts = new Fart(1);

if (empty($date_time))
    $farts->set_current_date_time();
else
    $farts->set_date_time($date_time);

$farts->add_fart();