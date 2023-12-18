<?php
include 'connection.php';

$query = mysqli_query($connect, "SELECT * FROM reservasi");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Rumah Makan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Reservasi Rumah Makan</h1>

    <form action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <label for="telpon">No telpon:</label>
        <input type="number" id="telpon" name="telpon" required>

        <br>
        <label>Jadwal</label>
        <input type="radio" id="siang" name="jadwal" value="siang"> Siang
        <input type="radio" id="malam" name="jadwal" value="malam"> Malam

        <br>
        <label for="tanggal">tanggal</label>
        <input type="date" id="tanggal" name="tanggal">
        <br>

        <button type="submit" >Submit/Tambah Data</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>name</th>
                <th>no telepon</th>
                <th>jadwal</th>
                <th>tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $result) : ?>
                <tr>
                    <!-- ['sama dengan nama kolom saat buat tabel mysql'] -->
                    <td><?php echo $result['name'] ?></td>
                    <td><?php echo $result['telpon'] ?></td>
                    <td><?php echo $result['jadwal'] ?></td>
                    <td><?php echo $result['tanggal'] ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $result['name'] ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

   

</body>
</html>
