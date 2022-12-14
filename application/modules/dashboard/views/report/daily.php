<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Sedekah Sampah</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">Laporan sedekah sampah bulan <?= bulan($month) ?> tahun <?= $year?></p>
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table zero-configuration dataTable" id="monthly" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Total Berat</th>
                                                    <th>Total Input Data</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($tableData->num_rows()>0){?>
                                                <?php $i=1;?>
                                                <?php foreach($tableData->result() as $key){?>
                                                <tr role="row" class="odd">
                                                    <td><?= $i?></td>
                                                    <td><?= $key->input_date?></td>
                                                    <td><?= (float)$key->total_weight?> gram</td>
                                                    <td><?= $key->total_data?></td>
                                                    <td><a href="<?= base_url()?>dashboard/report/list?date=<?= $key->input_date?>" class="btn btn-primary">Lihat Data</a></td>
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