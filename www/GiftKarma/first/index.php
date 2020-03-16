<!DOCTYPE html>

<?php

//error_reporting(E_ALL);

include('class.upload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

// set variables
$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : 'tmp');
$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);

include('db.php');
$db = mysqli_select_db($link, "giftkarma_data");
mysqli_query($link, "SET NAMES 'utf8'");
$qrcode = $_GET['qrcode'];
/*$language = $_GET['language'];
	$HowYouGet = $_POST[HowYouGet];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$pic = $_POST['pic'];
	$path="upload/";*/
date_default_timezone_set("Asia/Taipei");
$time = date("Y-m-d h:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

if (count($_POST) > 0) {
	if ($_FILES["pic"]["tmp_name"] != "") {
		$ext = explode(".", $_FILES["pic"]["name"]);
		$f = date("YmdHis") . "." . $ext[1]; //資料庫副檔名
		$x = date("YmdHis");             //壓縮用不用副檔名  
		//move_uploaded_file($_FILES["pic"]["tmp_name"], $path.$f);  //将上传的文件移动到新位置

		/*壓縮 處理照片*/
		$handle = new upload($_FILES['pic']);
		if ($handle->uploaded) {
			$handle->file_new_name_body   = $x;
			$handle->image_resize         = true;
			$handle->image_x              = 600;
			$handle->image_ratio_y        = true;
			$handle->process('upload/');
			if ($handle->processed) {
				$handle->clean();
			} else {
				echo 'error : ' . $handle->error;
			}
		}
	}
	$sql = "INSERT INTO gk (pic,age,email,message,HowYouGet,qrcode,ip,time)  VALUES ('$f','$_POST[age]','$_POST[email]','$_POST[message]','$_POST[HowYouGet]','$qrcode','$ip','$time')";  //新增資料
	//mysqli_query($link,$sql)or die ("無法新增".mysql_error()); //執行sql語法	
	if (mysqli_query($link, $sql)) { //執行sql語法	
		$same_qrcode = "SELECT * FROM gk where qrcode = '$qrcode'";
		$many_qrcode= mysqli_query($link, $same_qrcode);
		$num = 0 ;
		$many_email = array();
		while ($row = mysqli_fetch_array($many_qrcode, MYSQLI_ASSOC)) {
			print_r( $row['email']+" ");
			$many_email[$num] = $row['email'] ;
			$num += 1 ;
		}
		$mail = new PHPMailer();
		try {
			//Server settings
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'M10817030@gemail.yuntech.edu.tw';                     // SMTP username
			$mail->Password   = 'lkk54321i';
			$mail->Port = 465;
			$mail->CharSet = "utf-8";
			$mail->SMTPSecure = 'ssl';

			//Recipients
			$mail->setFrom('M10817030@gemail.yuntech.edu.tw', 'M10817030');
			for($x = 0; $x < $num; $x++) {
				$mail->addBCC($many_email[$x], $many_email[$x]);
				echo $many_email[$x];
				echo "<br>";
			}
			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

			if (!$mail->send()) {
				echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "Message sent!";
			}
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		//header("Refresh:0; url=../story/JSON.php");
		//exit('<script> alert("送出成功!");location.href="http://www.imdr.yuntech.edu.tw/GiftKarma/story/index.php?qrcode='.$qrcode.'";</script>');
		//exit('<script> alert("送出成功!");location.href="http://www.imdr.yuntech.edu.tw/GiftKarma/Result/StoryM/Story_M.php?qrcode=' . $qrcode . '";</script>');
	} else {
		exit('<script> alert("送出失敗!請告知我們錯誤情況!");location.href="mailto:yuntechimdr@gmail.com";</script>');
	}
}
//mysql_close($link); //關閉資料庫連結
//header("location:index.php?qrcode=".$qrcode);  //回index.php

?>
<html lang="tw">

<head>
	<title>Gift Karma</title>
	<link rel="Shortcut Icon" type="image/x-icon" href="../icon.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="first.css" charset="utf-8" />
	<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css" />
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/jRange-master/jquery.range.js"></script>
	<link rel="stylesheet" href="../vendor/jRange-master/jquery.range.css" />

	<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
	<script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script src="main.js"></script>
</head>

<body>
	<!-- 選按鈕 -->
	<div id="ProjectName" class="center">
		<div class="firstChoose center">
			<img class="Logo" src="img/LogoWhite.png" />
			<div class="column">
				<span class="topName">Gift Karma - 傳善計畫</span>
				<div class="btnOut row center">
					<a class="btn writedata">開始寫故事 <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a class="btn" onclick="location.href='../Result/StoryM/Story_M.php?qrcode=<?php echo $qrcode; ?>';" style="cursor :pointer;">查看紀錄 <i class="fa fa-eye" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner -->
	<div id="ProjectBanner">
		<div class="banner">
			<div class="triangle"></div>
		</div>
	</div>
	<!-- ProjectForm -->
	<div id="ProjectForm">
		<form enctype="multipart/form-data" class="Karmaer column center" method="post" id="form1" name="form1" action="">
			<!--Form裡照片區-->
			<div class="c_p row">
				<label class="photo center column">
					<input style="display:none; " name="pic" type="file" onchange="readURL(this)" accept="image/*" targetID="preview_progressbarTW_img" />
					<img class="camera" src="img/camera.png"></img>
					<span class="cameraWord center">拍張照！</span>
				</label>
				<img id="preview_progressbarTW_img" name="preview" class="center" src=" ">
				<!--用來預覽的照片-->
			</div>
			<!--Form裡填資料區-->
			<div class="writeData column">
				<select name="HowYouGet" class="select_place">
					<option value="送出代幣">我要送出這顆代幣給幫助我的人</option>
					<option value="收到代幣">我今天被幫助，收到這顆代幣</option>
				</select>
				<div><span class="questionWord">我的年齡</span>
					<!--<input type="hidden" id="age-slider" value="1">-->
					<p>
						<label for="age-slider" style="border:0; color:#759736; font-size:40px;font-weight:bold;">年齡</label>
						<input type="text" id="age-slider" name="age" style="border:0; color:#759736; font-weight:bold; font-size:40px">
					</p>

					<div id="slider"></div>
				</div>
				<!--<input type="hidden" id="ageRange" name="age" value="6-12" />-->
				<div><span class="questionWord">電子郵件</span><input type="email" class="emailCss" name="email" placeholder="這顆代幣接續傳遞,會發送信件給您"></input></div>
				<textarea id="Story" class="storyWord" name="message" placeholder="今天..."></textarea>
			</div>
			<input type="button" class="btn btn-sub" value="送出" onclick="formSubmit()" ;></input>
		</form>
	</div>
	<!-- bottom -->
	<div id="bottomPage">
	</div>
	<!--隱藏的資料-->
	<script>
		/*
		$(document).ready(function() {
			$('#age-slider').jRange({
				from: 1,
				to: 6,
				step: 1,
				scale: [6, 12, 18, 35, 50, 100],
				format: '%s',
				width: 800,
				showLabels: false,
				snap: true,
				isRange: false
			});
		});
		setInterval(function() {
			if ($('#age-slider').val() == 1)
				$('#ageRange').val("0-6");
			if ($('#age-slider').val() == 2)
				$('#ageRange').val("6-12");
			if ($('#age-slider').val() == 3)
				$('#ageRange').val("12-18");
			if ($('#age-slider').val() == 4)
				$('#ageRange').val("18-35");
			if ($('#age-slider').val() == 5)
				$('#ageRange').val("35-50");
			if ($('#age-slider').val() == 6)
				$('#ageRange').val("50-100");
		}, 30)
		*/

		$('.writedata').click(function() {
			$('html,body').animate({
				scrollTop: $('#ProjectForm').offset().top
			}, 800);
		})

		function readURL(input) {
			if (input.files && input.files[0]) {
				var imageTagID = input.getAttribute("targetID");
				var reader = new FileReader();
				reader.onload = function(e) {
					var img = document.getElementById(imageTagID);
					img.setAttribute("src", e.target.result)
					$("#preview_progressbarTW_img").css({
						'width': 'auto',
						'height': 'auto',
						'max-width': '450px',
						'max-height': '337.5px'
					});
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		/*檢查內容*/
		function formSubmit() {
			var frm = document.forms["form1"];
			if (frm.message.value == "") {
				alert("請填寫傳善的經歷!");
				return false;
			} else if (frm.pic.value == "") {
				alert("請加入照片");
				return false;
			} else {
				document.getElementById("form1").submit();
			}

		}
	</script>
	<?php

	/*if($_FILES['pic'] != 0){
		$handle = new upload($_FILES['pic']);
		if ($handle->uploaded) {
		  $handle->file_new_name_body   = $f;
		  $handle->image_resize         = true;
		  $handle->image_x              = 600;
		  $handle->image_ratio_y        = true;
		  $handle->process('upload/');
		  if ($handle->processed) {
			echo 'image resized';
			$handle->clean();
		  } else {
			echo 'error : ' . $handle->error;
		  }
		}
	}else{ echo "沒照片阿";}*/

	?>
</body>

</html>