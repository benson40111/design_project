<?php
	include('db.php');
	$qrcode = $_GET['qrcode'];
	$db = mysqli_select_db($link, "giftkarma_data");
	mysqli_query($link, "SET NAMES 'utf8'");
	date_default_timezone_set("Asia/Taipei");
?>
<!DOCTYPE html>

<head>
	<title>Gift Karma Story</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="../../icon.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="storyMO.css" charset="utf-8" />
	<link rel="stylesheet" href="../../css/font-awesome-4.7.0/css/font-awesome.min.css" />
	<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>

</head>
<html>
<a href="https://reurl.cc/rQayk" class="FB" target="_blank"><img src="../img/FBIcon.png" width="75px" height="75px"></a>
<div id="Top">
	<img class="LogoImg" src="img/Logo.png" /><br>
	<span class="StoryTrace">代幣足跡</span>
	<div class="MyCoin" onclick="location.href='../StoryM/Story_M.php?qrcode=<?php echo $qrcode; ?>';" style="cursor :pointer;"><img src="img/OtherCoin-Ga.png" /><span>我的代幣</span></div>
	<div class="OtherCoin" onclick="location.href='Story_MO.php?qrcode=<?php echo $qrcode; ?>';" style="cursor :pointer;"><img src="img/MyCoin-Gr.png" /><span>傳善計畫</span></div>
</div>
<div id="show">
	<?php
	$sql = "SELECT * FROM gk ORDER BY time DESC";
	$many_qrcode = mysqli_query($link, $sql);
	$num = 0;

	while ($row = mysqli_fetch_object($many_qrcode)) {
	?>
		<div class="box">
			<div class="boxTop">
				<div class="boxWord"><?php echo $row->message; ?></div>
				<div class="boxPic"><?php echo "<img class='Pic' src='../../first/upload/" . $row->pic . "' />" ?></div>
			</div>
			<div class="boxBottom">
				<div class="boxCoinNum">
					<?php
					if ($row->lat != "0.000000") {
						$request_url = "https://maps.googleapis.com/maps/api/geocode/json?&latlng=$row->lat,$row->lng&language=zh-TW&key=AIzaSyBvIwRmhLcuhnE1mp1N7QS1C1B2qMcolVE";
						$origin_json = json_decode(file_get_contents($request_url), false);
						$decode_json = $origin_json->{'plus_code'}->{'compound_code'};
						echo explode(" ", $decode_json)[1];
					} else {
						echo "地球";
					}

					?>
				</div>
				<div class="boxDate"><?php echo date("Y-m-d", strtotime($row->time)); ?></div>
			</div>
		</div>
	<?php $num += 1;
	} ?>
</div>

</html>