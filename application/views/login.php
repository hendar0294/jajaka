<?php include 'header_login.php' ?>

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 ">
			<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
		<div class="col-md-12">
			<div class="alert alert-danger" role="alert">
				<?= $error ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="col-sm-6 col-sm-offset-3 form-box">
		<div class="form-top">
			<div class="form-top-left">
				<h3>Login to dasboard</h3>
				<p>Enter your username and password to log on:</p>
			</div>
		</div>
		<div class="form-bottom">
			<form role="form" action="" method="post" class="login-form">
				<div class="form-group">
					<label class="sr-only" for="form-username">Username</label>
					<input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
				</div>
				<div class="form-group">
					<label class="sr-only" for="form-password">Password</label>
					<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
				</div>
				<button type="submit" class="btn">Sign in!</button>
			</form>
		</div>
	</div>
</div>
<div class="col-md-2">
</div>
</div>
</div>
<br>
<br>
<?php include 'footer.php'; ?>