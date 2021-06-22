<?php
include_once "../master/index.php";
include_once "../autoload.php";

require_once $BASE_URL . "/models/Brand.php";
require_once $BASE_URL . "/models/Kategori.php";
require_once $BASE_URL . "/models/Admin.php";
?>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Inputs</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Kategori</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Add</li>
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
                                <h4 class="card-title">Input Kategori</h4>
                                <form action="process/add-process.php" method="POST" enctype="multipart/form-data" class="mt-3 form-horizonta">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Kode Produk</label>
										<div class="col-sm-8 form-group">
											<input type="text" class="form-control" name="kode_prod" placeholder="Kode">
										</div>
										<div class="input-group ml-2 mb-3 mr-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload Foto Produk</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"  name="foto_prod" accept="image/*">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        <label class="col-sm-4 col-form-label">Nama Produk</label>
										<div class="col-sm-8 form-group">
											<input type="text" class="form-control" name="nama_prod" placeholder="Name">
										</div>
                                        <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Brand</label>
                                            <select class="col-sm-7 custom-select ml-3 mb-3" id="inlineFormCustomSelect" name="id_brand">
                                                <option selected disabled>Choose...</option>
                                                <?php
                                                    foreach($brand->all() as $data){
                                                        echo "<option value='$data[id_brand]'>$data[nama_brand]</option>";
                                                    }
                                                ?>
                                            </select>
                                            <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Kategori</label>
                                            <select class="col-sm-7 custom-select ml-3 mb-3" id="inlineFormCustomSelect" name="id_kategori">
                                                <option selected disabled>Choose...</option>
                                                <?php
                                                    foreach($kategori->all() as $data){
                                                        echo "<option value='$data[id_kategori]'>$data[nama_kategori]</option>";
                                                    }
                                                ?>
                                            </select>
                                            <label class="col-sm-4 col-form-label">Deskripsi</label>
                                            <div class="form-group">
                                                <textarea class="form-control ml-3" rows="3" placeholder="Deskripsi...." name="deskripsi"></textarea>
                                            </div>
                                            <label class="col-sm-4 col-form-label">Size</label>
                                            <div class="col-sm-8 form-group">
                                                <input type="text" class="form-control" name="size" placeholder="Baju: M,L,XL.. / Celana: Ukuran Lingkar Pinggang">
                                            </div>
										<input class="col-sm-4 btn btn-primary mt-3" type="submit" name="submit" value="Add Data">
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
