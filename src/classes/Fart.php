<?php


class Fart extends DatabaseObject
{
    static public function add_fart_now()
    {
        self::find_by_sql("CALL add_fart_now();");
    }

    static public function get_farts()
    {
        return self::find_by_sql("SELECT * FROM farts");
    }

    static public function get_farts_days()
    {
        return self::find_by_sql("SELECT DATE(date_time) AS date, COUNT(number) AS number_all FROM farts GROUP BY DATE(date_time)");
    }
}