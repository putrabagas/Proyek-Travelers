<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-8">
            <?php foreach($post as $post): ?>
                <div class="card">
                    <div class="card-header text-center">
                        Update Artikel
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url(); ?>post/prosesUpdate<?= $post['id_artikel']?>" method="POST">
                            <div class="form-group">
                                <label for="judul">Judul Artikel</label>
                                <input type="text" class="form-control" name="judul" id="judul" value="<?= $post['judul']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi Artikel </label>
                                <textarea class="form-control" name="isi" id="isi" rows="8" required><?= $post['isi']?></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger">Update</button>
                                <a href="<?= base_url();?>post" class="btn btn-dark">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
