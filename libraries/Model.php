<?php
require_once "Database.php";
    class Model extends Database{
        public function all(){
            $sql = "SELECT * FROM " . $this->table;
            $query = $this->conn->query($sql);

            $rows = $query->fetchAll();
            return $rows;
        }

        public function where($column, $value){
            $sql = "SELECT * FROM " . $this->table . " WHERE $column = '$value'" ;
            $query = $this->conn->query($sql);

            if($query->rowCount() == 1){
                return $query->fetch(); 
            }
            else{
                return [];
            }
        }

        public function whereInven($column, $value){
            $sql = "SELECT inventaris.*, produk.nama_prod, produk.deskripsi, produk.foto_prod, vendor.nama_vendor, store.nama_store, brand.*, kategori.* FROM " . $this->table . " JOIN produk ON produk.id_prod = inventaris.id_prod 
            JOIN vendor ON vendor.id_vendor = inventaris.id_vendor
            JOIN store ON store.id_store = inventaris.id_store
            JOIN brand ON brand.id_brand = produk.id_brand
            JOIN kategori ON kategori.id_kategori = produk.id_kategori WHERE $column = '$value'" ;
            $query = $this->conn->query($sql);

            if($query->rowCount() == 1){
                return $query->fetch(); 
            }
            else{
                return [];
            }
        }

        public function delete($column, $value){
            $sql = "DELETE FROM " . $this->table . " WHERE $column = '$value'" ;
            $query = $this->conn->query($sql);

            if($query){
                return true;
            }
            else{
                return false;
            }
        }

        public function insert($data){
            $sql = "INSERT INTO " . $this->table . " (";

            $index = 1;
            foreach($data as $key => $val){
                $sql .= $key;
                
                if(count($data) > $index){
                    $sql .= ", ";
                    $index++;
                }
                else{
                    $sql .= ") VALUES (";
                }
            }

            $index = 1;
            foreach($data as $key => $val){
                $sql .= "'$val'";
                
                if(count($data) > $index){
                    $sql .= ", ";
                    $index++;
                }
                else{
                    $sql .= ")";
                }
            }

            $query = $this->conn->query($sql);

            if($query){
                return true;
            }
            else{
                return false;
            }
        }

        // public function insertData($data){
        //     $sql = "INSERT INTO " . $this->table . " (";

        //     $index = 1;
        //     foreach($data as $key => $val){
        //         $sql .= $key;
                
        //         if(count($data) > $index){
        //             $sql .= ", ";
        //             $index++;
        //         }
        //         else{
        //             $sql .= ") VALUES (";
        //         }
        //     }

        //     $index = 1;
        //     foreach($data as $key => $val){
        //         $sql .= "'$val'";
                
        //         if(count($data) > $index){
        //             $sql .= ", ";
        //             $index++;
        //         }
        //         else{
        //             $sql .= ")";
        //         }
        //     }

        //     $result = $this->conn->query($sql);
        //     $id = mysqli_insert_id($conn);
        //     if($result){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }

        public function update($data, $column, $value){
            $sql = "UPDATE " . $this->table . " SET ";

            $index = 1;
            foreach($data as $key => $val){
                $sql .= "$key = '$val'";
                
                if(count($data) > $index){
                    $sql .= ", ";
                    $index++;
                }
            }

            $sql .= " WHERE $column = '$value'";

            $query = $this->conn->query($sql);

            if($query){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateStatus($id){
            $sql = "UPDATE ". $this->table ." SET status='Pengiriman' WHERE id_order = $id";
            $query = $this->conn->query($sql);
	        $rows = mysqli_fetch_assoc($query);
            
            // $rows = $query->fetchAll();
            return $rows;
        }

        public function callProcedure($name){
            $sql = "CALL " . $name;

            $query = $this->conn->query($sql);

            $rows = $query->fetch();
            return $rows['total'];
        }

    }
?>