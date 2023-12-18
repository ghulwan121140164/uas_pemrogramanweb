<?php
$koneksi = mysqli_connect("localhost", "id21685799_ghulwan", "Ghulwan123#", "id21685799_anime_list");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title_edit = $_POST['title_edit'];
    $genre_edit = $_POST['genre_edit'];
    $rating_edit = $_POST['rating_edit'];

    $query = "UPDATE anime SET genre='$genre_edit', rating=$rating_edit WHERE title='$title_edit'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<h2>Data Anime berhasil diubah</h2>";
    } else {
        echo "<h2>Gagal mengubah data Anime</h2>";
    }
}
header("Location: index.php");

mysqli_close($koneksi);
?>