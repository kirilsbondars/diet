<?php
require_once ("../../../src/initialize.php");

$result = Fart::get_farts_per_days(1);

if ($result->num_rows > 0) {
    for($i = 1; $row = $result->fetch_assoc(); $i++) {
        echo '<tr>
              <td>' . $row["date"]. '</td>
              <td>' . $row["number_all"]. '</td>
              </tr>';
    }
} else {
    echo "0 results";
}