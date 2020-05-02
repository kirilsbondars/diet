<?php
require_once ("../../../src/initialize.php");

$user_id = correct_input($_GET["user_id"]);
$result = Fart::get_farts_per_days($user_id);

if ($result->num_rows > 0) {
    for($i = 1; $row = $result->fetch_assoc(); $i++) {
        echo '<tr>
              <td>' . $row["date"]. '</td>
              <td>' . $row["number_all"]. '</td>
              </tr>';
    }
}