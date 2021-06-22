<?php
include_once "../master/index.php";
include_once "../autoload.php";

require_once $BASE_URL . "/models/Produk.php";
require_once $BASE_URL . "/models/Vendor.php";
require_once $BASE_URL . "/models/Store.php";
require_once $BASE_URL . "/models/Inventaris.php";

if(is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $data = $inventaris->where('id_inventaris', $id);
    if(count($data) == 0){
        header('location: index.php');
    }
}
else{
    header('location: index.php');
}
?>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Update</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Inventaris</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Update</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Inventaris</h4>
                                <form action="process/edit-process.php" method="POST" enctype="multipart/form-data" class="mt-3 form-horizonta">
                                <input type="hidden" name="id" value="<?= $data['id_inventaris'] ?>">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Nama Produk</label>
                                            <select class="col-sm-7 custom-select ml-3 mb-3" id="inlineFormCustomSelect" name="id_prod">
                                                <option selected disabled>Choose...</option>
                                                <?php
                                                    foreach($produk->all() as $data_prod){
                                                        if($data['id_prod'] == $data_prod['id_prod']){
                                                            echo "<option value='$data_prod[id_prod]' selected>#$data_prod[kode_prod] - $data_prod[nama_prod] (Size:$data_prod[size])</option>";
                                                        }
                                                        else{
                                                            echo "<option value='$data_prod[id_prod]'>#$data_prod[kode_prod] - $data_prod[nama_prod] (Size:$data_prod[size])</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Vendor</label>
                                            <select class="col-sm-7 custom-select ml-3 mb-3" id="inlineFormCustomSelect" name="id_vendor">
                                                <option selected disabled>Choose...</option>
                                                <?php
                                                    foreach($vendor->all() as $data_vendor){
                                                        if($data['id_vendor'] == $data_vendor['id_vendor']){
                                                            echo "<option value='$data_vendor[id_vendor]' selected>$data_vendor[nama_vendor]</option>";
                                                        }
                                                        else{
                                                            echo "<option value='$data_vendor[id_vendor]'>#$data_vendor[nama_vendor]</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                            <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Store</label>
                                            <select class="col-sm-7 custom-select ml-3 mb-3" id="inlineFormCustomSelect" name="id_store">
                                                <option selected disabled>Choose...</option>
                                                <?php
                                                    foreach($store->all() as $data_store){
                                                        if($data['id_store'] == $data_store['id_store']){
                                                            echo "<option value='$data_store[id_store]' selected>$data_store[nama_store]</option>";
                                                        }
                                                        else{
                                                            echo "<option value='$data_store[id_store]'>#$data_store[nama_store]</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                            <label class="col-sm-4 col-form-label">Stok</label>
                                            <div class="col-sm-8 form-group">
                                                <input type="number" class="form-control" placeholder="1" name="stok" value="<?= $data['stok'] ?>">
                                            </div>
                                            <label class="col-sm-4 col-form-label">Harga</label>
                                            <div class="col-sm-8 form-group">
                                                <input type="number" class="form-control" placeholder="5000" name="harga" value="<?= $data['harga'] ?>">
                                            </div>
										<input class="col-sm-4 btn btn-primary mt-3" type="submit" name="submit" value="Update Data">
									</div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
</div>
