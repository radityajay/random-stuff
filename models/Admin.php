<?php

require_once $BASE_URL . "/libraries/Model.php";

    class Admin extends Model{
        public $table = 'admin';

        public function withRole(){
            $sql = "SELECT admin.*, role.nama_role FROM admin INNER JOIN role ON role.id_role = admin.id_role";
            $query = $this->conn->query($sql);
            $rows = $query->fetchAll();
            return $rows;
        }
    }
    $admin = new Admin();
?>