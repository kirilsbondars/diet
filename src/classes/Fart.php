<?php


class Fart extends DatabaseObject
{
    static public function add_fart_now($user_id) {
        self::run_sql("CALL add_fart_now($user_id);");
    }

    static public function add_fart($data_time, $user_id) {
        self::run_sql("CALL add_fart('" . $data_time . "', $user_id)");
    }

    static public function get_farts_per_days($user_id) {
        return self::find_by_sql("SELECT dates.date AS date, COUNT(*) AS number_of_farts FROM farts JOIN dates ON farts.date = dates.id WHERE farts.user = $user_id GROUP BY farts.date ORDER BY dates.date DESC");
    }
}