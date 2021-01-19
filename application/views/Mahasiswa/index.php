<div class="container">
<div class="row mt-3">
    <div class="col-md-6">
    <a type="button" class="btn btn-primary" href="<?=base_url();?>mahasiswa/tambah">Tambah</a>
    </div>
</div>
<div class="row mt-3">
    <h3>DATA MAHASISWA</h3>

      <div class="container">
      <div class="row mt-3">
      <form action="" method="post">
            <div class="input-group mb-3 col-md-6 w-50">
            <input type="text" class="form-control" placeholder="Silahan cari nama..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
            <button class="btn bg-primary" type="submit" id="button-addon2" >Cari</button>
            </div>  
      </form>
      </div>
      </div>

  
    <div class="row">
    <?php if($this->session->flashdata()): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>sukses!!</strong> data <?php echo $this->session->flashdata('flash');?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php $this->session->sess_destroy(); ?>
     <?php endif; ?>
    </div>
    
    <div class="col-md-6">
        <ul class="list-group">
        <?php foreach ($mahasiswa as $mhs): ?>
        <li class="list-group-item"><?=$mhs['nama'] ?>
        <a href="<?= base_url(); ?>mahasiswa/delateDataMahasiswa/<?=$mhs['id']?>" class="badge bg-danger float-end" onclick="return confirm('yakin?');">Hapus</a>
        <a href="<?= base_url(); ?>mahasiswa/UpdateDataMahasiswa/<?=$mhs['id']?>" class="badge bg-success float-end">Update</a>
        <a href="<?= base_url(); ?>mahasiswa/detailDataMahasiswa/<?=$mhs['id']?>" class="badge bg-primary float-end">Detail</a>
        </li>
         <?php endforeach; ?>
       </ul>
    </div>
</div>
</div>