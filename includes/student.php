<?php

class Student extends Base {
    protected static $db_table = "info";
    protected static $db_table_fields = array('name', 'address');

    public $id, $name, $address;

    public function save_student()
    {
        if($this->id)
        {
            $this->update();
        }
        else {
            $this->create();
        }
    }
}

?>
