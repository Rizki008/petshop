<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> <?= $title ?></h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Laporan</h5>
                        <small class="text-muted float-end">Pertanggal</small>
                    </div>
                    <div class="card-body">
                        <?php
                        echo form_open('pemilik/lap_harian') ?>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Tanggal</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <select name="tanggal" class="form-control">
                                    <?php
                                    $mulai = 1;
                                    for ($i = $mulai; $i < $mulai + 31; $i++) {
                                        $sel = $i == date('Y') ? 'selected="selected"' : '';
                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Bulan</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <select name="bulan" class="form-control">
                                    <?php
                                    $mulai = 1;
                                    for ($i = $mulai; $i < $mulai + 12; $i++) {
                                        $sel = $i == date('Y') ? 'selected="selected"' : '';
                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Tahun</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <select name="tahun" class="form-control">
                                    <?php
                                    $mulai = date('Y') - 1;
                                    for ($i = $mulai; $i < $mulai + 10; $i++) {
                                        $sel = $i == date('Y') ? 'selected="selected"' : '';
                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Lihat Laporan</button>
                        <?php
                        echo form_close() ?>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Laporan</h5>
                        <small class="text-muted float-end">Perbulan</small>
                    </div>
                    <div class="card-body">
                        <?php
                        echo form_open('pemilik/lap_bulanan') ?>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <select name="bulan" class="form-control">
                                    <?php
                                    $mulai = 1;
                                    for ($i = $mulai; $i < $mulai + 12; $i++) {
                                        $sel = $i == date('Y') ? 'selected="selected"' : '';
                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-company">Company</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <select name="tahun" class="form-control">
                                    <?php
                                    $mulai = date('Y') - 1;
                                    for ($i = $mulai; $i < $mulai + 10; $i++) {
                                        $sel = $i == date('Y') ? 'selected="selected"' : '';
                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Lihat laporan</button>
                        <?php
                        echo form_close() ?>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Laporan</h5>
                        <small class="text-muted float-end">Pertahun</small>
                    </div>
                    <div class="card-body">
                        <?php
                        echo form_open('pemilik/lap_tahunan') ?>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Tahun</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <select name="tahun" class="form-control">
                                    <?php
                                    $mulai = date('Y') - 1;
                                    for ($i = $mulai; $i < $mulai + 10; $i++) {
                                        $sel = $i == date('Y') ? 'selected="selected"' : '';
                                        echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Lihat Laporan</button>
                        <?php
                        echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->