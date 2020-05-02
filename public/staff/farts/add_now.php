<?php
require_once ("../../../src/initialize.php");

$user_id = correct_input($_GET["user_id"]);

Fart::add_fart_now($user_id);