<ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Category
                            <i class="fa fa-fw fa-chevron-circle-down mt-1 me-5"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <?php
                                foreach($kategori->all() as $data){
                            ?>
                            <li><a class="text-decoration-none" href="kategori.php?id=<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></a></li>
                            <!-- <li><a class="text-decoration-none" href="#">Women</a></li> -->
                            <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Brand
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1 me-5"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <?php
                                foreach($brand->all() as $data){
                            ?>
                            <li><a class="text-decoration-none" href="brand.php?id=<?= $data['id_brand'] ?>"><?= $data['nama_brand'] ?></a></li>
                            <!-- <li><a class="text-decoration-none" href="#">Women</a></li> -->
                            <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Store
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1 me-5"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <?php
                                foreach($store->all() as $data){
                            ?>
                            <li><a class="text-decoration-none" href="store.php?id=<?= $data['id_store'] ?>"><?= $data['nama_store'] ?><br><p><?= $data['alamat_store'] ?></p></a></li>
                            <!-- <li><a class="text-decoration-none" href="#">Women</a></li> -->
                            <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Vendor
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1 me-5"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <?php
                                foreach($vendor->all() as $data){
                            ?>
                            <li><a class="text-decoration-none" href="vendor.php?id=<?= $data['id_vendor'] ?>"><?= $data['nama_vendor'] ?></a></li>
                            <!-- <li><a class="text-decoration-none" href="#">Women</a></li> -->
                            <?php
                                }
                            ?>
                        </ul>
                    </li>
                </ul>