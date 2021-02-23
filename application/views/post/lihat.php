<h4 class="my-4 text-center">test</h4>
            <div class="row justify-content-center my-4">
                <div class="col-lg-7 text-center mb-3">
                <?php foreach($post as $post): ?>
                    <h5><?= $post['judul']?></h5>
                    <p><?= $post['isi']?></p>
                   <a href="<?= base_url();?>post" class="text-info text-danger font-italic">&laquo; Kembali</a>
                    <div class="mt-5 border-bottom"></div>
                <?php endforeach; ?>
                </div>
            </div>

            

  </div>
 </div>
</div>