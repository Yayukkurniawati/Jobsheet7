<html>
<head><title> Latihan Form Input Pengunjung</title>
</head>
<body>
<?php
echo "Nama  : Yayuk Kurniawati<br>";
echo "Kelas : SKA-15.A2<br>";
echo "NPM   : 888740306150114<br>";
echo "Matakuliah   : Pemrograman Web<br>";
echo "<hr>";
echo "<h2>Program Sederhana Form Input Pengunjung</h2>";
echo "<hr>";
echo "<form action='pengunjung.php' method='post'>";
echo "<table>";
echo "<h3> Silahkan Isi Data Dulu : </h3>";
echo "<tr><td>Nama</td><td>:</td>";
echo "<td><input type = 'text' name = 'nama'></td></tr>";

echo "<tr><td>Alamat</td><td>:</td>";
echo "<td><input type = 'text' name = 'alamat'></td></tr>";

echo "<tr><td>Email</td><td>:</td>";
echo "<td><input type = 'text' name = 'email'></td></tr>";

echo "<tr><td>Komentar</td><td>:</td>";
echo "<td><textarea cols ='45' rows ='7' name = 'komentar' class ='textarea' id = 'komentar' size = '15px'></textarea></td></tr>";

echo "<tr><td></td><td></td>";
echo "<td><input type = 'submit' value= 'Kirim' ></td></tr>";
echo "</table></form>";
?>
</body>
</html>