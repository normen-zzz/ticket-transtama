<div class="container py-5">
	<div class="row mb-4">
		<div class="col-12">
			<div class="card shadow-sm border-0 rounded">
				<div class="card-header bg-primary text-white">
					<h2 class="m-0"><?php echo $users['nama']; ?>'s Profile</h2>
				</div>
				<div class="card-body">
					<form action="<?= base_url('user/profile/' . $users['nip']) ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<!-- Profile Image Column -->
							<div class="col-lg-3 col-md-4 mb-4 text-center">
								<input type="hidden" id="ganti_gambar" value="<?= $users['photo'] ?>" name="ganti_gambar">
								<div class="profile-image-container mb-3">
									<img src="<?php echo base_url('images/users/' . $users['photo']) ?>" 
										 class="img-thumbnail rounded-circle img-fluid shadow" 
										 style="width: 180px; height: 180px; object-fit: cover;" alt="Profile Photo">
								</div>
								<div class="custom-file mb-2">
									<input type="file" class="custom-file-input" id="customFile" name="photo">
									<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
								<small class="text-muted">Upload a different photo (Max 2MB)</small>
							</div>
							
							<!-- Form Fields Column -->
							<div class="col-lg-9 col-md-8">
								<input type="hidden" name="nip" value="<?php echo $users['nip']; ?>">
								
								<div class="form-group row">
									<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="nama" value="<?php echo $users['nama']; ?>">
										<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-9">
										<select name="jenis_kelamin" class="custom-select">
											<option value="" disabled>Pilih Jenis Kelamin</option>
											<option <?php echo ($users['jenis_kelamin'] == 'L') ? 'selected' : ''; ?> value="L">Laki-Laki</option>
											<option <?php echo ($users['jenis_kelamin'] == 'P') ? 'selected' : ''; ?> value="P">Perempuan</option>
										</select>
										<?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="email" class="col-sm-3 col-form-label">Email</label>
									<div class="col-sm-9">
										<input type="email" class="form-control" name="email" value="<?= $users['email'] ?>">
										<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								
								<div class="form-group row">
									<label for="password" class="col-sm-3 col-form-label">Password</label>
									<div class="col-sm-9">
										<input type="password" class="form-control" name="password" placeholder="Leave blank to keep current password">
										<small class="form-text text-muted">Fill this only if you want to change your password</small>
									</div>
								</div>
								
								<div class="form-group row mt-4">
									<div class="col-sm-9 offset-sm-3">
										<button type="submit" class="btn btn-primary btn-lg px-5">
											<i class="fa fa-save mr-2"></i> Update Profile
										</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
// Add this script to show the selected file name
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
	var fileName = e.target.files[0].name;
	var nextSibling = e.target.nextElementSibling;
	nextSibling.innerText = fileName;
})
</script>
