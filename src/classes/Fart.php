<?php
require_once ("DatabaseObject.php");

class Fart extends DatabaseObject
{
    private $user_id, $date_time;

    function _construct($user_id) {
        $this->user_id = $user_id;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    public function set_current_date_time() {
        $this->date_time = date("Y-m-d H:i:s");
    }

    public function set_date_time($date_time) {
        $this->date_time = $date_time;
    }

    public function add_fart() {
        if(!empty($this->date_time)) {
            echo $this->date_time . " " . $this->user_id . " ";
            self::run_sql("CALL add_fart('$this->date_time', $this->user_id)");
        } else
            exit("Date time error");
    }
}