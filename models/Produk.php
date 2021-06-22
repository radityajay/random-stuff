<?php
require_once $BASE_URL . "/libraries/Model.php";

    class Produk extends Model{
        public $table = 'produk';

        public function withAll(){
            $sql = "SELECT produk.*, kategori.nama_kategori, brand.nama_brand, role.nama_role , admin.email FROM produk 
            JOIN kategori ON kategori.id_kategori = produk.id_kategori 
            JOIN brand ON brand.id_brand = produk.id_brand
            JOIN admin ON admin.id_admin = produk.id_admin
            JOIN role ON admin.id_role = role.id_role";
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
    $produk = new Produk();
?>