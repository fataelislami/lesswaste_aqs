<section class="card">
    <div class="card-header">
        <h4 class="card-title">Edit data_sedekah</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="<?php echo $dataedit->name?>"
                            readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Input</label>
                    <div class="col-sm-10">
                        <input type="date" name="input_date" class="form-control"
                            value="<?php echo $dataedit->input_date?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type="text" name="weight" class="form-control" value="<?php echo $dataedit->weight?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <input type="text" name="type" class="form-control" value="<?php echo $dataedit->type?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">created_on</label>
                    <div class="col-sm-10">
                        <input type="text" name="created_on" class="form-control"
                            value="<?php echo $dataedit->created_on?>" disabled>
                    </div>
                </div>
                <input type="hidden" name="id" class="form-control" placeholder="" value="<?php echo $dataedit->id?>">
                <input type="hidden" name="users_id" class="form-control" placeholder="" value="<?php echo $dataedit->users_id?>">



        </div>
        <input type="hidden" id="deleteFiles" name="deleteFiles">
        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
        </form>
    </div>
</section>