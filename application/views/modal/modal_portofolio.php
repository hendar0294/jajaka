<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<!-- tambah portofolio -->
			<div class="modal fade" id="modal-portofolio" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">

							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								×
							</button>
							<h4 class="modal-title" id="myModalLabel">
								Tambah Portofolio
							</h4>
						</div>
						<form action="<?= base_url()?>cportofolio/tambah" method="post">
							<div class="modal-body">

								<div class="form-group">
			                            <input type="file" name="foto" required/>
			                    </div>
			                    <br>
								<div class="form-group">
									<label for="name">Nama </label>
									<input type="text" class="form-control" name="nama" id="name" placeholder="Nama" required>
								</div>

								<div class="form-group">
									<label for="site">Url Site</label>
									<input type="text" class="form-control" name="url" id="site" placeholder="URL Site" required>
								</div>

							</div>
							<div class="modal-footer">

								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button> 
								<input type="submit" class="btn btn-primary" value="Save changes">
								

							</div>
						</form> 
					</div>
				</div>
			</div>	

			<!-- update portofolio -->
	</div>
</div>
</div>

