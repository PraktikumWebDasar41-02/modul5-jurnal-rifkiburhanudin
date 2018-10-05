<?php 
session_start();
$connect = mysqli_connect('localhost','root','','d_modul5');

$t1 = $_SESSION['t1'];

$query = "SELECT nama from t_jurnal1 where nim = '$t1' ";
$query1 = mysqli_query($connect, $query);
$hasil = mysqli_fetch_array($query1);

echo $hasil['nama'];
 ?>

 <form method="post">
 	komentar<textarea name="komen"></textarea><br>
 	<input type="submit" name="submit"><br>
 </form>

 <?php
 if (isset($_POST['submit'])) {
 	$komentar = $_POST['komen'];
 	$tes = true;

 	if (empty($komentar)) {
 		echo "Komentar tidak boleh kosong";
 		$tes = false;
 	}else{
 		if (str_word_count($komentar)<5) {
 			echo "komentar minimal harus 5 kata";
 			$tes = false;
 		}
 	}
 	if ($tes) {
 		$plus = "UPDATE t_jurnal1 SET komen = '$komentar' WHERE nim = 't1' ";
 		mysqli_query($connect,$plus);
 		header("location:3.php");
 	}
 }
 ?>