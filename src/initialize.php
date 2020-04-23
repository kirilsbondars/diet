<?php
require_once ("classes/DatabaseObject.php");
require_once ("database_functions.php");
require_once ("classes/Fart.php");

$database = db_connect();
DatabaseObject::set_database($database);