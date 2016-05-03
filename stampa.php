<?php
$mysqli = mysqli_connect("localhost", "root", "", "testme") or die;
$mysqli->query("SET NAMES 'utf8'") or die;
?>
<html>
<head profile="http://www.w3.org/2005/20/profile">
<link rel="icon"
	  type="image/png"
	  href="favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>test.ME | stampa</title>
<link type='text/css' rel='stylesheet' href='style.css' />
<script type="text/javascript" src="js/jscolor/jscolor.js"></script>
</head>
<body>

<?php
	$sql="SELECT * FROM podesavanja";
	$result=mysqli_query($mysqli,$sql) or die;
	while($row=$result->fetch_assoc()) {
		$element=$row['element'];
		$svojstvo=$row['svojstvo'];
		${$element}=$svojstvo;
	}
			$table=$_GET['table'];
			echo '<h1>Pitanja za predmet: '.$table.'</h1>';
			$sql ='SELECT * FROM '.$table;
			$result = mysqli_query($mysqli,$sql)or die;
			while($row = $result->fetch_assoc()){
				$ID=$row['ID'];
				$pitanje=$row['pitanje'];
				$odgovor=$row['odgovor'];
				$odgovora=$row['odgovora'];
				$tacnih=$row['tacnih'];
				$resenje=$row['resenje'];
				$res=explode(",",$resenje);
				$odgovori=explode(" $##$ ",$odgovor);
				echo '<div>';
					echo '<div style="font-weight:bold;padding:10px 5px 5px 5px;color:#'.$mctpf.';font-size:'.$mvtp.'"><a href="index.php?a=3&table='.$table.'&b='.$ID.'" class="black" style="color:#'.$mctpf.'">'.$ID.'</a> - '.$pitanje.'</div>';
					if ($tacnih==1) {

					for ($i = 1; $i <= $odgovora; $i++) {
							$xi=$i-1;
							$underline="";
							if (in_array($i,$res)) $underline=';text-decoration:underline';
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;font-size:'.$mvto.$underline.'"><input type="radio" value="'.$i.'" style="margin-right:7px"/>'.$odgovori[$xi].'</div>';

						}
						
					}
					else {
					
					for ($i = 1; $i <= $odgovora; $i++) {
							$xi=$i-1;
							$underline="";
							if (in_array($i,$res)) $underline=';text-decoration:underline';
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;font-size:'.$mvto.$underline.'"><input type="checkbox" value="1" style="margin-right:7px"/>'.$odgovori[$xi].'</div>';
						}
					
					}
				
				}

?>

</body>
</html>