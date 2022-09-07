<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $title ?></h4>
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <h5 class="card-header">
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>No Transaksi</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $no = 1;
                        $grand_total = 0;
                        foreach ($laporan as $key => $value) {
                            $tot_harga = $value->qty * $value->harga;
                            $grand_total = $grand_total + $tot_harga
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->nama_produk ?></td>
                                <td><?= $value->no_order ?></td>
                                <td>Rp.<?= number_format($value->harga, 0) ?></td>
                                <td><?= $value->qty ?></td>
                                <td>Rp.<?= number_format($tot_harga) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                <table class="table">
                    <tbody class="table-border-bottom-0">
                        <h3>Grand Total : Rp. <?= number_format($grand_total, 0) ?> </h3>
                    </tbody>
                </table>
            </div>
            <div class="row no-print">
                <div class="col-12">
                    <button class="btn btn-default" onclick="window.print()"><i class='bx bxs-printer'></i> Print</button>
                    <a href="<?php echo base_url("laporan/export"); ?>"><i class="bx bxs-download"></i> Export ke Excel</a>
                </div>
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
</div>

<hr class="my-5" />