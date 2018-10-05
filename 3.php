<?php 
session_start()
$connect = mysqli_connect('localhost','root','','d_modul5');

$t1 = $_SESSION['t1'];

$query = "SELECT * FROM t_jurnal1 WHERE nim = '$t1'";
$query1 = mysqli_query($connect,$query);
$hasil = mysqli_fetch_array($query1);

echo "nama : ".$hasil['nama']."<br>";
echo "Nim : ". $hasil['nim']."<br>";
echo "email : ".$hasil['email']."<br>";

session_destroy();
 ?>