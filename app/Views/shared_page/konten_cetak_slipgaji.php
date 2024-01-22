<?=
$this->include('shared_page/header_print');
$total_pendapatan = $data->gapok + $data->tfungsional + $data->pdlain + $data->insentif + $data->lembur + $data->umakan;
$total_potongan = $data->bpjs_ketenagakerjaan + $data->bpjs_kesehatan + $data->bpjs_pensiun + $data->pot_lain;
?>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col text-right">
                <?php if ($opsi == 'cetak') : ?>
                    <button type="button" class="btn btn-sm btn-danger" onclick="window.print()">
                        <i class="fa fa-print mr-2"></i>Print
                    </button>
                <?php endif ?>
            </div>
        </div>
        <div class="kop">
            <image src="/assets/dist/img/<?= $seting->logo_slip_gaji ?>" width="375">
                <hr>
        </div>
        <h4 class="text-center mb-3"><i>Slip Gaji Karyawan</i></h4>
        <div class="row">
            <div class="col-sm-1"><label>Nama</label></div>
            <div class="col-sm-8"><label> : <?= $data->nama_karyawan ?></label></div>
        </div>
        <div class="row">
            <div class="col-sm-1"><label>NIK</label></div>
            <div class="col-sm-8"><label> : <?= $data->nik ?></label></div>
        </div>
        <div class="row">
            <div class="col-sm-1"><label>Jabatan</label></div>
            <div class="col-sm-8"><label> : <?= $data->jabatan ?></label></div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-1"><label>Periode</label></div>
            <div class="col-sm-8"><label> : <?= $data->periode_bln . ' ' . $data->periode_thn ?></label></div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h6 class="text-center bg-indigo py-2">PENGHASILAN</h6>
                <div class="row">
                    <div class="col-sm-6"><label>Gaji Pokok</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->gapok, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>Uang Makan</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->umakan, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>Tunjangan Fungsional</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->tfungsional, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>Insentif</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->insentif, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>Pendapatan Lain-lain</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->pdlain, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>Lembur</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->lembur, 0, ',', '.') ?></div>
                </div>
            </div>
            <div class="col-sm-6">
                <h6 class="text-center bg-indigo py-2">POTONGAN</h6>
                <div class="row">
                    <div class="col-sm-6"><label>BPJS Ketenagakerjaan</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->bpjs_ketenagakerjaan, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>BPJS Kesehatan</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->bpjs_kesehatan, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>BPJS Pensiun</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->bpjs_pensiun, 0, ',', '.') ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><label>Potongan Lain-lain</label></div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right"><?= number_format($data->pot_lain, 0, ',', '.') ?></div>
                </div>
            </div>
        </div>
        <hr class="mb-0">
        <div class="row pt-1 my-0">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <label><b>Total</b></label>
                    </div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right">
                        <label><b><?= number_format($total_pendapatan, 0, ',', '.') ?></b></label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <label><b>Total</b></label>
                    </div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right">
                        <label><b><?= number_format($total_potongan, 0, ',', '.') ?></b></label>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-0">
        <div class="row pt-0 my-0">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <label><b>Total Penerimaan</b></label>
                    </div>
                    <div class="col-sm-2">Rp </div>
                    <div class="col-sm-3 text-right">
                        <label><b><?= number_format($data->total, 0, ',', '.') ?></b></label>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-0">
        <br /><br />
        Surabaya, <?= $data->periode_bln . ' ' . $data->periode_thn ?><br />
        Finance, <br /><br /><br />


        -----------------
    </div>
</body>