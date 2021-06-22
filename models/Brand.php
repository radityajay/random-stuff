<?php

require_once $BASE_URL . "/libraries/Model.php";

    class Brand extends Model{
        public $table = 'brand';
    }
    $brand = new Brand();
?>