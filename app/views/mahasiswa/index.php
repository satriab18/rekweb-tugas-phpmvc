<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <div class="text-center">
            <table class="table">
                    <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>

            <?php $i=1;  foreach($data['mhs'] as $mhs) : ?>
                <tr>
                    <th scope="row"><?=$i++?></th>
                    <td><?= $mhs['nama']?></td>
                    <td><?= $mhs['nrp']?></td>
                    <td><?= $mhs['email']?></td>
                    <td><?= $mhs['jurusan']?></td>
                </tr>
                
            <?php endforeach;?>
            </tbody>
            </table>
            </div>
        </div>
    </div>

</div>