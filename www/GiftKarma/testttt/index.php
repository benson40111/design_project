<!DOCTYPE html>

<?php
	include('db.php');
	$db = mysqli_select_db($link, "giftkarma_data");
	if(!$link) die ($link->error);
	mysqli_query($link, "SET NAMES 'utf8'");
	$qrcode = $_GET['qrcode'];
	$language = $_GET['language'];
	$path="upload/";
	$query = "SELECT * FROM gk";
	$result = mysqli_query($link,$query);
	$num=mysqli_num_rows($result); //取gk總筆數資料
    echo $num;
?>
<html lang="tw">

<head>
		<title>Gift Karma Story</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css" />
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../vendor/jRange-master/jquery.range.js"></script>

</head>
	<body>
		<div class="imgBox">
			<img class="IMG" style="width: 500px;" src="201805151651456.jpeg" />
		</div>
		<button class="left">左</button>
		<button class="right">右</button>
		<p id="show"> </p>
	</body>
	<script>
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				myObj = JSON.parse(this.responseText);
				var i =1;
				$('.left').click(function(){
					i++;
				if((myObj.pic[i]=="") || (myObj.pic[i]==undefined) || (myObj.pic[i]==null)){ //沒有照片空值的話 用我們給他的照片
						myObj.pic[i] = '2018042322573352.jpg';
					}
					if (i>(<?php echo $num; ?>)){ //判斷點得數目有無超過最大值 有就停下
						i=(<?php echo $num; ?>);
					}
					$('.IMG').attr('src','../first/upload/'+ myObj.pic[i]);
					$('#show').text(myObj.id[i]);
				});
				$('.right').click(function(){
					i--;
				if((myObj.pic[i]=="") || (myObj.pic[i]==undefined) || (myObj.pic[i]==null)){ //沒有照片空值的話 用我們給他的照片
						myObj.pic[i] = '2018042322573352.jpg';
					}
					if (i<0){ //判斷點得數目有無小於0 有就停下
						i=0;
					}
					$('.IMG').attr('src','../first/upload/'+ myObj.pic[i]);
					$('#show').text(myObj.id[i]);				
				})
			}
		};
		xmlhttp.open("GET", "JSON.php", true);
		xmlhttp.send();


		/*$('.left').click(function(){

			$('.show').text('');
			//$('.IMG').attr('src','<?php echo $row[$j][7] ?>');
		});
		/*$('.right').click(function(){
			$('.show').text('<? echo $j;?>');
			<? $j--; ?>
			$('.show').text('<? echo $j;?>');
			$('.IMG').attr('src','<?php echo $row[$j][7] ?>');
			
		});*/
	
		
	</script>
</html>
