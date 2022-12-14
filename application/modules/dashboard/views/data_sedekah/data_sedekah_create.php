<div class="row">
    <div class="col-md-5">
        <section class="card">
            <div class="card-content">
                <div class="card-header">
                  <h5 class="">Scan QR</h5>
                    <h5 class="primary">Step 1</h5>
                </div>
                <div class="card-body">
                    <div id="qr-reader" style="width:100%;"></div>
                    <div id="qr-reader-results"></div>
                </div>
            </div>
        </section>
        <div class="divider">
            <div class="divider-text">atau</div>
        </div>
        <section class="card">
            <div class="card-content">
            <div class="card-header">
                  <h5 class="">Masukan no hp</h5>
                </div>
                <div class="card-body">
                    <input type="text" name="phone" placeholder="cth: 0897xxxx" id="phone" class="form-control">

                </div>
            </div>
        </section>
    </div>
    <div class="col-md-7">
        <section class="card">
        <div class="card-header">
                  <h5 class="">Input Sedekah</h5>
                    <h5 class="primary">Step 2</h5>
                </div>

            <div class="card-content">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="lesswaster" class="form-control" readonly>

                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Instansi</label>
                            <div class="col-sm-10">
                                <input type="text" name="institute" id="institute" class="form-control" readonly>

                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Input</label>
                            <div class="col-sm-10">
                                <input type="date" name="input_date" class="form-control" value="<?= date("Y-m-d")?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" style="display: flex;align-items: center;">Berat <span style="font-size: 10px; margin-left: 2px;">(gram)</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="weight" placeholder="cth: 1000/300/55.3" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <input type="text"  placeholder="cth: plastik/beling/kardus/dll" name="type" class="form-control">
                            </div>
                        </div>
                        <input type="hidden" name="users_id" id="users_id" class="form-control">


                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
                </div>
                </form>
            </div>
        </section>
    </div>

</div>