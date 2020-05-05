<?php


class Meal extends DatabaseObject
{
    static public function get_meals($user_id) {
        return self::find_by_sql("SELECT id, name FROM meals WHERE user = " . $user_id);
    }

    static public function get_meals_per_days($user_id) {
        return self::find_by_sql("SELECT DATE(date_time) AS date, GROUP_CONCAT(meals.name SEPARATOR '; ') AS meals FROM datetimes_meals JOIN meals ON datetimes_meals.meal = meals.id WHERE meals.user = " . $user_id ." GROUP BY DATE(date_time) ORDER BY DATE(date_time) DESC;");
    }

    static public function get_meal_id($meal) {
        return self::find_by_sql_single("SELECT id FROM meals WHERE name = '" . $meal . "';");
    }

    static public function add_new_meal($meal, $user_id) {
        self::run_sql("INSERT INTO meals(name, user) VALUES ('" . $meal ."', '" . $user_id . "');");
    }

    static public function add_datetime_meal($date_time, $meal_id) {
        self::run_sql("INSERT INTO datetimes_meals(date_time, meal) VALUES ('" . $date_time ."', '". $meal_id . "');");
    }

}