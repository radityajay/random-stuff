<?php

require_once $BASE_URL . "/libraries/Model.php";

    class Customer extends Model{
        public $table = 'customer';
    }
    $customer = new Customer();
?>