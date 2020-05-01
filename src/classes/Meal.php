<?php


class Meal extends DatabaseObject
{
    static public function add_meal_now($userid, $meal)
    {
        self::find_by_sql("CALL add_meal_now(" . $meal. ");");
    }

    static public function get_meals_days($user_id)
    {
        return self::find_by_sql("SELECT DATE(date_time) AS date, COUNT(number) AS number_all FROM farts WHERE user = " . $user_id . " GROUP BY DATE(date_time) ORDER BY DATE(date_time) DESC");
    }
}