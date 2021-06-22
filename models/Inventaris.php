<?php
require_once $BASE_URL . "/libraries/Model.php";

    class Inventaris extends Model{
        public $table = 'inventaris';

        public function withAll(){
            $sql = "SELECT inventaris.*, produk.*, vendor.nama_vendor, store.nama_store, store.alamat_store, brand.*, kategori.* FROM inventaris 
            JOIN produk ON produk.id_prod = inventaris.id_prod 
            JOIN vendor ON vendor.id_vendor = inventaris.id_vendor
            JOIN store ON store.id_store = inventaris.id_store
            JOIN brand ON brand.id_brand = produk.id_brand
            JOIN kategori ON kategori.id_kategori = produk.id_kategori";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll();
            return $rows;
        }

        public function whereAll($column, $value){//gak kepakeek
            $sql = "SELECT inventaris.*, produk.*, vendor.nama_vendor, store.nama_store, brand.*, kategori.* FROM inventaris 
            JOIN produk ON produk.id_prod = inventaris.id_prod 
            JOIN vendor ON vendor.id_vendor = inventaris.id_vendor
            JOIN store ON store.id_store = inventaris.id_store
            JOIN brand ON brand.id_brand = produk.id_brand
            JOIN kategori ON kategori.id_kategori = produk.id_kategori
            WHERE $column = '$value'";

            $query = $this->conn->query($sql);

            $rows = $query->fetchAll();
            return $rows;
        }

        public function withDetail($id){
            $sql = "SELECT inventaris.*, produk.*, vendor.nama_vendor, store.nama_store, brand.*, kategori.* FROM inventaris 
            JOIN produk ON produk.id_prod = inventaris.id_prod 
            JOIN vendor ON vendor.id_vendor = inventaris.id_vendor
            JOIN store ON store.id_store = inventaris.id_store
            JOIN brand ON brand.id_brand = produk.id_brand
            JOIN kategori ON kategori.id_kategori = produk.id_kategori
            WHERE inventaris.id_inventaris = $id";

            $query = $this->conn->query($sql);

            $rows = $query->fetchAll();
            return $rows;
        }

        public function topProd(){
            $sql = "SELECT inventaris.* ,SUM(jumlah) AS jumlahni,detail_order_list.*, order_list.*, produk.* FROM inventaris 
            JOIN detail_order_list ON detail_order_list.id_inventaris = inventaris.id_inventaris 
            JOIN order_list ON order_list.id_order = detail_order_list.id_order 
            JOIN produk ON produk.id_prod = inventaris.id_prod 
            WHERE detail_order_list.id_inventaris GROUP BY detail_order_list.id_inventaris ORDER BY jumlahni DESC LIMIT 20";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll();
            return $rows;
        }
        public function topStore(){
            $sql = "SELECT inventaris.* ,SUM(jumlah),detail_order_list.*, order_list.*, produk.* , store.* FROM inventaris
            JOIN store ON store.id_store = inventaris.id_store 
            JOIN detail_order_list ON detail_order_list.id_inventaris = inventaris.id_inventaris 
            JOIN order_list ON order_list.id_order = detail_order_list.id_order 
            JOIN produk ON produk.id_prod = inventaris.id_prod WHERE inventaris.id_store GROUP BY inventaris.id_store ORDER BY jumlah DESC LIMIT 5";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll();
            return $rows;
        }
        public function topKategori(){
            $sql = "SELECT inventaris.* ,SUM(jumlah) AS jumlahtot,detail_order_list.*, order_list.*, produk.* ,kategori.* FROM inventaris 
            JOIN detail_order_list ON detail_order_list.id_inventaris = inventaris.id_inventaris 
            JOIN order_list ON order_list.id_order = detail_order_list.id_order 
            JOIN produk ON produk.id_prod = inventaris.id_prod
            JOIN kategori ON kategori.id_kategori = produk.id_kategori WHERE produk.id_kategori GROUP BY produk.id_kategori ORDER BY jumlahtot DESC LIMIT 3";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll();
            return $rows;
        }

        public function whereAnd($column, $value, $column2, $value2){
            $sql = "SELECT * FROM " . $this->table . " WHERE $column = '$value' AND $column2 >= '$value2'" ;
            $query = $this->conn->query($sql);

            if($query->rowCount() == 1){
                return $query->fetch(); 
            }
            else{
                return [];
            }
        }
    }
    $inventaris = new Inventaris();
?>