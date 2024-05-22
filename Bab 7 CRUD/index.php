<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="assets/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Your existing CSS styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa; /* Warna latar belakang biru muda */
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #26a69a; /* Warna header hijau tosca */
            color: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .logo img {
            width: 80px; /* Ukuran logo yang lebih kecil */
            height: auto;
        }
        
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        nav ul li a:hover {
            color: #ffb72b; /* Warna saat hover menjadi kuning */
        }
        
        .slick-slide img {
            width: 100%;
            border-radius: 10px;
        }
        
        /* CSS untuk styling dots */
        .slick-dots {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        
        .slick-dots li {
            margin: 0 5px;
        }
        
        .slick-dots button {
            font-size: 0;
            border: none;
            background-color: transparent;
            color: #fff;
            cursor: pointer;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }
        
        .slick-dots button:hover {
            background-color: #fff;
        }
        
        .slick-dots button.slick-active {
            background-color: #fff;
        }
        
        /* Tambahan CSS untuk waktu */
        #date {
            text-align: center;
            margin-top: 20px;
            font-size: 24px; /* Menjadikan font size lebih besar */
            color: #333; /* Memberikan warna pada teks */
            font-weight: bold; /* Menjadikan teks lebih tebal */
        }

        /* CSS untuk tombol login */
        .btn_login {
            margin-top: 10px; /* Menambahkan margin ke tombol login */
        }

        /* CSS untuk membuat teks berada di tengah secara horizontal */
        .center {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <div class="logo">
                    <img src="assets/logo.png" alt="" />
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#" onclick="redirectToLogin()" class="btn_login">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <!-- Waktu -->
            <div class="center">
                <div id="date"></div>
            </div>
            <!-- Move dots here -->
            <ul class="slick-dots"></ul>
            <div class="carousel">
                <div><img src="assets/pantaikuyon2.jpg" alt="Slide 1"></div>
                <div><img src="assets/pantaikuyon4.jpg" alt="Slide 2"></div>
                <div><img src="assets/pantaikuyon5.webp" alt="Slide 3"></div
                </div>
        </main>
        <footer>
            <h4>&copy; Reservasi Pantai Kuyon Trenggalek</h4>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                dots: true,
            });
        });

        // Fungsi untuk menangani klik pada tombol login
        function redirectToLogin() {
            window.location.href = "login.php"; 
        }

        // Fungsi untuk menampilkan waktu
        function myFunction() {
            const months = ["Januari", "Februari", "Maret", "April", "Mei",
                        "Juni", "Juli", "Agustus", "September", "Oktober",
                        "November", "Desember"];
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
                        "Jumat", "Sabtu"];
            let date = new Date();
            let jam = date.getHours();
            let tanggal = date.getDate();
            let hari = days[date.getDay()];
            let bulan = months[date.getMonth()];
            let tahun = date.getFullYear();

            let m = date.getMinutes();
            let s = date.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
            requestAnimationFrame(myFunction);
        }

        // Fungsi untuk menambahkan nol pada angka kurang dari 10
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        // Jalankan fungsi waktu saat halaman dimuat
        window.onload = function () {
            myFunction();
        };
    </script>
</body>
</html>
