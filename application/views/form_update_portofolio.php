<?php include 'header_dasboard.php' ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">
								Update Portofolio
							</h4>
						</div>
						<?php  foreach ($portofolio as $row):?>
						<div class="modal-body">

							<form action="<?= base_url()?>cportofolio/update/<?= $row->id_portofolio ?>" method="post">
								<div class="modal-body">
									
									
									<div class="form-group">
										<label for="name">Nama </label>
										<input type="text" class="form-control" name="nama" id="name" placeholder="Nama" value="<?= $row->nama ?>">
									</div>

									<div class="form-group">
										<label for="site">Url Site</label>
										<input type="text" class="form-control" name="url" id="site" placeholder="URL Site" value="<?= $row->url ?>">
									</div>
									
								</div>
								<div class="modal-footer">
									<input type="submit" class="btn btn-success" value="Update">
									<a href="<?= base_url()?>admin/dasboard/" class="btn btn-danger">Cancel</a>							
								</div>
							</form> 
						</div>
					<?php endforeach; ?>
					
				</div>
			
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
</div>
<br>
<?php include 'footer.php' ?>