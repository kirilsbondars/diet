<?php
require_once ("../../src/initialize.php");
date_default_timezone_set("Europe/Riga");

$farts = Fart::get_farts_per_days(1);
$meals = Meal::get_meals_per_days(1);

$date = date("Y-m-d", strtotime("-1 days"));
echo $date;

if ($farts->num_rows > 0 || $meals->num_rows > 0) {
    while($rowf = $farts->fetch_assoc() || $rowm = $meals->fetch_assoc()) {

    }
}