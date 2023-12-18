<?php
$koneksi = mysqli_connect("localhost", "id21685799_ghulwan", "Ghulwan123#", "id21685799_anime_list");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['del'])) {
        $title_del = $_GET['del'];

        $query = "DELETE FROM anime WHERE title='$title_del'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<h2>Data Anime berhasil dihapus</h2>";
        } else {
            echo "<h2>Gagal menghapus data Anime</h2>";
        }
    }
}
header("Location: index.php");
mysqli_close($koneksi);
?>