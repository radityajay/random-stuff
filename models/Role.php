<?php

require_once $BASE_URL . "/libraries/Model.php";

    class Role extends Model{
        public $table = 'role';
    }
    $role = new Role();
?>