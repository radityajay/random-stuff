<?php
include_once "../master/index.php";
include_once "../autoload.php";
require_once $BASE_URL . "/models/Role.php";
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
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Admin</a></li>
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
                                <h4 class="card-title">Input Admin</h4>
                                <form action="process/add-process.php" method="POST" class="mt-3 form-horizonta">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8 form-group">
                                                <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                                            </div>
                                        <label class="col-sm-4 col-form-label">Password</label>
                                            <div class="col-sm-8 form-group">
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                        <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Role</label>
                                            <select class="col-sm-8 custom-select" id="inlineFormCustomSelect" name="id_role">
                                                <option selected disabled>Choose...</option>
                                                <?php
                                                    foreach($role->all() as $data){
                                                        echo "<option value='$data[id_role]'>$data[nama_role]</option>";
                                                    }
                                                ?>
                                            </select>
										<input class="btn btn-primary" type="submit" name="submit" value="Add Data">
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
