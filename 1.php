<form action=" " method="post">
	NIM<input type="number" name="nim"><br>
	Nama<input type="text" name="nama"><br>
	Email<input type="text" name="email"><br>
<input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tes = true;

	if (empty($nim)) {
		echo "nim harus di isi, tidak boleh kosong";
	}else{
	if (strlen($nim)!=10) {
		echo "NIM harus 10 digit!!!";
		}
	}


	if (empty($nama)) {
		echo "nama harus di isi, tidak boleh kosong";
	}else{
	if (strlen($nama)>20) {
		echo "nama maksimal panjang nya 20 huruf!!";
		}
	}


	if (empty($email)) {
		echo "email harus di isi, tidak boleh kosong";
	}else{
		if (!strpos($email,'@') || !strpos($email, '.com')) {
			echo "email harus ada format '@' dan '.com'";
		
		}
	}


if ($tes) {
	$connect = mysqli_connect('localhost','root','','d_modul5');
	$query = "INSERT INTO t_jurnal1  VALUES ('$nim','$nama','$email','')";

	mysqli_query($connect,$query);
	session_start();
	$_SESSION['t1']= $nim;
	header("Location:2.php");
}

}
?>