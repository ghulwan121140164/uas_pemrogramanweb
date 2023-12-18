<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Anime</title>
    <link rel="stylesheet" type="text/css" href="hasilPencarian.css">
</head>
<body>
    <h2>Hasil Pencarian Anime</h2>
    
    <?php
    $koneksi = mysqli_connect("localhost", "id21685799_ghulwan", "Ghulwan123#", "id21685799_anime_list");

    $genre_cari = $_GET['genre'];

    $query_cari = "SELECT title, genre, rating FROM anime WHERE genre LIKE '%$genre_cari%'";
    $result_cari = mysqli_query($koneksi, $query_cari);

    echo "<table border='1'>
            <tr>
                <th>Judul</th>
                <th>Genre</th>
                <th>Rating</th>
            </tr>";

    while ($row_cari = mysqli_fetch_assoc($result_cari)) {
        echo "<tr>
                <td>{$row_cari['title']}</td>
                <td>{$row_cari['genre']}</td>
                <td>{$row_cari['rating']}</td>
            </tr>";
    }

    echo "</table>";

    echo "<br><a href='index.php'>Kembali ke Halaman Utama</a>";

    mysqli_close($koneksi);
    ?>
</body>
</html>