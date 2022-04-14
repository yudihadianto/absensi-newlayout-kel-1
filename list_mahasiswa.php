<?php include './layout/header.php'; ?>

<!-- Navigation -->
</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Inquiry Mahasiswa</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a>Data Master</a>
			</li>
		</ol>
	</div>
</div>


<!-- Content -->
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>List Mahasiswa</h5>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example">
							<thead>
								<tr>
									<th>NIM</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Email</th>
									<th>Semester</th>
									<th colspan="3">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include 'mysql_connect.php';
								$select_query = "SELECT * FROM master_mahasiswa";

								// menjalankan perintah select ke tabel
								$result = mysqli_query($conn, $select_query);

								if ($result) {

									// menampilkan dalam bentuk html
									while ($row = mysqli_fetch_array($result)) { ?>
										<tr>
											<td><?= $row['nim'] ?></td>
											<td><?= $row['nama'] ?></td>
											<td><?= $row['jenis_kelamin'] == 'Laki-Laki' ? 'Laki-Laki' : 'Perempuan' ?></td>
											<td><?= $row['tanggal_lahir'] ?></td>
											<td><?= $row['alamat'] ?></td>
											<td><?= $row['no_tlp'] ?></td>
											<td><?= $row['email'] ?></td>
											<td><?= $row['semester'] ?></td>
											<td><a href="detail_mahasiswa.php?action_menu=DETAIL&id=<?= $row['id'] ?>">Detail</a></td>
											<td><a href="edit_mahasiswa.php?action_menu=EDIT&id=' . $row['id'] . '">Edit</a></td>
											<td><a href="hapus_mahasiswa.php?action_menu=DELETE&id=<?= $row['id'] ?>" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data?');">Hapus</a></td>
										</tr>
								<?php
									}
								} else {
									echo "Gagal Menarik Data";
								}
								// menutup koneksi
								mysqli_close($conn);
								?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include './layout/footer.php'; ?>