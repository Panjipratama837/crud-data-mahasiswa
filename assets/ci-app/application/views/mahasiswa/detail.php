<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Email : <?= $mahasiswa['email']; ?></h6>
                    <p class="card-text">NIM : <?= $mahasiswa['nrp']; ?></p>
                    <p class="card-text">Jurusan : <?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>