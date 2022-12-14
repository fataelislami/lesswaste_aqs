<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Sedekah Sampah</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">Rekap bulanan sedekah sampah <?= bulan($month) ?> tahun <?= $year?></p>
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table zero-configuration dataTable" id="monthly" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>No HP</th>
                                                    <th>Email</th>
                                                    <th>Total Berat</th>
                                                    <th>Kontribusi Bulan Ini</th>
                                                    <th>Kirim Notifikasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($tableData->num_rows()>0){?>
                                                <?php $i=1;?>
                                                <?php foreach($tableData->result() as $key){?>
                                                <tr role="row" class="odd">
                                                    <td><?= $i?></td>
                                                    <td><?= $key->name?></td>
                                                    <td><?= $key->phone?></td>
                                                    <td><?= $key->email?></td>
                                                    <td><?= $key->total_weight?> gram</td>
                                                    <td><?= $key->total_data?> kali</td>
                                                    <td><a target="_blank" href="https://wa.me/<?= phone($key->phone) ?>?text=Assalamualaikum+Less+Wasters+%21%0D%0AHai+kak+<?= $key->name?>%0D%0ATerima+kasih+masih+setia+untuk+bersedekah+sampah+di+Bulan+<?= bulan($month)?>+ini+bersama+Aqsyanna+Less+Waste%0D%0A%0D%0ABulan+ini+kamu+berhasil+mengumpulkan+sampah+sebanyak+<?= (float)$key->total_weight?>+gram%0D%0A%0D%0AKami+ucapkan+jazakallah+khairan%2C+terima+kasih+banyak+kepada+kak+Nama+yang+sudah+istiqamah+dalam+kebaikan.%0D%0A%0D%0AJadilah+agen+perubahan%2C+mari+ubah+sampah+menjadi+sedekah..%21+Bersihkan+lingkungan%2C+dapatkan+keberkahan..%21%0D%0A%0D%0A%23SedekahSampahKeAqsyannaAja" class="btn btn-primary"><i class="fa fa-whatsapp"></i> Whatsapp</a></td>
                                                </tr>
                                                <?php $i++?>
                                                <?php }?>
                                                <?php }else{?>
                                                <tr>
                                                    <td>Belum ada data</td>
                                                </tr>
                                                <?php }?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>