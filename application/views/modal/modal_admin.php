<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			<div class="modal fade" id="modal-admin" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								×
							</button>
							<h4 class="modal-title" id="myModalLabel">
								Tambah Admin
							</h4>
						</div>
						<div class="modal-body">
						<form action="<?= base_url()?>admin/add_admin" method="post">
						<div class="modal-body">
							
							
							  <div class="form-group">
							    <label for="name">username </label>
							    <input type="text" class="form-control" name="user" id="name" placeholder="Username">
							  </div>

							  <div class="form-group">
							    <label for="site">Passwoard</label>
							    <input type="password" class="form-control" name="pass" id="site" placeholder="Password">
							  </div>
							 
						</div>
						<div class="modal-footer">
							 
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Close
							</button> 
							<input type="submit" class="btn btn-primary" value="Save">
								
							
						</div>
						</form> 
						</div>
					</div>
					
				</div>
				
			</div>
<!-- edit -->
			
			
		</div>
	</div>
</div>