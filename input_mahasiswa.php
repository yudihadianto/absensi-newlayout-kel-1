<?php
include './layout/header.php';
$action_menu = $_GET['action_menu'];
?>

<!-- Navigation -->
</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Input Mahasiswa</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a>Data Master</a>
			</li>
		</ol>
	</div>
</div>


<!-- Content  -->
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Input Mahasiswa</h5>
				</div>
				<div class="ibox-content">
					<form method="post" action="simpan_mahasiswa.php">
						<div class="form-group  row"><label class="col-sm-2 col-form-label">NIM</label>
							<div class="col-sm-10"><input type="text" class="form-control" name="nim" required></div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10"><input type="text" class="form-control" name="nama_mhs"></div>
						</div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>

							<div class="col-sm-10"><select class="form-control m-b" name="jenis_kelamin">
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group row" id="data_1"><label class="col-sm-2 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-10 input-group date">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="tanggal_lahir">
							</div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Alamat</label>
							<div class="col-sm-10"><textarea type="text" class="form-control" name="alamat"></textarea></div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">No Telepon</label>
							<div class="col-sm-10"><input type="text" class="form-control" name="no_tlp" /></div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10"><input type="text" class="form-control" name="email"></div>
						</div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Semester</label>
							<div class="col-sm-10">

								<select id="semester" class="form-control" name="semester">>
									<option value="-">-</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
								</select>
							</div>
						</div>

						<div class="hr-line-dashed"></div>

						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<button class="btn btn-white btn-sm" onclick="history.back()" type="button">Cancel</button>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Jquery -->
<script>
	$(document).ready(function() {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});

		$('#data_1 .input-group.date').datepicker({
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			calendarWeeks: true,
			autoclose: true
		});
	});
</script>


<?php include './layout/footer.php'; ?>