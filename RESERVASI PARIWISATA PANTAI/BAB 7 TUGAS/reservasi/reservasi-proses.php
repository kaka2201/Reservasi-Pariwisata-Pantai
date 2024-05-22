<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $price = $_POST['price'];
    $tanggal_reservasi = $_POST['tanggal_reservasi'];

    $sql = "INSERT INTO tb_reservasi VALUES(NULL, '$nama_pelanggan', '$price','$tanggal_reservasi')";

    if(empty($nama_pelanggan) || empty($price)|| empty($tanggal_reservasi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'reservasi-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Reservasi Berhasil Ditambahkan');
                window.location = 'reservasi.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'reservasi-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $price      = $_POST['price'];
    $tanggal_reservasi = $_POST['tanggal_reservasi'];

    $sql = "UPDATE tb_reservasi SET 
            nama_pelanggan = '$nama_pelanggan',
            price = '$price',
            tanggal_reservasi = '$tanggal_reservasi'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Reservasi Berhasil Diubah');
                window.location = 'reservasi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'reservasi-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];  

    $sql = "DELETE FROM tb_reservasi WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Reservasi Berhasil Dihapus');
                window.location = 'reservasi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Reservasi Gagal Dihapus');
                window.location = 'reservasi.php';
            </script>
        ";
    }
}else {
    header('location: reservasi.php');
}
