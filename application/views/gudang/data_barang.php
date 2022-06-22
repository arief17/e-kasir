<!-- main-content -->
<div class="main-content app-content">

    <!-- container -->
    <div class="main-container container-fluid">

        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Tabel</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ <?= $title ?></span>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <!-- row -->
        <div class="row row-sm">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TRANSAKSI HARI INI</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white">RP.74.1200.000</h4>
                                    <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-up text-white"></i>
                                    <span class="text-white op-7"> +427</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TRANSAKSI MINGGU INI</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white">Rp.230.1700.000</h4>
                                    <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-down text-white"></i>
                                    <span class="text-white op-7"> -23.09%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">JUMLAH BARANG</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white">1.300</h4>
                                    <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-up text-white"></i>
                                    <span class="text-white op-7"> 52.09%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div class="">
                            <h6 class="mb-3 tx-12 text-white">TOTAL ASET</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div class="">
                                    <h4 class="tx-20 fw-bold mb-1 text-white">RP.820.5000.000</h4>
                                    <p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-down text-white"></i>
                                    <span class="text-white op-7"> -152.3</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                </div>
            </div>
        </div>
        <!-- row closed -->


        <!-- row opened -->
        <div class="row row-sm row-deck">
            <div class="col-md-12 col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title ?></h3>
                        <div class="pe-1 mb-xl-0">
                            <a type="button" class="btn btn-info me-2 btn-b" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8"><i class="mdi mdi-filter-variant"></i> Tambah Barang</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table border-top-0  table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        <th class="wd-3p border-bottom-0">#</th>
                                        <th class="wd-15p border-bottom-0">kd Barang</th>
                                        <th class="wd-15p border-bottom-0">nama barang</th>
                                        <th class="wd-20p border-bottom-0">merk</th>
                                        <th class="wd-15p border-bottom-0">satuan</th>
                                        <th class="wd-15p border-bottom-0">harga</th>
                                        <th class="wd-15p border-bottom-0">Gambar</th>
                                        <th class="wd-10p border-bottom-0 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($barang as $brg) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $brg->kd_barang ?></td>
                                            <td><?= $brg->nama_barang ?></td>
                                            <td><?= $brg->merk ?></td>
                                            <td><?= $brg->satuan ?></td>
                                            <td><?= number_format($brg->harga, 0, ',', '.'); ?></td>
                                            <td><?= $brg->gbr_barang ?></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger-gradient btn-sm"><i class="fe fe-trash-2"></i></a> |
                                                <a href="#" class="btn btn-primary-gradient btn-sm"><i class="fe fe-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /main-content -->

    <!-- Modal effects -->
    <div class="modal fade" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $date =  date('Y-m-d H:i:s');
                    ?>
                    <h6 class="modal-title">#Form Tambah Barang</h6><button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="card-body pt-0">
                        <form action="<?= site_url() ?>/master/tambah_barang" method="POST">
                            <div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Barang</label>
                                    <input class="form-control" value="<?= $kd_barang ?>" name="kd_barang" readonly type="text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Barang</label>
                                    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Barang" name="nama_barang"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Merk Barang</label>
                                    <input type="text" class="form-control col-sm-5" id="exampleInputPassword1" placeholder="Masukan Merk Barang" name="merk">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Satuan</label>
                                    <select name="satuan" id="#" class="form-control col-sm-4">
                                        <option value="Kg">Kg</option>
                                        <option value="Sachet">Sachet</option>
                                        <option value="Dus">Dus</option>
                                        <option value="Liter">Liter</option>
                                        <option value="Buah">Buah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input type="number" name="harga" class="form-control col-sm-5" id="exampleInputPassword1" placeholder="Masukan Harga Barang">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gambar</label>
                                    <input type="file" name="gbr_barang" class="form-control col-sm-5" id="exampleInputPassword1" placeholder="Masukan Nama Barang">
                                </div>
                                <!-- tanggal -->
                                <input type="hidden" value="<?= $date ?>" name="tanggal">
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-primary" type="submit">Simpan</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal effects-->