<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="../pict/logo.png" />
  <link rel="stylesheet" href="../css/admin.css" />
  <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
		rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reservasi Pariwisata Pantai Kuyon | Categories</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	   <i class="bx bx-catalog"></i>
	   <span class="logo_name">Reservasi Pariwisata Pantai Kuyon</span>
	</div>
	<ul class="nav-links">
	   <li>
		<a href="../admin.php" class="active">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Categories</span>
		</a>
	   </li>
	   <li>
		<a href="../transaction/transaction.php">
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">transaction</span>
		</a>
	   </li>
	   <li>
		<a href="#">
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
	  <h3>Input Categories</h3>
	  <div class="form-login">
	  <form action="reservasi-proses.php" method="post" enctype="multipart/form-data">
	  	   <label for="nama_pelanggan">Nama Pelanggan</label>
			<input class="input" type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Nama_Pelanggan"/>

			<label for="tanggal_reservasi">Tanggal Reservasi</label>
			<input class="input" type="text" name="tanggal_reservasi" id="tanggal_reservasi" placeholder="Tanggal_Reservasi" />

 		   <label for="price">Price</label>
			<input class="input" type="text" name="price" id="price" placeholder="price" />

		   <button type="submit" class="btn-simpan" name="simpan">
					Simpan
		   </button>
		</form>
	   </div>
	</div>
   </section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	   sidebarBtn.onclick = function () {
		sidebar.classList.toggle("active");
		   if (sidebar.classList.contains("active")) {
			sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
  </script>
</body>
</html>