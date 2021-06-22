<?php

require_once $BASE_URL . "/libraries/Model.php";

    class Vendor extends Model{
        public $table = 'vendor';
    }
    $vendor = new Vendor();
?>