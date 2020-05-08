<?php


class Meal extends DatabaseObject
{
    static public function get_meals($user_id) {
        return self::find_by_sql("SELECT id, name FROM meals WHERE user = " . $user_id);
    }

    static public function get_meals_per_days($user_id) {
        return self::find_by_sql("SELECT CONCAT(dates.date, ' ', time), GROUP_CONCAT(meals.name SEPARATOR ';') FROM dates_meals JOIN dates ON dates_meals.date = dates.id JOIN meals ON dates_meals.meal = meals.id WHERE user = $user_id GROUP BY dates_meals.date");
    }

    static public function get_meal_id($meal) {
        return self::find_by_sql_single("SELECT id FROM meals WHERE name = '" . $meal . "';");
    }

    static public function add_new_meal_date($date_time, $meal, $user_id) {
        self::run_sql("CALL add_new_meal_date('$date_time', '$meal', $user_id)");
    }

    static public function add_meal_date($date_time, $meal_id) {
        self::run_sql("CALL add_meal_date('$date_time', $meal_id)");
    }

}