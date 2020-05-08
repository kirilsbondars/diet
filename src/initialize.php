<?php

define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("PUBLIC_PATH", ROOT_PATH . "/public");
define("ASSETS_PATH", PUBLIC_PATH . "/assets");
define("STAFF_PATH", PUBLIC_PATH . "/staff");
define("SHARED_PATH", ROOT_PATH . "/src/shared");

require_once ("classes/DatabaseObject.php");
require_once ("classes/Fart.php");
require_once ("classes/Meal.php");
require_once ("database_functions.php");
require_once ("functions.php");

$database = db_connect();
DatabaseObject::set_database($database);

date_default_timezone_set("Europe/Riga");