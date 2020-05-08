<?php
require_once ("../../src/initialize.php");
date_default_timezone_set("Europe/Riga");

$user_id = correct_input($_GET["user_id"]);
$result = DatabaseObject::find_by_sql("CALL show_statistics($user_id)");

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["date_farts"] == date("Y-m-d"))
            echo '<tr class="table-success">';
        else
            echo '<tr>';

        echo '<td>' . $row["date_farts"]. '</td>
              <td>' . $row["farts"]. '</td>
              <td>' . $row["meals"]. '</td>  
              </tr>';
    }
}