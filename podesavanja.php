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
	<title>test.ME | podešavanja</title>
	<link type='text/css' rel='stylesheet' href='style.css' />
	<script type="text/javascript" src="js/jscolor/jscolor.js"></script>
	<style type="text/css">
		#wrapper input {
			line-height:20px;
			vertical-align: middle;
		}
		#wrapper select {
			height:22px;
		}
	</style>
</head>
<body>
<?php
if (isset($_GET['a'])) {

	$sql="SELECT * FROM podesavanja";
	$result=mysqli_query($mysqli,$sql) or die;
	while($row=$result->fetch_assoc()) {
		$element=$row['element'];
		$svojstvo=$row['svojstvo'];
		${$element}=mysqli_real_escape_string($mysqli,$_POST[$element]);

	$sql='UPDATE podesavanja SET `svojstvo`="'.${$element}.'" WHERE `element`="'.$element.'"';
	mysqli_query($mysqli,$sql) or die;

	}
}

	$sql="SELECT * FROM podesavanja";
	$result=mysqli_query($mysqli,$sql) or die;
	while($row=$result->fetch_assoc()) {
		$element=$row['element'];
		$svojstvo=$row['svojstvo'];
		${$element}=mysqli_real_escape_string($mysqli,$svojstvo);
	}

?>

<div id="wrapper" style="background:#<?php echo $pcpp; ?>">

	<div id="header" style="background:#<?php echo $pchbcg; ?>">
	
		<div style="float:left">
			<a href="index.php" style="padding:0 0 5px 10px;color:#<?php echo $pchtm; ?>; ?>;text-decoration:none">test.ME</a><span style="color:#pchver"> 1.5</span><span style="color:#<?php echo $pchtm; ?>"> - podešavanja</span>
		</div>
	
	</div>
	<div>
		<div style="padding:5px;border:3px black "><b>Podešavanja izgleda</b></div>
		<form method="POST" action="podesavanja.php?a=1">
			<div id="uv1">Glavna strana:</div>
			<div id="wrapper" style="width:800px;height:880px;line-height:26px">
				<div id="podbox1">
					boja pozadine gornjeg menija:<br/>
					boja reči "test.ME":<br/>
					boja broja verzije:<br/>
					boja fonta gornjeg menija:<br/>
					boja pozadine donjeg menija:<br/>
					boja fonta donjeg menija:<br/><br/>
				</div>
				<div id="podbox2">
					<input type="text" class="color" name="mchbcg" value="<?php echo $mchbcg; ?>"/><br/>
					<input type="text" class="color" name="mchtm" value="<?php echo $mchtm; ?>"/><br/>
					<input type="text" class="color" name="mchver" value="<?php echo $mchver; ?>"/><br/>
					<input type="text" class="color" name="mchf" value="<?php echo $mchf; ?>"/><br/>
					<input type="text" class="color" name="mcfbcg" value="<?php echo $mcfbcg; ?>"/><br/>
					<input type="text" class="color" name="mcff" value="<?php echo $mcff; ?>"/><br/><br/>
				</div>
				<div id="podbox3">
					default je "003366"<br/>
					default je "FFFFFF"<br/>
					default je "5588CC"<br/>
					default je "FFFFFF"<br/>
					default je "003366"<br/>
					default je "FFFFFF"<br/><br/>
				</div>
				<div id="uv2">Na testu</div>
				<div id="podbox1">
					<br/>
					boja fonta za pitanje:<br/>
					boja fonta za odgovore:<br/>
					veličina fonta za pitanje:<br/>
					veličina fonta za odgovore:<br/>
					pozadina neparnog odgovora:<br/>
					pozadina parnog odgovora:<br/><br/>
				</div>
				<div id="podbox2">
					<br/>
					<input type="text" class="color" name="mctpf" value="<?php echo $mctpf; ?>"/><br/>
					<input type="text" class="color" name="mctof" value="<?php echo $mctof; ?>"/><br/>
					<select name="mvtp" style="margin-bottom:4px">
						<option <?php if($mvtp==12) echo 'selected'; ?>>12</option>
						<option <?php if($mvtp==14) echo 'selected'; ?>>14</option>
						<option <?php if($mvtp==16) echo 'selected'; ?>>16</option>
						<option <?php if($mvtp==18) echo 'selected'; ?>>18</option>
						<option <?php if($mvtp==20) echo 'selected'; ?>>20</option>
						<option <?php if($mvtp==22) echo 'selected'; ?>>22</option>
						<option <?php if($mvtp==24) echo 'selected'; ?>>24</option>
					</select><br/>
					<select name="mvto" style="margin-bottom:4px">
						<option <?php if($mvto==12) echo 'selected'; ?>>12</option>
						<option <?php if($mvto==14) echo 'selected'; ?>>14</option>
						<option <?php if($mvto==16) echo 'selected'; ?>>16</option>
						<option <?php if($mvto==18) echo 'selected'; ?>>18</option>
						<option <?php if($mvto==20) echo 'selected'; ?>>20</option>
						<option <?php if($mvto==22) echo 'selected'; ?>>22</option>
						<option <?php if($mvto==24) echo 'selected'; ?>>24</option>
					</select><br/>
					<input type="text" class="color" name="mctnpo" value="<?php echo $mctnpo; ?>"/><br/>
					<input type="text" class="color" name="mctpo" value="<?php echo $mctpo; ?>"/><br/><br/>
				</div>
				<div id="podbox3">
					<br/>
					default je "000000"<br/>
					default je "000000"<br/>
					default je "16"<br/>
					default je "16"<br/>
					default je "FFFFFF"<br/>
					default je "DDDDDD"<br/><br/>
				</div>
				<div id="uv2">Na rezultatima testa</div>
				<div id="podbox1">
					<br/>
					boja za tačne odgovore:<br/>
					boja za propuštene odgovore:<br/>
					boja za pogrešne odgovore:<br/><br/>
				</div>
				<div id="podbox2">
					<br/>
					<input type="text" class="color" name="mcrt" value="<?php echo $mcrt; ?>"/><br/>
					<input type="text" class="color" name="mcrppo" value="<?php echo $mcrppo; ?>"/><br/>
					<input type="text" class="color" name="mcrpo" value="<?php echo $mcrpo; ?>"/><br/><br/>
				</div>
				<div id="podbox3">
					<br/>
					default je "0000FF"<br/>
					default je "009900"<br/>
					default je "FF0000"<br/><br/>
				</div>
				<div id="uv2">Na unosu</div>
				<div id="podbox1">
					<br/>
					boja pozadine za neparne redove:<br/>
					boja pozadine za parne redove:<br/><br/>
				</div>
				<div id="podbox2">
					<br/>
					<input type="text" class="color" name="mcunp" value="<?php echo $mcunp; ?>"/><br/>
					<input type="text" class="color" name="mcup" value="<?php echo $mcup; ?>"/><br/><br/>
				</div>
				<div id="podbox3">
					<br/>
					default je "D2E6C7"<br/>
					default je "ADC9ED"<br/><br/>
				</div>
				<div id="uv2">Na ispravkama</div>
				<div id="podbox1">
					<br/>
					boja pozadine za ispravke:<br/>
				</div>
				<div id="podbox2">
					<br/>
					<input type="text" class="color" name="icp" value="<?php echo $icp; ?>"/><br/>
				</div>
				<div id="podbox3">
					<br/>
					default je "DDDDFF"<br/>
				</div>
				<div id="uv1"><b>Ova strana:</b></div>
				<div id="podbox1">
					boja pozadine gornjeg menija:<br/>
					boja pozadine prostora za podešavanja:<br/>
					boja reči "test.ME":<br/>
					boja broja verzije:<br/>
					boja pozadine donjeg menija:<br/>
					boja fonta donjeg menija:<br/><br/>
				</div>
				<div id="podbox2">
					<input type="text" class="color" name="pchbcg" value="<?php echo $pchbcg; ?>"/><br/>
					<input type="text" class="color" name="pcpp" value="<?php echo $pcpp; ?>"/><br/>
					<input type="text" class="color" name="pchtm" value="<?php echo $pchtm; ?>"/><br/>
					<input type="text" class="color" name="pchver" value="<?php echo $pchver; ?>"/><br/>
					<input type="text" class="color" name="pcfbcg" value="<?php echo $pcfbcg; ?>"/><br/>
					<input type="text" class="color" name="pcff" value="<?php echo $pcff; ?>"/><br/><br/>
				</div>
				<div id="podbox3">
					default je "006633"<br/>
					default je "FFFFFF"<br/>
					default je "FFFFFF"<br/>
					default je "55CC88"<br/>
					default je "006633"<br/>
					default je "FFFFFF"<br/><br/>
				</div>
			</div>
			<div style="padding:5px;border:3px black "><b>Podešavanja sistema</b></div>
			<div id="uv1">Glavna strana:</div>
			<div style="width:800px;height:65px">
				<div id="podbox1">
					Ignorisanje nepopunjenih odgovora:<br/>
					Random pitanja:<br/>
				</div>
				<div id="podbox2">
				<?php
					echo 'da <input type="radio" name="ign_blank" value="1" style="margin-right:20px"';
					if ($ign_blank==1) echo ' checked';
					echo '/>ne <input type="radio" name="ign_blank" value="0"';
					if ($ign_blank==0) echo ' checked';
					echo '/><br/>';
					echo 'da <input type="radio" name="rndq" value="1" style="margin-right:20px"';
					if ($rndq==1) echo ' checked';
					echo '/>ne <input type="radio" name="rndq" value="0"';
					if ($rndq==0) echo ' checked';
					echo '/><br/>';
				?>
				</div>
				<div id="podbox3">
					default je "ne"<br/>
					default je "ne"<br/>
				</div>
			</div>
			<div style="width:790px;padding:5px;background:#<?php echo $pcfbcg; ?>;color:#<?php echo $pcff; ?>"><a name="dole" /><input type="submit" value="osveži" style="margin-left:325px;width:200px" /></div>
		</form>
	</div>
	
</div>
</body>
</html>