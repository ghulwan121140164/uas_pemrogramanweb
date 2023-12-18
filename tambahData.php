<?php
$koneksi = mysqli_connect("localhost", "id21685799_ghulwan", "Ghulwan123#", "id21685799_anime_list");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];

    $query = "INSERT INTO anime (title, genre, rating) VALUES ('$title', '$genre', $rating)";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<h2>Data Anime berhasil ditambahkan</h2>";
    } else {
        echo "<h2>Gagal menambahkan data Anime</h2>";
    }
}
header("Location: index.php");
mysqli_close($koneksi);
?>