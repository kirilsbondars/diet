<?php
require_once ("../../../src/initialize.php");
date_default_timezone_set("Europe/Riga");

$date_time = date("Y-m-d H:i:s");

//$date_time = correct_input($_GET["date_time"]);
$meal_id = correct_input($_GET["meal_id"]);
$user_id = correct_input($_GET["user_id"]);
$new_meal = correct_input($_GET["new_meal"]);

if (!empty($meal_id)) {
    Meal::add_datetime_meal($date_time, $meal_id);
} else {
    Meal::add_new_meal($new_meal, $user_id);
    $meal_id = Meal::get_meal_id($new_meal);
    Meal::add_datetime_meal($date_time, $meal_id);
}