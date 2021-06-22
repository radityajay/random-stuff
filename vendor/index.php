<?php
	include_once "../master/index.php";

	require_once "../autoload.php";
    require_once $BASE_URL . "/models/Vendor.php";
?>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Vendor</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../dashboard/index.php" class="text-muted">Dashboard</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Vendor</li>
                                </ol>
                            </nav>
                        </div>
                        <div>
						    <div class="btn-google docs-homescreen-fab" >
                                <a class="white" href="add.php">
                                    <span class="add-data" data-feather="plus" width="50px" height="50px"></span>
                                </a>
                            </div>
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
                <!-- order table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Vendor</h4>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered display no-wrap"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											foreach($vendor->all() as $data){
												?>
													<tr>
														<td><?= $data['nama_vendor'] ?></td>
														<td>
															<a class="btn btn-warning" href="edit.php?id=<?= $data['id_vendor'] ?>">Edit</a>
                                                            <a class="btn btn-danger" href="delete.php?id=<?= $data['id_vendor'] ?>">Delete</a>
														</td>
													</tr>
												<?php
											}
										?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- multi-column ordering -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
            &copy Random Stuff . All Rights Reserved. <br> Designed and Developed by <span class="badge badge-primary">Tiga Sekawan</span>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!--This page plugins -->
	<script src="../bootstrap/assets/extra-libs/datatables.net/js/jquery.dataTables.js"></script>
    <script src="../bootstrap/dist/js/pages/datatable/datatable-basic.init.js"></script>