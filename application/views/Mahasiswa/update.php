<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Halaman Update Data</h5>
                <?php if(validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                    <?=validation_errors(); ?>
                    </div>
                <?php endif;?>    
                <form action="" method="post">
          
                    <div class="mb-3">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $detail['id'];?>">
                    </div>
                    <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $detail['nama'];?>">
                    </div>
                    <div class="mb-3">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="number" class="form-control" id="nrp" name="nrp"  value="<?= $detail['nrp'];?>">
                    </div>
                    <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com"name="email"  value="<?= $detail['email'];?>">
                    </div>
                    <div class="mb-3">
                    <label for="jurusan" class="form-label">jurusan</label>
                    <select class="form-select" aria-label="Default select example" name="jurusan">
                    <?php $jurusan=["Teknik Elektro","Teknik Informatika","Teknik Arsitktur","Biologi"];?>
                    <option selected><?= $detail['jurusan'];?></option>
                    <?php foreach($jurusan as $data):?>
                    <option value="<?=$data?>"><?=$data?></option>
                    <?php endforeach; ?>
                    </select>
                    </div>
          
                    <button type="submit" name="update" class="btn btn-primary float-end">Update</button>
                </form>
            </div>
           
            </div>
        </div>
    </div>
</div>