<div class="container">
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

                <?php 
                $i=1;
                foreach($peoples as $data): ?>
                <tr>
                <th scope="row"><?=$i++;?></th>
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
        </div>
    </div>
</div>
