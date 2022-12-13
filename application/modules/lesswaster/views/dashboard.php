<section id="dashboard-analytics">
    <div class="row">
       <div class="col-md-3 col-12">
          <div class="card">
            <img src="<?= base_url()?>lesswaster/qrcode" alt="">
          </div>
       </div>
        <div class="col-md-9 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1 mb-25"><?= $data_riwayat->num_rows()?></h2>
                    <p class="mb-0">Total Item Sedekah</p>
                </div>
                <div class="card-content">
                    <div id="orders-received-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-md-12">
       <div class="card">
        <div class="card-header">
          <h4 class="mb-0">Riwayat Donasi</h4>
        </div>
        <div class="card-content">
          <div class="table-responsive mt-1">
            <table class="table table-hover-animation mb-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>ADMIN</th>
                  <th>JENIS</th>
                  <th>BERAT</th>
                  <th>SERAH TERIMA</th>
                  <th>TANGGAL VERIFIKASI</th>
                </tr>
              </thead>
              <tbody>
                <?php if($data_riwayat->num_rows()>0){?>
                  <?php foreach($data_riwayat->result() as $key){?>
                    <tr>
                  <td>#AQS-<?= $key->id?></td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="<?= base_url()?>assets/avatar.jpeg" alt="Avatar" height="30" width="30">
                      </li>
                      
                    </ul>
                  </td>
                  <td><?= $key->type?></td>
                  <td>
                    <span><?= $key->weight?> Gram</span>
                    
                  </td>
                  <td><?= $key->input_date?></td>
                  <td><?= $key->created_on?></td>
                </tr>
                    <?php }?>
                <?php }?>
                
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
       </div>
    </div>
</section>
<!-- Dashboard Analytics end -->