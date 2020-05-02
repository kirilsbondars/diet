<?php


class Meal extends DatabaseObject
{
    static public function get_meals() {
        return self::find_by_sql("SELECT id, name FROM meals");
    }

    static public function get_meals_per_days($user_id) {
        return self::find_by_sql("SELECT DATE(date_time) AS date, GROUP_CONCAT(meals.name SEPARATOR '; ') AS meals FROM datetimes_users_meals JOIN meals ON datetimes_users_meals.meal = meals.id WHERE user = " . $user_id ." GROUP BY DATE(date_time) ORDER BY DATE(date_time) DESC;");
    }

    static public function get_meal_id($meal) {
        return self::find_by_sql_single("SELECT id FROM meals WHERE name = '" . $meal . "';");
    }

    static public function add_new_meal($meal) {
        self::run_sql("INSERT INTO meals(name) VALUES ('" . $meal ."');");
    }

    static public function add_datetime_user_meal($date_time, $user_id, $meal_id) {
        self::run_sql("INSERT INTO datetimes_users_meals(date_time, user, meal) VALUES ('" . $date_time ."', '" . $user_id ."', '". $meal_id . "');");
    }

}