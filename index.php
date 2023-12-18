<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anime</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Anime</h2>

    <form action="cariData.php" method="get">
        <label for="genre">Pilih Genre:</label>
        <select name="genre" id="genre">
            <option value=""></option>
            <?php
                $koneksi = mysqli_connect("localhost", "id21685799_ghulwan", "Ghulwan123#", "id21685799_anime_list");

                $query_genre = "SELECT DISTINCT genre FROM anime";
                $result_genre = mysqli_query($koneksi, $query_genre);

                while ($row_genre = mysqli_fetch_assoc($result_genre)) {
                    echo "<option value='{$row_genre['genre']}'>{$row_genre['genre']}</option>";
                }
                
                mysqli_close($koneksi);
            ?>
        </select>

        <input type="submit" value="Cari">
    </form>

    <form action="tambahData.php" method="post">
        <label for="title">Judul:</label>
        <input type="text" name="title" required>
        <label for="genre">Genre:</label>
        <input type="text" name="genre" required>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" step="0.1" required>

        <input type="submit" value="Tambahkan">
    </form>

    <form action="editData.php" method="post">
        <label for="title_edit">Judul:</label>
        <input type="text" name="title_edit" required>
        <label for="genre_edit">Genre:</label>
        <input type="text" name="genre_edit" required>
        <label for="rating_edit">Rating:</label>
        <input type="number" name="rating_edit" step="0.1" required>

        <input type="submit" value="Edit">
    </form>

    <form action="hapusData.php" method="get">
        <label for="del">Masukkan Judul Anime :</label>
        <input type="text" name="del" required>

        <input type="submit" value="Hapus">
    </form>
    
    <?php
        $koneksi = mysqli_connect("localhost", "id21685799_ghulwan", "Ghulwan123#", "id21685799_anime_list");

        $query = "SELECT * FROM anime";
        $result = mysqli_query($koneksi, $query);

        echo "<table border='1'>
                <tr>
                    <th>Judul</th>
                    <th>Genre</th>
                    <th>Rating</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['genre']}</td>
                    <td>{$row['rating']}</td>
                </tr>";
        }

        echo "</table>";

        mysqli_close($koneksi);
    ?>
</body>
</html>