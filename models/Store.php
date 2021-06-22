<?php

require_once $BASE_URL . "/libraries/Model.php";

    class Store extends Model{
        public $table = 'store';

        public function withVendor(){
            $sql = "SELECT store.*, vendor.nama_vendor, produk.nama_prod FROM store 
                    INNER JOIN vendor
                    ON vendor.id_vendor = store.id_vendor
                    INNER JOIN produk
                    ON produk.id_prod = vendor.id_prod";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll();
            return $rows;
        }
    }
    $store = new Store();
?>