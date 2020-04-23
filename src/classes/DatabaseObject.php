<?php

class DatabaseObject
{
    static protected $database;

    static public function set_database($database) {
        self::$database = $database;
    }

    static public function find_by_sql($sql) {
        $result = self::$database->query($sql);
        if(!$result) {
            exit("Database query failed.");
        }
        return $result;
    }

    static public function find_by_sql_single($sql) {
        $result = self::find_by_ID($sql);
        return $result->fetch_assoc();
    }
}