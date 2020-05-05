<?php
require_once ("../../../src/initialize.php");

$user_id = correct_input($_GET["user_id"]);
$result = Meal::get_meals_per_days($user_id);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["date"] == date("Y-m-d"))
            echo '<tr class="table-success">';
        else
            echo '<tr>';

        echo '<td>' . $row["date"]. '</td>
              <td>' . $row["meals"]. '</td>
              </tr>';
    }
}