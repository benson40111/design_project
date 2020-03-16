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
	for($i=0;$i<$num;$i++){
		$row[$i] = mysqli_fetch_array($result);
	}
?>
<html lang="tw">

<head>
		<title>Gift Karma Story</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="story.css" charset="utf-8" />
		<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css" />
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../vendor/jRange-master/jquery.range.js"></script>
</head>

	<body>
		<!-- topImg -->
		<div id="topImg" class="center"><img class="topImg" src="img/topImg.png" /></div>
		<!-- 故事 -->
		
		<div id="Story">
			<div class="titleCss story center"><span>Gift Karma 的傳善故事</span></div>
			<i class="left fa-5x fa fa-angle-left but-i"></i>
			<i class="right fa-5x fa fa-angle-right but-i"></i>
			<!-- 更新 -->
			<<div class="sliderDiv sliderDiv_A"> 
				<div class="sliderStoryOut"> 
					<div class="sliderPic center"><img class="pic showP_L" src="../first/upload/<?php echo  $row[$num-1][7];?>" /></div>
					<div class="slideDate "><span class="time showT_L"><?php  echo  $row[$num-1][3]; ?></span></div>
					<div class="sliderWord "><p class="Word showW_L"><?php echo  $row[$num-1][6]; ?></p></div>
				</div>
			</div>
			<!-- 現在主要 -->
			<div class="sliderDiv sliderDiv_main"> <!--照片外框定位基準 讓sliderStoryOut置中-->

				<div class="sliderStoryOut"> <!--sliderStoryOut內的物件回到block 不要置中排列-->
					<div class="sliderPic center"><img class="pic showP_main" src="../first/upload/<?php echo  $row[$num-1][7];?>" /></div>
					<div class="slideDate "><span class="time showT_main"><?php  echo  $row[$num-1][3]; ?></span></div>
					<div class="sliderWord "><p class="Word showW_main"><?php echo  $row[$num-1][6]; ?></p></div>
				</div>
			</div>
			<!-- 舊資料 待出 -->
			<div class="sliderDiv sliderDiv_B"> <!--照片外框定位基準 讓sliderStoryOut置中-->

				<div class="sliderStoryOut"> <!--sliderStoryOut內的物件回到block 不要置中排列-->
					<div class="sliderPic center"><img class="pic showP_R" src="../first/upload/<?php echo  $row[$num-1][7];?>" /></div>
					<div class="slideDate "><span class="time showT_R"><?php  echo  $row[$num-2][3]; ?></span></div>
					<div class="sliderWord "><p class="Word showW_R"><?php echo  $row[$num-2][6]; ?></p></div>
				</div>
			</div>
			<div class="show"></div>
	</body>
</html>	
	<script>	
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					myObj = JSON.parse(this.responseText);
					var i =<?php echo $num-1; ?>;
					
					$('.left').click(function(){
						console.log(i);
						i++;
						//$('.show').text(i);
						if(myObj.pic[i]=="" || myObj.pic[i]==undefined || myObj.pic[i]==null){ //沒有照片空值的話 用我們給他的照片
							myObj.pic[i] = '2018042322573352.jpg';
						}
						if (i>(<?php echo $num-1; ?>)){ //判斷點得數目有無超過最大值 有就停下
							i=(<?php echo $num-1; ?>);
						}
						//左邊資料存回位置
						$('.showP_L').attr('src','../first/upload/'+ myObj.pic[i+1]);
						$('.showT_L').text(myObj.time_[i+1]);
						$('.showW_L').text(myObj.message[i+1]);
						
						//現在的資料存回位置
						$('.showP_main').attr('src','../first/upload/'+ myObj.pic[i]);
						$('.showT_main').text(myObj.time_[i]);
						$('.showW_main').text(myObj.message[i]);
						
						
						//右邊資料存回位置
						$('.showP_R').attr('src','../first/upload/'+ myObj.pic[i-1]);
						$('.showT_R').text(myObj.time_[i-1]);
						$('.showW_R').text(myObj.message[i-1]);
						
						/*$(".sliderDiv").animate({
							right:"+=500px"  
						},1000);*/
						
					});
					$('.right').click(function(){
						i--;
					if((myObj.pic[i]=="") || (myObj.pic[i]==undefined) || (myObj.pic[i]==null)){ //沒有照片空值的話 用我們給他的照片
							myObj.pic[i] = '2018042322573352.jpg';
						}
						if (i<0){ //判斷點得數目有無小於0 有就停下
							i=0;
						}
						//左邊資料存回位置
						$('.showP_L').attr('src','../first/upload/'+ myObj.pic[i+1]);
						$('.showT_L').text(myObj.time_[i+1]);
						$('.showW_L').text(myObj.message[i+1]);
						
						//現在的資料存回位置
						$('.showP_main').attr('src','../first/upload/'+ myObj.pic[i]);
						$('.showT_main').text(myObj.time_[i]);
						$('.showW_main').text(myObj.message[i]);
						
						
						//右邊資料存回位置
						$('.showP_R').attr('src','../first/upload/'+ myObj.pic[i-1]);
						$('.showT_R').text(myObj.time_[i-1]);
						$('.showW_R').text(myObj.message[i-1]);
						/*$(".sliderDiv").animate({
							right:"-=500px"  
						},1000);*/
						//$('.show').text(i);					
					});
				}
			};
		
		xmlhttp.open("GET", "JSON.php", true);
		xmlhttp.send();
		
	/*$(function(){
		var len = 50; // 超過50個字以"..."取代
		$(".Word").each(function(i){
			if($(this).text().length>len){
				$(this).attr("title",$(this).text());
				var text=$(this).text().substring(0,len-1)+"...";
				$(this).text(text);
			}
		});
	});*/
	</script>

