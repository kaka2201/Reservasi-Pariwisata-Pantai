<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
    exit();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../koneksi.php';

$sql = "SELECT * FROM tb_reservasi";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
    die('Query invalid: ' . mysqli_error($koneksi));
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href="../css/admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Reservasi Pariwisata Pantai Kuyon | Reservasi</title>
</head>
<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class="bx bx-category"></i>
			<span class="logo_name">Reservasi Pariwisata Pantai Kuyon</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="../dashboard.php" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
					<li>
				<a href="../reservasi/reservasi.php">
				<i class="bx bx-box"></i>
				<span class="links_name">Reservasi</span>
				</a>
			</li>
			<li>
				<a href="../transaction/transaction.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">Transaction</span>
				</a>
			</li>
			<li>
				<a href="../logout.php">
					<i class="bx bx-log-out"></i>
					<span class="links_name">Log out</span>
				</a>
			</li>
		</ul>
	</div>
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class="bx bx-menu sidebarBtn"></i>
			</div>
			<div class="profile-details">
				<span class="admin_name">Reservasi Pariwisata Pantai Kuyon</span>
			</div>
		</nav>
		<div class="home-content">
			<h3>Categories</h3>
			<button type="button" class="btn btn-tambah">
				<a href="reservasi-entry.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th>Nama Pelanggan</th>
						<th scope="col" style="width: 30%">Tanggal Reservasi</th>
						<th scope="col" style="width: 15%">Price</th>
						<th scope="col" style="width: 20%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_reservasi";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>$data[nama_pelanggan]</td>
					  <td>$data[tanggal_reservasi]</td>
                      <td>$data[price]</td>
                      <td >
                        <a class='btn-edit' href=reservasi-edit.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=reservasi-hapus.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
				</tbody>
			</table>
		</div>
	</section>
	<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script>
</body>

</html>
