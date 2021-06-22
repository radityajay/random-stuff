<?php

require_once $BASE_URL . "/libraries/Model.php";

    class OrderList extends Model{
        public $table = 'order_list';

        public function withId(){
            $sql = "SELECT * FROM order_list WHERE id_order = id_order";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll();
            return $rows;
        }

        public function withDetail($id){
            $sql = "SELECT order_list.*, detail_order_list.*, inventaris.*, produk.nama_prod, customer.*, brand.nama_brand, kategori.nama_kategori FROM order_list 
            JOIN detail_order_list ON detail_order_list.id_order = order_list.id_order 
            JOIN customer ON customer.id_cust = order_list.id_cust
            JOIN inventaris ON inventaris.id_inventaris = detail_order_list.id_inventaris
            JOIN produk ON produk.id_prod = inventaris.id_prod
            JOIN brand ON brand.id_brand = produk.id_brand
            JOIN kategori ON kategori.id_kategori = produk.id_kategori
            WHERE order_list.id_order = $id";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        }

        // public function topProd(){
        //     $sql = "SELECT order_list.* ,detail_order_list.*, inventaris.*, produk.* FROM order_list 
        //     JOIN detail_order_list ON detail_order_list.id_order = order_list.id_order 
        //     JOIN inventaris ON inventaris.id_inventaris = detail_order_list.id_inventaris 
        //     JOIN produk ON produk.id_prod = inventaris.id_prod WHERE order_list.id_order ORDER BY total_item DESC LIMIT 20";
        //     $query = $this->conn->query($sql);
        //     $rows = $query->fetchAll(PDO::FETCH_OBJ);
        //     return $rows;
        // }

        // public function updateStatus($id){
        //     $sql = "UPDATE ". $this->$table ." SET status='Pengiriman' WHERE id_order = $id";
        //     $query = $this->conn->query($sql);
	    //     $rows = mysqli_fetch_assoc($query);
            
        //     // $rows = $query->fetchAll();
        //     return $rows;
        // }
        // $sql="select * from barang where id_barang=$id_barang";
	
	// $hasil=mysqli_query($kon,$sql);
    }
    $orderList = new OrderList();
?>