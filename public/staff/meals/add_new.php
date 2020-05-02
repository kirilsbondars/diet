<?php
require_once ("../../../src/initialize.php");

$date_time = correct_input($_GET["date_time"]);
$user_id = correct_input($_GET["user_id"]);
$meal = correct_input($_GET["meal"]);

Meal::add_new_meal($meal);
$meal_id = Meal::get_meal_id($meal);
Meal::add_datetime_user_meal($date_time, $user_id, $meal_id);