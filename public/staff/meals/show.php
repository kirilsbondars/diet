<?php
require_once ("../../../src/initialize.php");

$user_id = correct_input($_GET["user_id"]);
$result = Meal::get_meals($user_id);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
    }
}