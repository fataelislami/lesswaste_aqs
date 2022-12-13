<section class="card">
    <div class="card-header">
        <h4 class="card-title">Edit users</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form method="post" action="<?php echo base_url().$action ?>" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">id</label>
                    <div class="col-sm-10">
                        <input type="text" name="id" class="form-control" placeholder=""
                            value="<?php echo $dataedit->id?>" readonly>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="<?php echo $dataedit->name?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="gender" id="" class="form-control">
                          <option value="male" <?= ($dataedit->gender=='male'?"selected":"")?>>Laki-laki</option>
                          <option value="female" <?= ($dataedit->gender=='female'?"selected":"")?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" value="<?php echo $dataedit->email?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea  name="address" class="form-control"><?php echo $dataedit->address?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" value="<?php echo $dataedit->phone?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Instansi</label>
                    <div class="col-sm-10">
                        <input type="text" name="institute" class="form-control"
                            value="<?php echo $dataedit->institute?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <select name="role" id="" class="form-control">
                          <option value="1" <?= ($dataedit->role=='1'?"selected":"")?>>Admin</option>
                          <option value="2" <?= ($dataedit->role=='2'?"selected":"")?>>Lesswaster</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" name="password" class="form-control"
                            value="">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">created_on</label>
                    <div class="col-sm-10">
                        <input type="text" name="created_on" class="form-control"
                            value="<?php echo $dataedit->created_on?>" disabled>
                    </div>
                </div>
               
        </div>
        <input type="hidden" id="deleteFiles" name="deleteFiles">
        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect
           waves-light float-right">Simpan</button>
        </div>
        </form>
    </div>
</section>