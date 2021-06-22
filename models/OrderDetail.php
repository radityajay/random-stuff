<?php

require_once $BASE_URL . "/libraries/Model.php";

    class OrderDetail extends Model{
        public $table = 'detail_order_list';

        public function withAll(){
            $sql = "SELECT detail_order_list.*, order_list.*, inventaris.*, produk.*, customer.*, brand.nama_brand, kategori.* FROM detail_order_list 
            JOIN order_list ON order_list.id_order = detail_order_list.id_order 
            JOIN customer ON customer.id_cust = order_list.id_cust
            JOIN inventaris ON inventaris.id_inventaris = detail_order_list.id_inventaris
            JOIN produk ON produk.id_prod = inventaris.id_prod
            JOIN brand ON brand.id_brand = produk.id_brand
            JOIN kategori ON kategori.id_kategori = produk.id_kategori";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }

        
        
    }
    $orderDetail = new OrderDetail();
?>