<?php include 'header_dasboard.php' ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
			<h2>Daftar Portofolio</h2>
			<a id="modal-806384" href="#modal-portofolio" role="button" class="btn btn-default" data-toggle="modal">Tambah Portofolio</a>
			<br>

			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Foto
						</th>
						<th>
							Nama 
						</th>
						<th>
							Url Site
						</th>
						<th>
							#
						</th>
					</tr>
				</thead>
 
				<tbody>
					 <?php if (empty($portofolio)) { ?>
                            <tr>
                                <td colspan="6">Data tidak ditemukan</td>
                            </tr>
                        <?php
                        } else {
                            $no = 0;
                            foreach ($portofolio as $row):
                                $no++;
                                ?>               
					<tr>
						<td>
							<?php echo $no ?>
						</td>
						<td>
							<img width="120px" src="<?= base_url(); ?>assets/img/portofolio/1.jpg"  class="img-rounded">
						</td>
						<td>
							<?php echo $row->nama ?>
						</td>
						<td>
							<?php echo $row->url ?>
						</td>
						<td>
							<button alt="edit" class="btn btn-default"><a href="<?= base_url(); ?>main/portofolio" target="_blank"><i class="fa fa-search" aria-hidden="true"></i></a></button>
							<a href="<?= base_url()?>cportofolio/modal/<?= $row->id_portofolio ?>" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a alt="edit" href="<?= base_url()?>cportofolio/hapus/<?php echo $row->id_portofolio ?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php endforeach; ?>
					<?php } ?>
				</tbody>
			</table>
			<hr>

			<h2>Video</h2>
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Nama Video
						</th>
						<th>
							Url Video
						</th>
						<th>
							#
						</th>
					</tr>
				</thead>

				<tbody>
					<?php if (empty($video)) { ?>
                            <tr>
                                <td colspan="6">Data tidak ditemukan</td>
                            </tr>
                        <?php
                        } else {
                            $no = 0;
                            foreach ($video as $row):
                                $no++;
                                ?>  
					<tr>
						<td>
							<?php echo $no ?>
						</td>
						<td>
							<?php echo $row->nama_video ?>
						</td>
						<td>
							<?php echo $row->url_video ?>
						</td>
						<td>
							<button alt="edit" class="btn btn-default"><a href="<?= base_url(); ?>" target="_blank"><i class="fa fa-search" aria-hidden="true"></i></a></button>
							<a href="<?= base_url(); ?>cvideo/modal/<?= $row->id_video ?>" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php endforeach; 
					} ?>
				</tbody>
			</table>

			<hr>
			<h2>Daftar Admin</h2>
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Username
						</th>
						<th>
							Password
						</th>
						<th>
							#
						</th>
					</tr>
				</thead>

				<tbody>
					<?php if (empty($admin)) { ?>
                            <tr>
                                <td colspan="6">Data tidak ditemukan</td>
                            </tr>
                        <?php
                        } else {
                            $no = 0;
                            foreach ($admin as $row):
                                $no++;
                                ?>               
					<tr>
						<td>
							<?php echo $no ?>
						</td>
						<td>
							<?php echo $row->username ?>
						</td>
						<td>
							<?php echo $row->password ?>
						</td>
						<td>
							<a href="<?= base_url()?>admin/modal/<?= $row->id ?>" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a alt="Hapus" href="<?= base_url()?>admin/hapus/<?= $row->id ?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php endforeach; 
					} ?>
				</tbody>
			</table>

		</div>
		<div class="col-md-2">

			<img alt="Bootstrap Image Preview" width="100%" src="<?= base_url(); ?>assets/img/user.png" class="user"/>
			<h2>Hello <?= $_SESSION['username']; ?></h2>
			<center>
			<div class="btn-group btn-option">
				 
				<button class="btn btn-default">
					<i class="fa fa-bars" aria-hidden="true"></i>  Option
				</button> 
				<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="<?= base_url(); ?>admin/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
					</li>
					<li>
						<a href="<?= base_url(); ?>" target="_blank"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>  Site Preview</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#modal-admin" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Add Admin</a>
					</li>
				</ul>
			</div>
			</center>
		</div>
	</div>
</div>

<?php include 'modal/modal_portofolio.php' ?>
<?php include 'modal/modal_admin.php' ?>
<?php include 'modal/modal_video.php' ?>

<?php include 'footer.php' ?>