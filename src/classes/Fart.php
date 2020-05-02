<?php


class Fart extends DatabaseObject
{
    static public function add_fart_now($user_id)
    {
        self::run_sql("CALL add_fart_now(" . $user_id . ");");
    }

    static public function add_fart($data_time, $user_id)
    {
        self::run_sql("CALL add_fart('" . $data_time . "', '" . $user_id ."');");
    }

    static public function add_farts($data_time, $user_id, $number)
    {
        self::run_sql("CALL add_farts('" . $data_time . "', '" . $user_id ."', " . $number . ");");
    }

    static public function get_farts_per_days($user_id)
    {
        return self::find_by_sql("SELECT DATE(date_time) AS date, SUM(number) AS number_all FROM farts WHERE user = " . $user_id ." GROUP BY DATE(date_time) ORDER BY DATE(date_time) DESC");
    }
}