<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    Tambah Artikel
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>post/prosesTambah" method="POST">
                        <div class="form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Artikel </label>
                            <textarea class="form-control" name="isi" id="isi" placeholder="Masukkan Isi" rows="8" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
