<?php
include('db.php');
$db = mysqli_select_db($link, "giftkarma_data");
if(!$link) die ($link->error);
mysqli_query($link, "SET NAMES 'utf8'");
$qrcode = $_GET['qrcode']; //抓網頁網址資料
$language = $_GET['language'];
$path="upload/";
$query = "SELECT * FROM gk " ; //用網頁網址資料去找符合資料庫的東西
$result = mysqli_query($link,$query);
$num=mysqli_num_rows($result); //取gk總筆數資料

for($i=0;$i<$num;$i++){
	$row[$i] = mysqli_fetch_array($result);

	
	/*$myObj->id[$i] = $row[$i][0] ;
	$myObj->lat[$i] = $row[$i][1] ;
	$myObj->lng[$i] = $row[$i][2] ;
	$myObj->time_[$i] = $row[$i][3] ;
	$myObj->age[$i] = $row[$i][4] ;
	$myObj->email[$i] = $row[$i][5] ;
	$myObj->message[$i] = $row[$i][6];
	$myObj->pic[$i] = $row[$i][7] ;
	$myObj->language[$i] = $row[$i][8] ;
	$myObj->state[$i] = $row[$i][9] ;
	$myObj->ip[$i] = $row[$i][10] ;
	$myObj->qrcode[$i] = $row[$i][11] ;
	$myObj->HowYouGet[$i] = $row[$i][12] ;
	$myJSON = json_encode($myObj, JSON_UNESCAPED_UNICODE);*/
	
	//$story[] = array('id'=>$row[$i][0],'lat'=>$row[$i][1],'lng'=>$row[$i][2],'time_'=>$row[$i][3],'age'=>$row[$i][4],'email'=>$row[$i][5],'message'=>$row[$i][6],'pic'=>$row[$i][7],'language'=>$row[$i][8] ,'state'=>$row[$i][9],'ip'=>$row[$i][10],'qrcode'=>$row[$i][11],'HowYouGet'=>$row[$i][12]);	
	//$story[] = ('id'=>$row[$i][0],'lat'=>$row[$i][1],'lng'=>$row[$i][2],'time_'=>$row[$i][3],'age'=>$row[$i][4],'email'=>$row[$i][5],'message'=>$row[$i][6],'pic'=>$row[$i][7],'language'=>$row[$i][8] ,'state'=>$row[$i][9],'ip'=>$row[$i][10],'qrcode'=>$row[$i][11],'HowYouGet'=>$row[$i][12]);
	//$myJSON = json_encode($story[$i], JSON_UNESCAPED_UNICODE);  //後面是去處理中文unicode問題 取消PHP自動把中文轉成unicode問題
	//echo $myJSON;
	
	$name[] = [
	  'id' => $row[$i][0],
	  'lat'=> $row[$i][1],
	  'lng' => $row[$i][2],
	  'time_'=> $row[$i][3],
	  'age' => $row[$i][4],
	  'email'=> $row[$i][5],
	  'message' => $row[$i][6],
	  'pic' => $row[$i][7],
	  'language'=> $row[$i][8],
	  'state' => $row[$i][9],
	  'ip'=> $row[$i][10],
	  'qrcode'=> $row[$i][11],
	  'HowYouGet' => $row[$i][12],
	];

}echo json_encode($name);
?>