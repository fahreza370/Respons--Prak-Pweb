<html>
<head>
<title>GUEST BOOK</title>
<link rel="stylesheet" href="gaya.css">
</head>
<body >
<center>
	<table cellspacing='0'>
		<thead>
		<h1>Data Pembeli</h1>	
	<?php
        if(isset($_POST['Login'])){
            $user = $_POST['Username'];
            $pass = $_POST['password'];
            if($user=="admin" && $pass=="rahasia"){
                $fp = fopen("bukutamu.txt","r");
		echo "<tr><td>Nama </td>
			<td>Nama barang </td>
			<td>Harga </td>
			<td>Jumlah </td>
			<td>Alamat </td>
			<td>Komentar </td>
			</tr>";
		while ($isi = fgets($fp,80))
		{
		$pisah = explode("|",$isi);

		echo "<tr><td> $pisah[0] </td>
			<td> $pisah[1] </td>
			<td> $pisah[2] </td>
			<td> $pisah[3] </td>
			<td> $pisah[4] </td>
			<td> $pisah[5] </td>
			</tr>";
		}
		echo "</tbody></table>";
		echo "<a class=btn href=servis.html> Isi Buku tamu </a>";
		echo "<a class=btn href=lihat.php> Profile </a>";
            }else{
                echo ("<h2>Login gagal , silahkan coba lagi kawan</h2>");
            }

        }
		
		?>

	</center>
</body>
</html>