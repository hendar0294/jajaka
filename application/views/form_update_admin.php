<?php include 'header_dasboard.php' ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">
								Update Admin
							</h4>
						</div>
						<?php  foreach ($admin as $row):?>
						<div class="modal-body">

							<form action="<?= base_url()?>admin/update/<?= $row->id ?>" method="post">
								<div class="modal-body">
									
									
									<div class="form-group">
										<label for="name">username</label>
										<input type="text" class="form-control" name="user" id="name" placeholder="Nama" value="<?= $row->username ?>">
									</div>

									<div class="form-group">
										<label for="site">password</label>
										<input type="text" class="form-control" name="pass" id="site" placeholder="URL Site" value="<?= $row->password ?>">
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