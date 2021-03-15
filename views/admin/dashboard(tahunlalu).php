<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

	<title>HIMFEST DASHBOARD</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- google font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/dashboard.css">
</head>

<body>
	<div class="d-flex justify-content-center align-items-center w-100 h-100">
		<div class="dashboard-container">

			<div class="sidear nav nav-tabs nav-fill" id="nav-tab" role="tablist">
				<div class="head-profile text-center navbar-brand">
					<img src="<?= base_url()?>images/profile.png" alt="profile picture"
						class="profile-pict rounded-circle">
					<p><strong>Username / Team Name</strong></p>
				</div>
				<p class="text-secondary main-menu">Main Menu</p>
				<a href="#nav-dashboard" id="nav-dashboard-tab"
					class="d-flex align-items-center nav-item nav-link active " data-toggle="tab"
					aria-controls="nav-dashboard" aria-selected="true" role="tab">
					<i class="fas fa-th fa-lg fa-fw mr-3 text-secondary"></i>
					Dashboard
				</a>
				<a href="#nav-teammates" id="nav-teammates-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-teammates" aria-selected="false" role="tab">
					<i class="fas fa-user-friends fa-lg fa-fw mr-3 text-secondary"></i>
					Teammates
				</a>
				<a href="#nav-result" id="nav-result-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-result" aria-selected="false" role="tab">
					<i class="fas fa-chart-pie fa-lg fa-fw mr-3 text-secondary"></i>
					Result Lomba
				</a>
				<a href="#nav-upload" id="nav-upload-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-upload" aria-selected="false" role="tab">
					<i class="fas fa-upload fa-lg fa-fw mr-3 text-secondary"></i>
					Upload Files
				</a>
				<p class="text-secondary akun-saya">Akun Saya</p>
				<a href="#nav-edit" id="nav-edit-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-edit" aria-selected="false" role="tab">
					<i class="fas fa-user-circle fa-lg fa-fw mr-3 text-secondary"></i>
					Edit Profile
				</a>
				<a href="#nav-security" id="nav-security-tab" class="d-flex align-items-center nav-item nav-link"
					data-toggle="tab" aria-controls="nav-security" aria-selected="false" role="tab">
					<i class="fas fa-lock fa-lg fa-fw mr-3 text-secondary"></i>
					Security Password
				</a>
				<div class="sign-out">
					<a href="#" class="d-flex align-items-center">
						<i class="fas fa-sign-out-alt fa-lg fa-fw mr-2 text-primary"></i>
						Sign Out
					</a>
				</div>
			</div>

			<div class="content tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel"
					aria-labelledby="nav-dashboard-tab">
					<h1>DASHBOARD</h1>
					<div class="greeting-container">
						<div class="greeting">
							<h3>Hola [Name]!</h3>
							<p>Dapatkan kesempatan bekerja di bidang IT dengan mengikuti lomba ini dan dapatkan
								informasi lebih lanjut</p>
						</div>
						<img src="<?= base_url()?>images/computer@2x.png" class="dashboard-image">
					</div>
					<div class="row">
						<div class="col-8">
							<div class="detail-team">
								<h5>Detail Team</h5>
								<p class="text-secondary">Team details</p>
								<div class="teammate-container d-flex flex-column">
									<div class="teammate-card d-flex">
										<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt=""
											class="teammate-pict">
										<h6 class="teammate-name">Ketua</h6>
										<div class="lomba d-flex justify-content-center align-items-center">
											<h6>UI/UX</h6>
										</div>
									</div>
									<div class="teammate-card d-flex">
										<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt=""
											class="teammate-pict">
										<h6 class="teammate-name">Anggota 1</h6>
										<div class="lomba d-flex justify-content-center align-items-center">
											<h6>UI/UX</h6>
										</div>
									</div>
									<div class="teammate-card d-flex">
										<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt=""
											class="teammate-pict">
										<h6 class="teammate-name">Anggota 2</h6>
										<div class="lomba d-flex justify-content-center align-items-center">
											<h6>UI/UX</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="requirements-progress">
								<h5>Proses Registrasi</h5>
								<p class="text-secondary">All time</p>
								<div class="progress-container text-center">
									<div class="fprogress fx">
										<div class="fbar fbar-radius" data-percent="100%">
											<span style="width:100%"></span>
											<p class="finished">Finished</p>
											<p class="zero">0%</p>
											<p class="full">100%</p>
										</div>
									</div>
									<hr>
									<span class="status">Sesuai Persyaratan</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="nav-teammates" role="tabpanel" aria-labelledby="nav-teammates-tab">
					<div class="teammates">
						<h1>Teammates</h1>
						<p class="text-secondary">Team details</p>
						<div class="teammate-container d-flex flex-column">
							<div class="teammate-card d-flex">
								<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt=""
									class="teammate-pict">
								<div class="teammate-profile">
									<h6 class="teammate-name">Ketua</h6>
									<ul class="text-secondary">
										<li>Tempat tanggal lahir: </li>
										<li>Asal sekolah: </li>
										<li>Alamat: </li>
									</ul>
								</div>
							</div>
							<div class="teammate-card d-flex">
								<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt=""
									class="teammate-pict">
								<div class="teammate-profile">
									<h6 class="teammate-name">Anggota 1</h6>
									<ul class="text-secondary">
										<li>Tempat tanggal lahir: </li>
										<li>Asal sekolah: </li>
										<li>Alamat: </li>
									</ul>
								</div>
							</div>
							<div class="teammate-card d-flex">
								<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg" alt=""
									class="teammate-pict">
								<div class="teammate-profile">
									<h6 class="teammate-name">Anggota 2</h6>
									<ul class="text-secondary">
										<li>Tempat tanggal lahir: </li>
										<li>Asal sekolah: </li>
										<li>Alamat: </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="nav-result" role="tabpanel" aria-labelledby="nav-result-tab">
					<h1>Result Lomba</h1>
					<p class="text-secondary mt-4 mb-1">Pilih lombanya</p>
					<div class="d-flex justify-content-start align-items-center p-0 w-100">
						<ul class="nav nav-pills">
							<li class="active"><a href="#" class="btn btn-primary">UI/UX</a></li>
							<li><a href="#" class="btn btn-primary disabled">Website</a></li>
						</ul>
					</div>
					<div class="result-container d-flex justify-content-center align-items-center">
						<p>Result untuk lomba ini belum tersedia</p>
					</div>
				</div>

				<div class="tab-pane fade" id="nav-upload" role="tabpanel" aria-labelledby="nav-upload-tab">
					<h1>Upload Files</h1>
					<p class="text-secondary">Upload karya anda sesuai instruksi</p>
					<form action="" method="post">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 pt-3 pr-3 pb-4 pl-0">
									<div class="file-drop-area">
										<input type="file" name="file" multiple required>
										<img src="<?= base_url()?>images/dropfile@2x.png" alt="" class="w-100 h-100">
									</div>
								</div>
								<div class="col-lg-4 p-0">
									<div class="row-8 p-0">
										<div class="file-info d-flex align-items-center text-secondary">
											<i class="fas fa-print fa-fw text-primary ml-4 mr-2"></i>|
											<span class="file-name ml-3"></span>
										</div>
										<div class="file-info d-flex align-items-center text-secondary">
											<i class="fas fa-link fa-fw text-primary ml-4 mr-2"></i>|
											<span class="file-url ml-3"></span>
										</div>
										<div class="file-info d-flex align-items-center text-secondary">
											<i class="fas fa-bookmark fa-fw text-primary ml-4 mr-2"></i>|
											<span class="file-category ml-3"></span>
										</div>
									</div>
									<div class="row-4">
										<div class="d-flex justify-content-center mt-2 custom-control custom-checkbox">
											<input type="checkbox" name="verify" id="verify"
												class="mr-2 custom-control-input mt-0">
											<label for="verify" class="custom-control-label m-0 pt-1">Karya ini buatan
												saya*</label>
										</div>
										<input type="submit" class="btn btn-primary upload-button" value="UPLOAD FILE">
										<input type="reset" class="btn btn-outline-secondary cancel-button"
											value="BATAL">
									</div>
								</div>
								<p class="w-100 text-left">*) Dengan mencentang <em>'karya ini buatan saya'</em> maka
									anda siap menerima konsekuensi yang ada bila ditemukan bahwa karya tersebut bukan
									milik anda</p>
							</div>
						</div>
					</form>
				</div>

				<div class="tab-pane fade" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">
					<h1>Edit Profile</h1>
					<p class="text-secondary">Edit profile team anda</p>
					<form action="" method="post">
						<div class="container p-0">
							<div class="d-flex flex-column p-0">
								<h5 class="mt-3">Profile Ketua</h5>
								<div class="row p-0">
									<div class="col-9">
										<label class="sr-only" for="inputNama">Nama Lengkap</label>
										<input class="edit-profile-inputs" type="text" name="namaKetua" id="inputNama"
											placeholder="Nama Lengkap" required>
										<label class="sr-only" for="inputTanggal">Tanggal Lahir</label>
										<input class="edit-profile-inputs" type="date" name="tanggalLahirKetua"
											id="inputTanggal" placeholder="Tanggal Lahir" required>
										<label class="sr-only" for="inputSekolah">Asal Sekolah</label>
										<input class="edit-profile-inputs" type="text" name="sekolahKetua"
											id="inputSekolah" placeholder="Asal Sekolah" required>
									</div>
									<div class="col-3 py-2">
										<div class="edit-profile-pict">
											<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg"
												alt="" class="foto-profil-ketua">
											<div class="change-pict d-flex justify-content-center align-items-center">
												<p class="m-0">
													Ubah foto profil
												</p>
												<label for="inputFile" class="sr-only">Foto profil</label>
												<input type="file" name="fotoKetua" id="inputFile" accept="image/*">
											</div>
										</div>
									</div>
								</div>
								<h5 class="mt-3">Profile Anggota 1</h5>
								<div class="row p-0">
									<div class="col-9">
										<label class="sr-only" for="inputNama">Nama Lengkap</label>
										<input class="edit-profile-inputs" type="text" name="namaAnggota1"
											id="inputNama" placeholder="Nama Lengkap" required>
										<label class="sr-only" for="inputTanggal">Tanggal Lahir</label>
										<input class="edit-profile-inputs" type="date" name="tanggalLahirAnggota1"
											id="inputTanggal" placeholder="Tanggal Lahir" required>
										<label class="sr-only" for="inputSekolah">Asal Sekolah</label>
										<input class="edit-profile-inputs" type="text" name="sekolahAnggota1"
											id="inputSekolah" placeholder="Asal Sekolah" required>
									</div>
									<div class="col-3 py-2">
										<div class="edit-profile-pict">
											<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg"
												alt="" class="foto-profil-Anggota1">
											<div class="change-pict d-flex justify-content-center align-items-center">
												<p class="m-0">
													Ubah foto profil
												</p>
												<label for="inputFile" class="sr-only">Foto profil</label>
												<input type="file" name="fotoAnggota1" id="inputFile" accept="image/*">
											</div>
										</div>
									</div>
								</div>
								<h5 class="mt-3">Profile Anggota 2</h5>
								<div class="row p-0">
									<div class="col-9">
										<label class="sr-only" for="inputNama">Nama Lengkap</label>
										<input class="edit-profile-inputs" type="text" name="namaAnggota2"
											id="inputNama" placeholder="Nama Lengkap" required>
										<label class="sr-only" for="inputTanggal">Tanggal Lahir</label>
										<input class="edit-profile-inputs" type="date" name="tanggalLahirAnggota2"
											id="inputTanggal" placeholder="Tanggal Lahir" required>
										<label class="sr-only" for="inputSekolah">Asal Sekolah</label>
										<input class="edit-profile-inputs" type="text" name="sekolahAnggota2"
											id="inputSekolah" placeholder="Asal Sekolah" required>
									</div>
									<div class="col-3 py-2">
										<div class="edit-profile-pict">
											<img src="https://tanzolymp.com/images/default-non-user-no-photo-1.jpg"
												alt="" class="foto-profil-Anggota2">
											<div class="change-pict d-flex justify-content-center align-items-center">
												<p class="m-0">
													Ubah foto profil
												</p>
												<label for="inputFile" class="sr-only">Foto profil</label>
												<input type="file" name="fotoAnggota2" id="inputFile" accept="image/*">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-center align-items-center mt-5">
								<input type="submit" class="btn btn-primary update-button" value="UPDATE PROFILE">
							</div>
						</div>
					</form>
				</div>

				<div class="tab-pane fade" id="nav-security" role="tabpanel" aria-labelledby="nav-security-tab">
					<h1>Security</h1>
					<p class="text-secondary">Ganti password akun anda di sini</p>
					<div class="container p-0 mt-5">
						<div class="row p-0">
							<div class="col-sm-6 col-sm-offset-3">
								<form action="" method="post" id="changePassForm">
									<input type="password" class="input-lg form-control my-2" name="newPass"
										id="password1" placeholder="New Password" autocomplete="off" required>
									<input type="password" class="input-lg form-control my-2" name="newPassConfirmation"
										id="password2" placeholder="Confirm Password" autocomplete="off" required>
									<div class="invalid d-flex align-items-center">
										<i class="fas fa-times mr-2 text-danger"></i>
										<p class="m-0">Passwords do not match!</p>
									</div>
									<div class="empty d-flex align-items-center">
										<i class="fas fa-times mr-2 text-danger"></i>
										<p class="m-0">Passwords can not be empty!</p>
									</div>
									<div class="valid d-flex align-items-center">
										<i class="fas fa-check mr-2 text-success"></i>
										<p class="m-0">Passwords valid!</p>
									</div>
									<input type="submit"
										class="change-button col-xs-12 btn btn-primary btn-load btn-sm mt-3"
										data-loading-text="Changing Password..." value="Change Password">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<!-- popper js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<!-- bootstrap scripts -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- fontawesome  -->
	<script src="https://kit.fontawesome.com/435e55727b.js" crossorigin="anonymous"></script>
	<!-- custom scripts  -->
	<script src="<?= base_url()?>js/dashboard.js"></script>
</body>

</html>
