<?php include 'header.php' ?>

<!-- CONTAINER -->
<div class="container">
	<center><h2 style="font-family: 'Coming Soon';">Portofolio</h2></center>

	<div class="deskripsi">
		<div class="row">
             <?php if (empty($portofolio)) { ?>
                           <h2>Data tidak ditemukan</h2>
                        <?php
                        } else {
                            foreach ($portofolio as $row):
                                
                                ?>
			<div class="col-md-4">
                    <div class="delapan">
                        <a href="<?= $row->url ?>" target="_blank"><img src="<?= base_url(); ?>assets/img/portofolio/1.jpg">
                        <p><?= $row->nama ?></p></a>
                    </div>
			</div>

            <?php endforeach; 
             } ?>

		</div>
	</div>
</div>
<br>
<br>
<!-- END CONTAINER -->

<?php include 'footer.php' ?>