<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title> Admin | Categories</title>
</head>
<body>
   <div class="sidebar">
      <div class="logo-details">
         <i class="bx bx-category"></i>
         <span class="logo_name">Reservasi Pantai Kuyon</span>
      </div>
      <ul class="nav-links">
         <li>
            <a href="../dashboard.php" class="active">
               <i class="bx bx-grid-alt"></i>
               <span class="links_name">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="../categories/categories.html">
               <i class="bx bx-box"></i>
               <span class="links_name">Categories</span>
            </a>
         </li>
         <li>
            <a href="../transaction/transaction.html">
               <i class="bx bx-list-ul"></i>
               <span class="links_name">Transaction</span>
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
            <span class="admin_name">Admin</span>
         </div>
      </nav>
      <div class="home-content">
         <h3>Categories</h3>
         <button type="button" class="btn btn-tambah" id="tambahDataBtn">
            Tambah Data
         </button>
         <table class="table-data">
            <thead>
               <tr>
                  <th scope="col" style="width: 30%">Fasilitas yang Didapat</th>
                  <th>Categories</th>
                  <th scope="col" style="width: 20%">Price</th>
                  <th scope="col" style="width: 30%">Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Tiket Masuk</td>
                  <td>Paket 1</td>
                  <td>25000</td>
                  <td>
                     <button class="btn-edit">Edit</button> | 
                     <button class="btn-hapus">Hapus</button>
                  </td>
               </tr>
            </tbody>
         </table>
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

      // Tambahkan event listener untuk tombol tambahkan data
      document.getElementById("tambahDataBtn").addEventListener("click", function() {
         // Redirect atau lakukan operasi tambahkan data yang diinginkan
         // Misalnya:
         window.location.href = "categories-entry.html";
      });

      // Tambahkan event listener untuk tombol edit
      document.querySelector(".btn-edit").addEventListener("click", function() {
         // Redirect atau lakukan operasi edit data yang diinginkan
         // Misalnya:
         alert("Anda menekan tombol edit!");
      });

      // Tambahkan event listener untuk tombol hapus
      document.querySelector(".btn-hapus").addEventListener("click", function() {
         // Redirect atau lakukan operasi hapus data yang diinginkan
         // Misalnya:
         alert("Anda menekan tombol hapus!");
      });
   </script>
</body>
</html>
