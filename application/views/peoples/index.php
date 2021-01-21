<div class="container">
<h3 class="mt-3">Halaman People</h3>
    <div class="row">
        <div class="col-md-9">
            <form action="<?= base_url('Peoples'); ?>" method="post">
                <div class="input-group mt-3">
                <input type="text" class="form-control" placeholder="silahkah masukkan pencarian..." name="keyword" type="submit" autocomplete="off" autofocus>
                <input class="input-group-text btn btn-primary" type=submit name="submit">
                </div>
            </form>
        </div>
    </div>
    <h4>Hasil Pencarian:<?=$jumlah_hasil_pencarian;?></h4>
    <div class="row mt-2" >
        <div class="col-md-9">
             <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">alamat</th>
                <th scope="col">email</th>
                <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td colspan=5>
                    <?php if(empty($peoples)): ?>
                    <div class="alert alert-danger d-flex justify-content-center" role="alert">
                        DATA NOT FOUND
                    </div>
                    <?php endif; ?>
                </td>
                </tr>
                <?php 
                foreach($peoples as $data): ?>
                <tr>
                <th scope="row"><?=++$start;?></th>
                <td><?=$data['nama'];?></td>
                <td><?=$data['alamat'];?></td>
                <td><?=$data['email'];?></td>
                <td class="">
                <a href="" class="badge bg-primary">Detail</a>
                <a href="" class="badge bg-danger">Delate</a>
                <a href="" class="badge bg-success">Update</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
           <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
