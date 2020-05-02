<?php
require_once ("../../../src/initialize.php");

$result = Meal::get_meals();

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
    }
}