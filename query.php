<?php
	session_start();
	if (isset($_SESSION['urls'])) {
		include 'conn.php';
		$ids = $_SESSION['urls'];
		$sql = "SELECT * FROM urls WHERE i='$ids'";
		$qsl = mysqli_query($conn, $sql);
		$url = mysqli_fetch_assoc($qsl);
		$conta = mysqli_num_rows($qsl);
		if ($conta<1) {
			echo "Erro ao recuperar a url";
			unset($_SESSION['urls']);
			exit();
		}
		unset($_SESSION['urls']);
	}else{
		echo "<p>Erro ao carregar a url</p>";
		unset($_SESSION['urls']);		
		exit();
	}

?>
<a href="<?php echo $url['url']; ?>">
	<button class="download-btn"></button>
</a>

<!-- <meta http-equiv="refresh" content="5;URL=<?php //echo $site['url'].'?token='.$url['i']; ?>" /> -->