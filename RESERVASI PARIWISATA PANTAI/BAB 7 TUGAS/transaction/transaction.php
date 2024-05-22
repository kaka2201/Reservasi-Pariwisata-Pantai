
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <title>Pariwisata Pantai Kuyon</title>
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
   <div class="sidebar">
      <div class="logo-details">
         <i class="bx bx-category"></i>
         <span class="logo_name">Pariwisata Pantai Kuyon</span>
      </div>
      <ul class="nav-links">
         <li>
            <a href="../dashboard.php">
               <i class="bx bx-grid-alt"></i>
               <span class="links_name">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="../Reservasi/reservasi.php">
               <i class="bx bx-box"></i>
               <span class="links_name">Reservasi</span>
            </a>
         </li>
         <li>
            <a href="../transaction/transaction.php" class="active">
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
         <h3>Transaction</h3>
         <button type="button" class="btn btn-tambah" id="btnTambahData">
            Tambah Data
         </button>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Nama</th>
                  <th>Paket Wisata</th>
                  <th>Harga</th>
                  <th>Tanggal</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Kaka</td>
                  <td>Paket 1</td>
                  <td>50000</td>
                  <td>2024-03-02</td>
                  <td><a href="#">Edit</a> | <a href="#">Hapus</a></td>
               </tr>
            </tbody>
            <tbody id="transactionTableBody">
               <!-- Transactions will be dynamically loaded here -->
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
         } else {
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
         }
      };

      function loadTransactions() {
         const transactions = JSON.parse(localStorage.getItem('transactions')) || [];
         const tableBody = document.getElementById('transactionTableBody');
         tableBody.innerHTML = '';

         transactions.forEach((transaction, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
               <td>${transaction.nama}</td>
               <td>${transaction.jenis}</td>
               <td>${transaction.harga}</td>
               <td>${transaction.tgl}</td>
               <td>
                  <a href="#" onclick="editTransaction(${index})">Edit</a> | 
                  <a href="#" onclick="deleteTransaction(${index})">Hapus</a>
               </td>
            `;
            tableBody.appendChild(row);
         });
      }

      function deleteTransaction(index) {
         let transactions = JSON.parse(localStorage.getItem('transactions')) || [];
         transactions.splice(index, 1);
         localStorage.setItem('transactions', JSON.stringify(transactions));
         loadTransactions();
      }

      function editTransaction(index) {
         // Add your edit logic here
      }

      document.getElementById('btnTambahData').addEventListener('click', function() {
         window.location.href = '../Reservasi/reservasi.php';
      });

      window.onload = loadTransactions;
   </script>
</body>
</html>
