    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Artikel</h1>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <?php if (isset($posts)) : ?>
                <?php foreach ($posts as $post) : ?>
                    <div class="col-lg-6 mb-3">
                    <h4 class="text-truncate"><?= $post['judul']; ?></h4>
                        <p class="" style="-webkit-line-clamp:3; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;"><?= $post['isi']; ?>
                        </p>
                        <div class="text-right">
                            <a role="button" href="<?= base_url()?>post/lihat/<?= $post['id_artikel'] ?>" class="text-info font-italic">Baca lebih lanjut </a> 
                            <a role="button" href="<?= base_url()?>post/update/<?= $post['id_artikel'] ?>" class="text-success font-italic"> Update </a>  
                            <a role="button" href="<?= base_url()?>post/hapus/<?= $post['id_artikel'] ?>" class="text-danger font-italic" onclick="return confirm('Hapus gak qi?')"> Delete </a>  
                        </div>
                        <hr>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
  </div>
 </div>
</div>
