<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h2>Daftar Mahasiswa</h2>
                <?php foreach($data['mhs'] as $mhs) :?>
                    <ul>
                        <li><?= $mhs['nama'];?></li>
                        <li><?= $mhs['NRP'];?></li>
                        <li><?= $mhs['email'];?></li>
                        <li><?= $mhs['jurusan'];?></li>
                    </ul>
                <?php endforeach ?>

        </div>
    </div>

</div>