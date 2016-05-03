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
<title>test.ME</title>
<link type='text/css' rel='stylesheet' href='style.css' />
<script type="text/javascript" src="js/jscolor/jscolor.js"></script>
</head>
<body>
<?php

	$sql="SELECT * FROM podesavanja";
	$result=$mysqli->query($sql) or die;
	while($row=$result->fetch_assoc()) {
		$element=$row['element'];
		$svojstvo=$row['svojstvo'];
		${$element}=$svojstvo;
	}

?>
<div id="wrapper">
	<div id="header" style="background:#<?php echo $mchbcg; ?>;color:#<?php echo $mchf; ?>">
		<div style="float:left">
			<a href="index.php" style="padding:0 0 5px 10px;color:#<?php echo $mchtm; ?>;text-decoration:none">test.ME</a><span style="color:#<?php echo $mchver; ?>"> 1.5</span>
			<div style="padding-left:10px;width:150px">
				<form method="get" action="index.php">
	<?php
	if (isset($_GET["table"])) $table=$_GET["table"];
	else $table=NULL;
	if (isset($_GET["a"])) $a=$_GET["a"];
	else $a=NULL;
	if (isset($_GET["b"])) $b=$_GET["b"];
	else $b=NULL;
	if (isset($_GET["c"])) $c=$_GET["c"];
	else $c='sva';
	if (isset($_GET["d"])) $d=$_GET["d"];
	else $d='10';
	if (isset($_GET["e"])) $e=$_GET["e"];
	else $e=$rndq;
	if (isset($_GET["f"])) $f=$_GET["f"];
	else $f="";
	if (isset($_GET["od"])) $od=$_GET["od"];
	else $od="";
	if (isset($_GET["do"])) $do=$_GET["do"];
	else $do="";

if ($c!="po grupama") $f="";

					echo '<select name="table" style="width:90px">';

					$sql="show tables in testme";
					$result=$mysqli->query($sql) or die;
					while($row=$result->fetch_assoc()) {

						$tname=$row['Tables_in_testme'];

						if ($tname!="podesavanja") {
							echo '<option';
							if ($table==$tname) echo ' selected';
							echo '>'.$tname.'</option>';
						}
	
}
					echo '</select>';
					echo '<select name="a" style="width:90px">';
						echo '<option';
						if ($a==NULL) echo ' selected';
						echo '></option>';
						echo '<option';
						if ($a=="1") echo ' selected';
						echo ' value="1">test</option>';
						echo '<option';
						if ($a=="2") echo ' selected';
						echo ' value="2">unos</option>';
					echo '</select>';
	?>
					<input type="submit" value="uradi" />
			</div>
		</div>
		<div style="float:left;width:3px;height:80px;background:white"></div>
		<div>
			<span style="padding-left:19px">Vrsta pitanja:</span>
			<select name="c" style="width:80px">
<?php
				echo '<option';
				if ($c=="sva") echo ' selected';
				echo '>sva</option>';
				echo '<option';
				if ($c=="po grupama") echo ' selected';
				echo '>po grupama</option>';
				echo '<option';
				if ($c=="novija") echo ' selected';
				echo '>novija</option>';
				echo '<option';
				if ($c=="starija") echo ' selected';
				echo '>starija</option>';
				echo '<option';
				if ($c=="za prolaz") echo ' selected';
				echo '>za prolaz</option>';
				echo '<option';
				if ($c=="slabija") echo ' selected';
				echo '>slabija</option>';
				echo '<option';
				if ($c=="najslabija") echo ' selected';
				echo '>najslabija</option>';
		
?>			
			</select>
				<span style="margin-left:15px" title="Ako je ovo polje prazno a želite da izaberete postojeću grupu pitanja, na skroz levom 1. padajućem meniju izaberite željeni predmet a na meniju ispod njega ostavite prazno polje i pritisnite dugme 'uradi'">Ako testovi, test:</span>
				<select name="f" style="width:130px" title="Ako je ovo polje prazno a želite da izaberete postojeću grupu pitanja, na skroz levom 1. padajućem meniju izaberite željeni predmet a na meniju ispod njega ostavite prazno polje i pritisnite dugme 'uradi'">
<?php
					echo '<option';
					if ($f=="") echo ' selected';
					echo '></option>';
					if ($table!=NULL) {
						$sql = "SELECT grupa FROM " . $table . " GROUP BY grupa";
						$result = $mysqli->query($sql) or die;
						while ($row = $result->fetch_assoc()) {
							if (isset($row['grupa'])) {
								$grupa = $row['grupa'];
								echo '<option';
								if ($f == $grupa) echo ' selected';
								echo '>' . $grupa . '</option>';
							}
						}
					}
?>
					</select>
					<a style="margin-left:15px" class="white" style="color:#<?php echo $mchf; ?>" href="podesavanja.php">Podešavanja</a>
			</br>
			<span style="padding-left:10px">Koliko pitanja:</span>
			<select name="d" style="width:80px">
<?php
				echo '<option';
				if ($d=="5") echo ' selected';
				echo '>5</option>';
				echo '<option';
				if ($d=="10") echo ' selected';
				echo '>10</option>';
				echo '<option';
				if ($d=="15") echo ' selected';
				echo '>15</option>';
				echo '<option';
				if ($d=="20") echo ' selected';
				echo '>20</option>';
				echo '<option';
				if ($d=="30") echo ' selected';
				echo '>30</option>';
				echo '<option style="background:#FEE"';
				if ($d=="50") echo ' selected';
				echo '>50</option>';
				echo '<option style="background:#FDD"';
				if ($d=="100") echo ' selected';
				echo '>100</option>';
				echo '<option style="background:#FCC"';
				if ($d=="sva") echo ' selected';
				echo '>sva</option>';
?>
			</select><a class="white" href="<?php
				if ($table==NULL) {
					echo '#';
					$title= 'title="Da bi mogli da štampate pitanja i odgovore, na kroz levom 1. padajućem meniju izaberite željeni predmet a na meniju ispod njega ostavite prazno polje i pritisnite dugme \'uradi\' kako bi vam se pojavila mogućnost za štampanje"';
					$colortext='aaa;"';
				}
				else {
					echo 'stampa.php?table='.$table;
					$title="";
					$colortext=$mchf.';"';
				}
			?>" style="margin-left:283px;color:#<?php echo $colortext;echo $title; ?>>Verzija za štampu</a></br>
			<span style="padding-left:18px">Način izbora:</span>
			<select name="e" style="width:80px">
<?php
				echo '<option value="0"';
				if ($e=="0") echo ' selected';
				echo '>redom</option>';
				echo '<option value="1"';
				if ($e=="1") echo ' selected';
				echo '>slučajno</option>';
?>
			</select>
			<span style="margin-left:15px">Ako redom, od pitanja broj:</span>
			<input type="text" name="od" style="width:30px" value="<?php echo $od ?>" autocomplete = "off" />
			<span>do:</span>
			<input type="text" name="do" style="width:30px" value="<?php echo $do ?>" autocomplete = "off" />
				</form>
		</div>
	</div>
	<div id="box">
<?php
//																				TEST
if ($a=="1") {

	if (isset($b)) {

		if (isset($_POST['counter_a'])) $counter_a=$_POST['counter_a'];
			else $counter_a="";
		$counterok=0;
		
		for ($i = 1; $i <= $counter_a; $i++) {
		
			$ID=$_POST['ID'.$i];
			$pitanje=$_POST['pitanje'.$i];
			$pitanje=stripslashes($pitanje);
			$odgovor=$_POST['odgovor'.$i];
			$odgovora=$_POST['odgovora'.$i];
			$tacnih=$_POST['tacnih'.$i];
			$resenje=$_POST['resenje'.$i];
			$res=$resenje;
			$no=$_POST['no'.$i];
			$p=$_POST['p'.$i];
			$redosled=unserialize($_POST['redosled'.$i]);
			$odgovori=explode(" $##$ ",$odgovor);
			$resenje=explode(",",$resenje);
		
			echo '<div>';
			
			$check=0;
			$ocount=0;
					
					for ($ii = 1; $ii <= $odgovora; $ii++) {
						if (isset($_POST['o'.$i.'-'.$ii])) $check++;
						}
			if (($ign_blank==1 AND isset($_POST['o'.$i])==false)==false OR ($tacnih!=1 AND $check!=0)) {

				echo '<div style="font-weight:bold;font-size:'.$mvtp.';color:#'.$mctpf.';padding:10px 5px 5px 5px"><a href="index.php?a=3&table='.$table.'&b='.$ID.'" class="black">'.$ID.'</a> - '.$pitanje.'</div>';

				if ($tacnih==1) {
				
					if (isset($_POST['o'.$i])) $odg=$_POST['o'.$i];
						else $odg=0;
					if ($res==$odg) {
						$counterok++;
					
						foreach ($redosled as $ii) {
							$xii=$ii-1;
							if ($ocount%"2" == "1") $bgnd=$mctnpo;
								else $bgnd=$mctpo;
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;font-size:'.$mvto.';color:#'.$mctof.';background:#'.$bgnd.'"><input type="radio" name="o'.$i.'" value="'.$ii.'" style="margin-right:7px" ';
							if ($odg==$ii) echo 'checked';
							echo '/><span';
							if ($odg==$ii) echo ' style="color:#'.$mcrt.'"';
							echo '>'.$odgovori[$xii].'</span></div>';
							$ocount++;

						}
					
							$p=(($p*$no)+1)/($no+1);
							$no++;
							$query='UPDATE '.$table.' SET `no` = "'.$no.'", `p` = "'.$p.'" WHERE `ID` = "'.$ID.'"';
							$mysqli->query($query);
							
					}
					else {
					
						foreach ($redosled as $ii) {
							$xii=$ii-1;
							if ($ocount%"2" == "1") $bgnd=$mctnpo;
								else $bgnd=$mctpo;
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;background:#'.$bgnd.'"><input type="radio" name="o'.$i.'" value="'.$ii.'" style="margin-right:7px" ';
							if ($odg==$ii) echo 'checked';
							echo '/><span style="color:#';
							if ($odg==$ii) echo $mcrpo;
							if ($res==$ii) echo $mcrppo;
							echo '">'.$odgovori[$xii].'</span></div>';
							$ocount++;
							
						}
					
							$p=($p*$no)/($no+1);
							$no++;
							$query='UPDATE '.$table.' SET `no` = "'.$no.'", `p` = "'.$p.'" WHERE `ID` = "'.$ID.'"';
							$mysqli->query($query);
							
					}
				
				}
				else {
					$odg="";
					foreach ($redosled as $ii) {
						if (isset($_POST['o'.$i.'-'.$ii])) $xodg=$_POST['o'.$i.'-'.$ii];
							else $xodg=0;
						if ($xodg==1) {
						$odg.=$ii.',';
						}

					}
					$odg=substr($odg, 0, -1);
					$yodg=explode(",",$odg);
					if ($res==$odg) {
						$counterok++;
					
						foreach ($redosled as $ii) {
							$xii=$ii-1;
							if ($ocount%"2" == "1") $bgnd=$mctnpo;
								else $bgnd=$mctpo;
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;background:#'.$bgnd.'"><input type="checkbox" name="o'.$i.'" value="'.$ii.'" style="margin-right:7px" ';
							if (in_array($ii,$resenje)) echo 'checked';
							echo '/><span';
							if (in_array($ii,$resenje)) echo ' style="color:#'.$mcrt.'"';
							echo '>'.$odgovori[$xii].'</span></div>';
							$ocount++;
							
						}
					
							$p=(($p*$no)+1)/($no+1);
							$no++;
							$query='UPDATE '.$table.' SET `no` = "'.$no.'", `p` = "'.$p.'" WHERE `ID` = "'.$ID.'"';
							$mysqli->query($query);
						
					}
					else {
					
						foreach ($redosled as $ii) {
							$xii=$ii-1;
							if ($ocount%"2" == "1") $bgnd=$mctnpo;
								else $bgnd=$mctpo;
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;background:#'.$bgnd.'"><input type="checkbox" name="o'.$i.'" value="'.$ii.'" style="margin-right:7px" ';
							if (in_array($ii,$yodg)) echo 'checked';
							echo '/><span style="color:#';
							if (in_array($ii,$yodg)) {

								if (in_array($ii,$resenje)) echo $mcrt;
									else echo $mcrpo;
								
							}
							elseif (in_array($ii,$resenje)) {

								if (in_array($ii,$yodg)!=true) echo $mcrppo;

							}
							echo '">'.$odgovori[$xii].'</span></div>';
							$ocount++;
							
						}
					
							$p=($p*$no)/($no+1);
							$no++;
							$query='UPDATE '.$table.' SET `no` = "'.$no.'", `p` = "'.$p.'" WHERE `ID` = "'.$ID.'"';
							$mysqli->query($query);
							
					}
					
				}
				
			}
				
			echo '</div>';
		
		}

		echo '<div style="height:26px;background:#'.$mcfbcg.';padding-top:4px;color:#'.$mcff.';font-weight:bold;padding-top:4px">';
		$sledeci=$ID+1;
		echo '<a class="white" href="index.php?a='.$a.'&table='.$table.'&c='.$c.'&d='.$d.'&e='.$e.'&f='.$f.'&od='.$od.'&do='.$do.'" style="margin:0 20px 0 5px;color:#'.$mcff.'">Ponovi test sa istim parametrima</a><a class="white" href="index.php?a='.$a.'&table='.$table.'&c='.$c.'&d='.$d.'&e='.$e.'&f='.$f.'&od='.$sledeci.'" style="'.$mcff.'">Uradi sledeći test u nizu</a>';
		echo '<span style="float:right;margin:0 10px">';
		if ($counterok==$counter_a) echo '| Čestitamo! Svih '.$counter_a.' odgovora su bili tačni';
			else echo '| Tačnih odgovora '.$counterok.' od ukupno '.$counter_a;
		echo '</span></div>';
	
	}
	else {
		$uslov="";
		if ($c!="sva" OR $od!="" OR $do!="") $uslov=" WHERE ";
		switch ($c) {
			case 'novija':
				$uslov.='`no`<"3"';
				break;
			case 'starija':
				$uslov.='`no`>"3"';
				break;
			case 'za prolaz':
				$uslov.='`p`<="0.8" OR `no`<"3"';
				break;
			case 'slabija':
				$uslov.='`p`<"0.5"';
				break;
			case 'najslabija':
				$uslov.='`p`<"0.2"';
				break;
			case 'po grupama':
				$uslov.='grupa="'.$f.'"';
				break;
		}
		
		if ($d=="sva") $lmt="";
		else $lmt =" LIMIT ".$d;
		switch ($e) {
			case '0':
				if ($c!="sva" AND $c!="po grupama") $uslov.=" AND";
				$ordby='`ID`';
				if ($od =="" AND $do !="") {
					$uslov.=' ID<='.$do;
				}
				elseif ($do =="" AND $od !="") {
					$uslov.=' ID>='.$od;
				}
				elseif ($od !="" AND $do !="") {
					$uslov.=' ID>='.$od.' AND ID<='.$do;
				}
				break;
			case '1':
				$ordby='RAND()';
				$lmt=" LIMIT ".$d;
				break;
		}
		
		$counter_a=1;
		echo '<form method="POST" action="index.php?a=1&table='.$table.'&b=1&c='.$c.'&d='.$d.'&e='.$e.'&f='.$f.'&od='.$od.'&do='.$do.'">';
			$sql ='SELECT * FROM '.$table.$uslov.' ORDER BY '.$ordby.$lmt;
			$result = $mysqli->query($sql) or die;
			while($row = $result->fetch_assoc()){
				$ID=$row['ID'];
				$pitanje=$row['pitanje'];
				$odgovor=$row['odgovor'];
				$odgovora=$row['odgovora'];
				$tacnih=$row['tacnih'];
				$resenje=$row['resenje'];
				$no=$row['no'];
				$p=$row['p'];
				$odgovori=explode(" $##$ ",$odgovor);
				echo '<div>';
					echo '<div style="font-weight:bold;padding:10px 5px 5px 5px;color:#'.$mctpf.';font-size:'.$mvtp.'"><a href="index.php?a=3&table='.$table.'&b='.$ID.'" class="black" style="color:#'.$mctpf.'">'.$ID.'</a> - '.$pitanje.'</div>';
					
					$shuf = range (1, $odgovora);
					if ($rndq==1) shuffle($shuf);
					$qcount=0;
					
					if ($tacnih==1) {
				
					foreach ($shuf as $i) {
							$xi=$i-1;
							if ($qcount%"2" == "1") $bgnd=$mctnpo;
								else $bgnd=$mctpo;
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;background:#'.$bgnd.';font-size:'.$mvto.'"><input type="radio" name="o'.$counter_a.'" value="'.$i.'" style="margin-right:7px"/>'.$odgovori[$xi].'</div>';
							$qcount++;
						}
					}
					
					else {
					
					foreach ($shuf as $i) {
							$xi=$i-1;
							if ($qcount%"2" == "1") $bgnd=$mctnpo;
								else $bgnd=$mctpo;
							echo '<div style="margin:0 0 5px 20px;padding:0 3px;background:#'.$bgnd.';font-size:'.$mvto.'"><input type="checkbox" name="o'.$counter_a.'-'.$i.'" value="1" style="margin-right:7px"/>'.$odgovori[$xi].'</div>';
							$qcount++;
						}
					
					}
					$shuf=serialize($shuf);
					echo '<input type="hidden" name="ID'.$counter_a.'" value="'.$ID.'" />';
					echo '<input type="hidden" name="pitanje'.$counter_a.'" value="'.$pitanje.'" />';
					echo '<input type="hidden" name="odgovor'.$counter_a.'" value="'.$odgovor.'" />';
					echo '<input type="hidden" name="odgovora'.$counter_a.'" value="'.$odgovora.'" />';
					echo '<input type="hidden" name="tacnih'.$counter_a.'" value="'.$tacnih.'" />';
					echo '<input type="hidden" name="resenje'.$counter_a.'" value="'.$resenje.'" />';
					echo '<input type="hidden" name="no'.$counter_a.'" value="'.$no.'" />';
					echo '<input type="hidden" name="p'.$counter_a.'" value="'.$p.'" />';
					echo '<input type="hidden" name="redosled'.$counter_a.'" value="'.$shuf.'" />';
					echo '<input type="hidden" name="counter_a" value="'.$counter_a.'" />';
					
				echo '</div>';
				$counter_a++;
			}
		
		echo '<div style="height:26px;background:#'.$mcfbcg.';padding-top:4px;color:#'.$mcff.'"><input type="submit" value="proveri" style="margin-left:587px;float:left;width:100px"><input type="reset" value="obrisi" style="margin-left:50px;float:left"></div>';
	
		echo '</form>';
		
	}
	
}

//																				UNOS
if ($a==2) {
	if (isset($b)) {
		$prikaz="";
		for ($i = 1; $i <= 10; $i++) {

			if (isset($_POST['q'.$i]) AND ($_POST['q'.$i]!="") and isset($_POST['a'.$i.'-1']) and isset($_POST['a'.$i.'-2'])) {

				$q=$_POST['q'.$i];
				if (isset($_POST['grupa'.$i])) $ygrupa=$_POST['grupa'.$i];
					else $ygrupa="";
					
				$count_a=0;
				$odgovor="";
				$tacnih=0;
				$resenje="";
				$tabela="";
				
				for ($ii = 1; $ii <= 10; $ii++) {
							
					if (isset($_POST['a'.$i.'-'.$ii]) AND ($_POST['a'.$i.'-'.$ii]!="")) {
						$a=$_POST['a'.$i.'-'.$ii];
						$tabela.='<tr><td';
						$count_a++;
						$odgovor.=$a.' $##$ ';

						if (isset($_POST['t'.$i.'-'.$ii])) {
						
							$t=$_POST['t'.$i.'-'.$ii];
							
							if ($t==1) {
							
								$tacnih++;
								$resenje.=$count_a.',';
								$tabela.=' style="color:#55D"';
								
							}
							
						}
						
						$tabela.='>'.$a.'</td></tr>';

					}

				}

				$odgovor=substr($odgovor, 0, -6);
				$resenje=substr($resenje, 0, -1);
				if ($resenje!="") {
				
					$sql='INSERT INTO '.$table.' (`pitanje`,`odgovor`,`odgovora`,`tacnih`,`resenje`,`grupa`) VALUES ("'.$q.'","'.$odgovor.'","'.$count_a.'","'.$tacnih.'","'.$resenje.'","'.$ygrupa.'")';
					mysqli_query($mysqli,$sql) or die;
					
					$prikaz.='<tr><td><table border="1" width="100%"><tr><th align="left">'.$q.'</th>'.$tabela;
					if (empty($ygrupa)!=true) $prikaz.='<tr><td style="text-align:right;padding-right:5px">grupa: <i>'.$ygrupa.'</i></td></tr>';
					$prikaz.='</table></td></tr>';
					
				}
				else echo '<div style="padding:5px">Niste označili ni jedan tačan odgovor u '.$i.'. pitanju i samim nije ni uneseno u bazu pitanja</div>';
				
			}
			
		}
		
		if ($prikaz!="") echo '<div style="padding:5px;font-weight:bold">Uspečno unesena pitanja sa odgovorima:</div><table border="1" width="800px">'.$prikaz.'</table>';
			else echo '<div style="padding:5px">Nije bilo ni jednog ispravno unešenog pitanja sa odgovorima</div>';
		
	}
	else {
		echo '<form method="post" action="index.php?a=2&table='.$table.'&b=1">';
		for ($i = 1; $i <= 10; $i++) {
		
if ($i%2==1) $bgnd=$mcunp;
	else $bgnd=$mcup;
	
			echo '<div style="background:#'.$bgnd.';width:790px;padding:5px">';
				echo '<div><textarea name="q'.$i.'" rows="5" style="width:790px;font-weight:bold"></textarea></div>';
				for ($ii = 1; $ii <= 10; $ii++) {
				echo '<div><input type="checkbox" name="t'.$i.'-'.$ii.'" value="1" style="float:left;margin-top:13px" /><textarea name="a'.$i.'-'.$ii.'" rows="2" style="width:750px;margin-left:20px"></textarea></div>';
				}
			echo '<span style="margin-left:40px">Grupa: </span><input type="text" name="grupa'.$i.'"><a href="#dole" class="black" style="margin-left:510px">dole</a>';
			echo '</div>';

		}
		echo '<div style="width:790px;padding:5px;background:#'.$mcfbcg.';color:#'.$mcff.'"><a name="dole" /><input type="submit" value="unesi" style="margin-left:730px" /></div></form>';
	}
}

//																IZMENA

if ($a==3) {

	if (isset($_GET['bb'])) {
		$ID=$_GET['bb'];
			if (isset($_POST['grupa'])) $ygrupa=$_POST['grupa'];
				else $ygrupa="";

			$q=$_POST['q'];
			$count_a=0;
			$odgovor="";
			$tacnih=0;
			$resenje="";
			$tabela="";
			
			for ($i = 1; $i <= 10; $i++) {

				if (isset($_POST['a-'.$i]) AND ($_POST['a-'.$i]!="")) {
					$a=$_POST['a-'.$i];
					$count_a++;
					$odgovor.=$a.' $##$ ';

					if (isset($_POST['t-'.$i])) {
					
						$t=$_POST['t-'.$i];
						
						if ($t==1) {
						
							$tacnih++;
							$resenje.=$count_a.',';

							}
						
					}
					
				}
				
			}

			$odgovor=substr($odgovor, 0, -6);
			$resenje=substr($resenje, 0, -1);

			$sql='UPDATE '.$table.' SET `pitanje` = "'.$q.'", `odgovor` = "'.$odgovor.'", `odgovora` = "'.$count_a.'", `tacnih` = "'.$tacnih.'", `resenje` = "'.$resenje.'", `grupa` = "'.$ygrupa.'" WHERE `ID`="'.$ID.'"';
			mysqli_query($mysqli,$sql);

			echo '<div>Osveženo je</div>';
		}
		
	if (isset($_GET['b'])) $ID=$_GET['b'];
	$sql='SELECT * FROM '.$table.' WHERE `ID` = "'.$ID.'"';
	$result = $mysqli->query($sql) or die;
	$row=$result->fetch_assoc();

	$pitanje=$row['pitanje'];
	$odgovor=$row['odgovor'];
	if (isset($row['odgovora'])) $odgovora=$row['odgovora'];
		else $odgovora=$count_a;
	$resenje=$row['resenje'];
	$grupa=$row['grupa'];
	$no=$row['no'];
	$p=$row['p'];
	$odgovori=explode(" $##$ ",$odgovor);
	$res=explode(",",$resenje);

	echo '<form method="post" action="index.php?a=3&bb='.$ID.'">';

		echo '<div style="width:790px;padding:5px;background:#'.$icp.'">';
			echo '<div><textarea name="q" rows="5" style="width:790px;font-weight:bold;font-size:'.$mvtp.';color:#'.$mctpf.';">'.$pitanje.'</textarea></div>';
			$brpraznih=10-$odgovora;
			for ($i = 1; $i <= $odgovora; $i++) {
				$ii=$i-1;
				echo '<div><input type="checkbox" name="t-'.$i.'" value="1" style="float:left;margin-top:13px" ';
				if (in_array($i,$res)) echo 'checked ';
				echo '/><textarea name="a-'.$i.'" rows="2" style="width:750px;margin-left:20px;font-size:'.$mvto.';color:#'.$mctof.'">'.$odgovori[$ii].'</textarea></div>';
			}
			$ix= $odgovora+1;
			for ($i = $ix; $i <= 10; $i++) echo '<div><input type="checkbox" name="t-'.$i.'" value="1" style="float:left;margin-top:13px" /><textarea name="a-'.$i.'" rows="2" style="width:750px;margin-left:20px;font-size:'.$mvto.';color:#'.$mctof.'"></textarea></div>';
			
		echo '</div>';

	echo '<div style="width:750px;padding:5px 5px 5px 45px;background:#'.$mcfbcg.';color:#'.$mcff.'">Grupa: <input type="text" name="grupa" value="'.$grupa.'"><a name="dole" /><input type="submit" value="osveži" style="margin-left:435px;width:100px" /></div></form>';

}
?>
	
	</div>
</div>
</body>
</html>