<?php
require_once ("../../../src/initialize.php");

$date_time = correct_input($_GET["date"]) . " " . correct_input($_GET["time"]);
$meal_id = correct_input($_GET["meal_id"]);
$user_id = correct_input($_GET["user_id"]);
$new_meal = correct_input($_GET["new_meal"]);

if (isset($_GET["current_time"])) {
    $date_time = date("Y-m-d H:i:s");
}

if ($meal_id == "0") {
    Meal::add_new_meal_date($date_time, $new_meal, $user_id);
} else {
    Meal::add_meal_date($date_time, $meal_id);
}