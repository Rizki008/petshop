<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $title ?></h4>
        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Bordered Table</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>No Telphone</th>
                                <th>Jumlah Produk Yang Dibeli</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($histori as $key => $value) { ?>
                                <tr>
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->nama ?></strong>
                                    </td>
                                    <td><?= $value->no_tlpn ?></td>
                                    <td><span class="badge bg-label-primary me-1"><?= $value->qty ?></span></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>
</div>

<hr class="my-5" />