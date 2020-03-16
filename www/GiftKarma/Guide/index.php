<!DOCTYPE html>

<?
$qrcode = $_GET["qrcode"];
$language = $_GET["language"];
if(empty($qrcode)){

}
?>
<script>
function language_choose() {
	$('#language_choose').modal('show'); 
}
</script>

<html lang="tw">

<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="robots" content="noindex">
		<meta name="googlebot" content="noindex">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="author" content="http://facebook.com/giftkarmaplan">
		<meta property="article:publisher" content="http://facebook.com/giftkarmaplan"/>
		<meta property="article:author" content="http://facebook.com/giftkarmaplan"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="shortcut icon" href="/white/images/GK/favicon.ico">
		<meta property="og:image" content="http://localhost/Gift_Karma.jpg"/>

		<meta name="keywords" itemprop="keywords" content="Yuntech,Yun,Tech,國立,雲林,科技,大學,NYUST,雲科大,雲科,National,Yunlin,University,of,Science,and,Technology,數位,媒體,設計,研究,研究所,碩士,博士,創新,媒體,實驗,實驗室,Gift,Karma,Give,Come,On,Com'On,傳善,代幣,Token,台灣,西班牙,荷蘭,傳遞,善意,分享,Share,幫助,Help,影響,Yoga,Karmaner,吳則賢,鄭蕙心,李翊駿,林宇涵,柯雅羚,周玟慧,薛會宇,鄭伊婷,玉部瑋,柯政佑,葉淳禎,吳宗憲,imdr,giftkarma,計畫,IMDR,Innovative,Media,Design,Research"/>

		<meta name="description" content="我們邀請你停下腳步，分享你所經歷的友善緣分，用一顆小小的代幣，發揮你的社會影響力，啟動友善的正循環，讓代幣形成不斷延續的故事鏈吧。"/>
		<meta property="og:description" content="我們邀請你停下腳步，分享你所經歷的友善緣分，用一顆小小的代幣，發揮你的社會影響力，啟動友善的正循環，讓代幣形成不斷延續的故事鏈吧。"/>

		<link rel="canonical" href="http://localhost" />
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', '');
		</script>

		<!-- Matomo -->
		<script type="text/javascript">
		  var _paq = _paq || [];
		  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		  _paq.push(["setCookieDomain", "*.localhost"]);
		  _paq.push(["setDomains", ["*.localhost","*.localhost","*.localhost","*.localhost"]]);
		  _paq.push(['trackPageView']);
		  _paq.push(['enableLinkTracking']);
		  (function() {
			var u="https://giftkarma.com/piwik/";
			_paq.push(['setTrackerUrl', https://giftkarma.com']);
			_paq.push(['setSiteId', '2']);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.defer=true; g.src='https://giftkarma.com'; s.parentNode.insertBefore(g,s);
		  })();
		</script>
		<noscript><p><img src="https://giftkarma.com" style="border:0;" alt="" /></p></noscript>
		<!-- End Matomo Code -->
		<!-- Matomo Image Tracker-->
		<img src="https://giftkarma.com" style="border:0" alt="" />
		<!-- End Matomo -->

    <?php
			if($language=="TW"){?>
				<title>Gift Karma - 中文</title>
			<?}else if($language=="EN"){?>
				<title>Gift Karma - English</title>
			<?}else if($language=="ES"){?>
				<title>Gift Karma - Español</title>
			<?}else{?>
				<title>Gift Karma - Give Com'on!</title>
	<?}?>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age_0411.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/scroll.js"></script>
	<style>
	html,body{
		width:100%;	
	}
	/*語言钮*/
	.btn-chooselanguae-again{
		color: #759523;
		background-color: white;
		font-size:5vw;
		margin-bottom:20px;
		border: solid 5px #759523;
	}
	.btn-chooselanguae-again:hover{
		color: white;
		background-color: #759523;
		font-size:5vw;
	}
	.language_btn{
		color:#222222;
		padding:5px;
		font-style:none;
		border: solid 1px white;
		margin: 0 5px;
	}
	.language_btn:hover{
		color:#759523;
		border: solid 1px #759523;
		transition: color 0.5s ease-out;
		transition: border 0.5s ease-out;
	}
	#mainNav .navbar-brand:hover, #mainNav .navbar-brand:focus {
	  color: #759532;
	}

	#mainNav .navbar-toggler {
	  font-size: 12px;
	  padding: 8px 10px;
	}

	#mainNav .navbar-nav > li > a {
	  font-size: 11px;
	  letter-spacing: 2px;
	  text-transform: uppercase;
	  color: #759532;
	}

	/*#mainNav .navbar-nav > li > a.active {
	  border: solid 1px #759532;
	  background-color: transparent;
	}*/

	#mainNav .navbar-nav > li > a.active:hover {
	  background-color: transparent;
	}

	/*#mainNav .navbar-nav > li > a,
	#mainNav .navbar-nav > li > a:focus {
	  color: #759532;
	}*/

	#mainNav .navbar-nav > li > a:hover,
	#mainNav .navbar-nav > li > a:focus:hover {
	  color: #759532;
	}	
	header .masthead{
		width:100%;
	}
	header img.header-img{
	  border: none;
	 /* background-image: url('../img/P1.jpg');
	  background-repeat: no-repeat;
	  background-position: center; 
	  background-size: 100% auto;*/
	  z-index: -99;
	  min-height: 50px;
	  width: 100%;
	  height: auto;
	  position: absolute;
	  top: 20%;
	  /*margin-top: 25px; 
	  margin-bottom: 10px; */
	}
	.Logo a{
		text-decoration:none;
	}
	.Logo a:hover{
		color:#759532;
	}
	.row{
		margin: 0 0;
	}
	.section-heading-a {
	  position: relative;
	  top: 100%;
	  left: 20%;
	  color: #ffffff;
	  font-size: 4vw;
	  animation: opacity_ 3s forwards;
	  animation: moveup 3s forwards;
	}
	.section-heading-p{
	  position: relative;
	  top:50px;
	  color: #ffffff;
	  font-size: 1.5vw;
	  animation: opacity_ 3s forwards;
	  animation: moveup 3s forwards;
	}
	.btn_more{
		color: rgb(f, f, f);
		background-color:#759532;
		font-family: "Times New Roman", 微軟正黑體;
		letter-spacing: 2px;
		text-transform: uppercase;
		font-size: 11px;
		position: relative;
		margin-left: 80px;
		border-color: rgb(f, f, f);
		border-radius: 300px;
		padding: 15px 45px;	
	}
	#features{
		margin-top: 10%;
	}
	@media screen and (min-width: 780px) and (max-width: 950px){
		#features{
			margin-top: -0%;
		}
	}
	@media screen and (min-width: 600px) and (max-width: 779px){
		#features{
			margin-top: 20%;
		}
	}	
	@media screen and (min-width: 450px) and (max-width: 599px){
		#features{
			margin-top: 25%;
		}
	}	

	
	.btn-out{
		display: flex;
		justify-content: center;
		position:absolute;	
		left: 50%;
		transform:translateX(-50%);
	}
	@media screen and (max-width: 450px){
		.btn-out{left: 50%;transform:translateX(-50%);}
	}
	.btn-join{
		border: solid 3px #759532;
		font-size:16px;
		font-weight:700;
	}	
	#download{
		margin-top:100px;
		padding-top: 0px;
	}
	#download h3{
		color: #759532;
		text-align:center;
		margin-top:15px;
		font-weight: 600;
	}
	#download p{
		color: #759532;
		padding: 0 42.5px;
		display: inline-block;
        text-align: center; 
	}
	@media screen and (max-width: 780px){
		#download h3{font-size: 22px;}
		#download p{font-size: 18px;}
	}
	@media screen and (max-width: 450px){
		#download h3{font-size: 18px;}
		#download p{font-size: 15px;}
	}
	#contact{
		margin-top:150px;
	}
	.btm-word-out{
		width: 75%;
		position: relative;
		left:50%;
		transform:translateX(-50%);
	}
	.btm-word{
		display: block;
		text-align: center;
	}
	@media only screen and (max-width: 950px){
	.btm-word{
		display: block;
		text-align: left;
	}
	}
	@media only screen and (max-width: 600px){
		.section-heading-a {
		  font-size: 20px;
		}
		.section-heading-p{
		  font-size: 11px;
		}	
		.header-content-a{
			font-size:30px;
		}
		.header-content-p{
			margin-top:75px;
		}
		.btm-word{
			display: block;
			text-align: left;
		}		
	}
	@media only screen and (max-width: 350px){
		.section-heading-a {
		  left:15px;
		}
		.btm-word{
			display: block;
			text-align: left;
		}		
	}

	</style>
	
	<!--影片-->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
  <style type="text/css">
    #video_ {
      width: 100%;
      height: 100%; /*調整影片高*/
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
    }
	@media only screen and (max-width: 600px){
	#video_{margin: 100px auto;}
	}

    .aspectration {
      position: relative;
      height: 0;
      width: 100%;
      
    }
    .aspectration[data-ratio="16:9"] {
      padding-top: 56.25%;
    }
    .aspectration > * {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
    }
    #video_in{
      position: absolute;
    }
    .controls_video{
      z-index: 10;
      position: absolute;
	  top:80%;
      left: 7.5%;
      bottom: : 50px;
      width: 280px;
	  height: 50px;
      display: inline-block;
      transform: translateY(-50px);
      cursor: pointer;
    }

	@media only screen and (min-width: 1250px){
	.controls_video{top:82.5%;}
	}
	@media only screen and (max-width: 1250px){
	.controls_video{top:100%;}
	}
	@media only screen and (max-width: 600px){
	.controls_video{top:77.5%;}
	.download-img img{width: 150px;}
	}
	@media only screen and (max-width: 450px){
	.download-img img{width: 125px;}
	}
	
	video::-internal-media-controls-download-button {
		display:none;
	}

	video::-webkit-media-controls-enclosure {
		overflow:hidden;
	}

	video::-webkit-media-controls-panel {
		width: calc(100% + 30px); 
	}	
    .controls_video i{
      font-size: 18px;
      margin-left: 15px;
	  color: #759532;
    }
	.fulls_btn{
		position:absolute;
		right: 20px;
	}
	.controls_video i:hover{
		border-bottom:1px solid white;
		padding-bottom:2px;
	}
    #ran{
      position: absolute;
      left: 125px;
      top: 10px;
	  background:#759532;
    }
    input[type="range"]{
      -webkit-appearance: none;
      /*overflow:hidden;     /* 限定範圍 */
      position: relative;    /* 設為相對位置，為了前後區塊的絕對位置而設定 */
      top: -7.5px;
      width:100px;
      height:3px;
      outline : none;      /* 避免點選會有藍線或虛線 */
	  
    }
    input[type="range"]::-webkit-slider-thumb{
      -webkit-appearance: none;
      width:10px;
      height:10px;
      background:#759532;
      border-radius:50%;
      transition:.2s;        /* 點選放大時候的漸變時間 */
	  border: none;
    }  
	@media only screen and (max-width: 450px){
	#pause,#mute_,#ran,.fulls_btn {opacity:0;}
	#play{font-size: 30px;}
	} 	
  </style>
  </head>

<body id="page-top" <?if(empty($language)){?>onload="language_choose()"<?}?>>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="language_choose" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
			<h5 class="modal-title" id="myLargeModalLabel" style="color:#759352;font-size:18px;margin:0 auto;">Welcome Karmaner <?php echo $qrcode ?>, please choose your language!</h5>
        </div>
		  <div class="modal-body">
			  <div class="container-fluid">
				<div class="row">
					 <div class="row" style="margin:0 auto;">
						<div class="language_btn_out" style="width:100%;">
							<a  style="text-decoration:none;" href="?qrcode=<?php echo $qrcode ?>&language=TW"><span class="language_btn">中文</span></a>
							<a  style="text-decoration:none;" href="?qrcode=<?php echo $qrcode ?>&language=EN"><span class="language_btn">English</span></a>
							<a  style="text-decoration:none;" href="?qrcode=<?php echo $qrcode ?>&language=ES"><span class="language_btn">Español</span></a>
						</div>
					</div>
				</div>
			  </div>
			</div>
    </div>
  </div>
</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div class="Logo">
            <img class="Logo-i" src="img/Avatar.jpg">
            <i>
              <a class="Logo_t" href="#page-top" >Gift Karma</a>
            </i>
            <!-- <p class="gst"><b class="qScrollTop">1000</b></p> 抓瀏覽器高度 -->
          
        </div>
		<?php
						if($language=="TW"){?>
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
								選單
								<i class="fa fa-bars"></i>
							</button>
						<?}else if($language=="EN"){?>
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
								Menu
								<i class="fa fa-bars"></i>
							</button>
						<?}else if($language=="ES"){?>
							<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
								Menu
								<i class="fa fa-bars"></i>
							</button>
				<?}?>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"style="font-weight: bold;">
				<?php
						if($language=="TW"){?>
							<a class="nav-link js-scroll-trigger" href="#Gift-video">觀看影片</a> 
						<?}else if($language=="EN"){?>
							<a class="nav-link js-scroll-trigger" href="#Gift-video"> Video</a>
						<?}else if($language=="ES"){?>
							<a class="nav-link js-scroll-trigger" href="#Gift-video"> Video </a>
				<?}?>
            </li>
            <li class="nav-item"style="font-weight: bold;">
				<?php
						if($language=="TW"){?>
							<a class="nav-link js-scroll-trigger" href="#features"> 我想參與</a>
						<?}else if($language=="EN"){?>
							<a class="nav-link js-scroll-trigger" href="#features"> Join</a>
						<?}else if($language=="ES"){?>
							<a class="nav-link js-scroll-trigger" href="#features"> unirme </a>
				<?}?>
            </li>			
            <li class="nav-item"style="font-weight: bold;">
				<?php
						if($language=="TW"){?>
							<a class="nav-link js-scroll-trigger" href="#download"> 流程說明</a> 
						<?}else if($language=="EN"){?>
							<a class="nav-link js-scroll-trigger" href="#download"> Proess</a>
						<?}else if($language=="ES"){?>
							<a class="nav-link js-scroll-trigger" href="#download">  Proceso </a>
				<?}?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="Gift-video" class="masthead">
    <div class="masthead row">
		<div id="video_">
			<div class="aspectration" data-ratio="16:9">
			  <video preload="auto" autoplay muted id="video_in" class="content">
				<source src="video/傳善MP4.mp4" type="video/mp4">
			  </video> 
			</div>   
		</div>
	  <div class="controls_video">
		<i id="play" onclick="play()" class="fas fa-play-circle"></i>
		<i id="pause" onclick="pause()" class="fas fa-pause-circle"></i>
		<i id="mute_" onclick="mute()" class="fas fa-volume-off"></i>					
		<input type="range" min="0" max="100" value="50" onchange="setvalue()" id="ran"/></input>
		<i id="fullscreen_" onclick="full_screen()" class="fas fa-arrows-alt fulls_btn"></i>	
	  </div> 

	   
	   <script type="text/javascript">
		var is_mute = 0;
		var vid = document.getElementById("video_in"); 
		var mute_icon = document.getElementById("mute_");

		function play() {
		  vid.play();
		}
		function pause(){
		  vid.pause();
		}
		function full_screen(){
			if (vid.requestFullscreen) {
			  vid.requestFullscreen();
			} else if (vid.mozRequestFullScreen) {
			  vid.mozRequestFullScreen();
			} else if (vid.webkitRequestFullscreen) {
			  vid.webkitRequestFullscreen();
			}		
		}
		function mute_change(){
		  if (vid.muted) { /*靜音*/
			mute_icon.classList.remove("fa-volume-up");
			mute_icon.classList.add("fa-volume-off");
		  }else{ /*有聲音*/
			mute_icon.classList.remove("fa-volume-off");
			mute_icon.classList.add("fa-volume-up");
		  }
		} 
		function mute(){
		  if (!vid.muted) {
			vid.muted = true;
			mute_change();
		  }else{
			vid.muted = false;
			mute_change();
		  }
		}
	   var ran=document.getElementById("ran");
		//拖动range进行调音量大小
		function setvalue(){
		vid.volume=ran.value/100;
		if(vid.volume == 0){
		  vid.muted = true;
		  mute_change();
		}else{
		  vid.muted = false;
		  mute_change();
		}}
		
	  </script>
   </div>
  </header>
	
<section class="features row text-center col-md-12" id="features">
	<div class="btn-out ">
		<?php
				if($language=="TW"){?>
					<a href="http://www.imdr.yuntech.edu.tw/GiftKarma/send.php?qrcode=<?php echo $qrcode ?>&language=<?php echo $language ?>" class="btn btn-outline btn-join" style="">我想參與 <i class="fas fa-hand-pointer" style="font-size: 25px;"></i></a>
				<?}else if($language=="EN"){?>
					<a href="http://www.imdr.yuntech.edu.tw/GiftKarma/send.php?qrcode=<?php echo $qrcode ?>&language=<?php echo $language ?>" class="btn btn-outline js-scroll-trigger btn-join" style="">I’d like to join! <i class="fas fa-hand-pointer" style="font-size: 25px;"></i></a>
				<?}else if($language=="ES"){?>
					<a href="http://www.imdr.yuntech.edu.tw/GiftKarma/send.php?qrcode=<?php echo $qrcode ?>&language=<?php echo $language ?>" class="btn btn-outline js-scroll-trigger btn-join" style="">Me gustaría unirme!  <i class="fas fa-hand-pointer" style="font-size: 25px;"></i></a>
				<?}else{?>
				<button type="button" class="btn btn-chooselanguae-again" data-toggle="modal" data-target="#language_choose">
				Choose your language!
				</button>
		<?}?>
	</div>
</section>	
	

<?if(!empty($language)){?>
	<section class="download text-center row" id="download">
		<div class="mx-auto">
		<?php
					if($language=="TW"){?>
					<div class="row col-md-12">
						<div class="col-md-3 download-img">
							<img src="..\white\images\前導頁_流程\前導頁_流程_1_.png">
							<h3>關懷與幫助</h3>
							<p>觀察周遭，發現他人困難，並給予支持與陪伴。</p>
						</div>	
						<div class="col-md-3 download-img">
							<img src="..\white\images\前導頁_流程\前導頁_流程_2_.png">
							<h3>傳遞代幣</h3>
							<p>解決困難後，把這一枚代表善意種子的代幣，累積上自己的祝福傳遞下去</p>
						</div>		
						<div class="col-md-3 download-img">
							<img src="..\white\images\前導頁_流程\前導頁_流程_3_.png">
							<h3>分享友善</h3>
							<p>收到代幣後，掃描QR code，分享得到代幣的過程。</p>
						</div>		
						<div class="col-md-3 download-img">
							<img src="..\white\images\前導頁_流程\前導頁_流程_4_.png">
							<h3>代幣的故事旅程</h3>
							<p>網站將顯示每一枚代幣所傳遞的故事歷程</p>
						</div>	
					</div>
					<?}else if($language=="EN"){?>
					<div class="row col-md-12">
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_1_.png">
							<h3 style="font-size:1.5em;">Caring and Helping</h3>
							<p>Noticing what's happening around us ... Seeing others in need ... & Offering to
support and accompany
</p>
						</div>	
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_2_.png">
							<h3 style="font-size:1.5em;">Pay Kindness Forward</h3>
							<p> After offering support, if natural, introduce the
project. Invite them in. Offer the coin with instructions,
and your good wishes!
</p>
						</div>		
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_3_.png">
							<h3 style="font-size:1.5em;">Add Your Story</h3>
							<p>After receiving the coin, scan the QR code, and share the story that led to the coin
being passed to you.
</p>
						</div>		
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_4_.png">
							<h3 style="font-size:1.5em;">Follow the Coin's Travels </h3>
							<p>You can check in from time to time on the web page and follow the travels and
stories of this coin.
</p>
						</div>	
					</div>
					<?}else if($language=="ES"){?>
					<div class="row col-md-12">
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_1_.png">
							<h3>Cuidando y ayudando</h3>
							<p>dándonos cuenta de lo que sucede a nuestro alrededor… viendo a otros necesitados...y ofreciendo nuestro apoyo y compañía.</p>
						</div>	
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_2_.png">
							<h3>Sé bondadoso</h3>
							<p>Tras ofrecer tu apoyo, si sale el tema, introduce y explica brevemente el proyecto. Invítales, ofrece la moneda y explica las instrucciones. Por último, deseal@s buena suerte!</p>
						</div>		
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_3_.png">
							<h3>Comparte tu historia</h3>
							<p>Tras recibir la moneda, escanea el código QR y comparte la historia de cómo ha llegado la moneda hasta ti.</p>
						</div>		
						<div class="col-md-3">
							<img src="..\white\images\前導頁_流程\前導頁_流程_4_.png">
							<h3>Sigue los pasos de la moneda</h3>
							<p>Puedes entrar de vez en cuando en la página web y seguir las aventuras y las historias de la moneda.</p>
						</div>	
					</div>
					<?}else{?>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#language_choose">
						<h2 class="section-heading" style="font-size:  7vw;color:black;">Choose your language!</h2>
						</button>
			<?}?>
		</div>
    </section>
	
	
<!--
    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center" style="color:#759532;">
          <h2 class="what-do-a" style="text-align: left;">傳送硬幣位置後我能做什麼?</h2>
          <p class="what-do-p text-muted">Check out what you can do with Gift Karma!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
 <!--                   <img src="/guide/img/demo-screen-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
 <!--                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <?php
						if($language=="TW"){?>
							<h3>Device Mockups</h3>
							<p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
						<?}else if($language=="EN"){?>
							<h3>Device Mockups</h3>
							<p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
						<?}else if($language=="ES"){?>
							<h3>Device Mockups</h3>
							<p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
					<?}?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <?php
						if($language=="TW"){?>
							<h3>Flexible Use</h3>
							<p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
						<?}else if($language=="EN"){?>
							<h3>Flexible Use</h3>
							<p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
						<?}else if($language=="ES"){?>
							<h3>Flexible Use</h3>
							<p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
					<?}?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <?php
						if($language=="TW"){?>
							<h3>Free to Use</h3>
						<p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
						<?}else if($language=="EN"){?>
							<h3>Free to Use</h3>
						<p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
						<?}else if($language=="ES"){?>
							<h3>Free to Use</h3>
						<p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
					<?}?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-lock-open text-primary"></i>
                    <?php
						if($language=="TW"){?>
							<h3>Open Source</h3>
							<p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
						<?}else if($language=="EN"){?>
							<h3>Open Source</h3>
							<p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
						<?}else if($language=="ES"){?>
							<h3>Open Source</h3>
							<p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
					<?}?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
-->
<!--
    <section class="cta">
      <div class="cta-content">
        <div class="container">
			<?php
				if($language=="TW"){?>
					<h2>Stop waiting.<br>Start Sharing.</h2>
					<a href="http://localhost/index.php?qrcode=<?php echo $qrcode ?>&language=<?php echo $language ?>" class="btn_more btn-outline btn-xl js-scroll-trigger">了解更多!</a>
				<?}else if($language=="EN"){?>
					<h2>Stop waiting.<br>Start Sharing.</h2>
					<a href="http://localhost/index.php?qrcode=<?php echo $qrcode ?>&language=<?php echo $language ?>" class="btn btn-outline btn-xl js-scroll-trigger">了解更多!</a>
				<?}else if($language=="ES"){?>
					<h2>Stop waiting.<br>Start Sharing.</h2>
					<a href="http://localhost/index.php?qrcode=<?php echo $qrcode ?>&language=<?php echo $language ?>" class="btn btn-outline btn-xl js-scroll-trigger">了解更多!</a>
			<?}?>
        </div>
      </div>
      <div class="overlay"></div>
    </section>
-->
    <section class="contact bg-primary" id="contact" style="background: linear-gradient(#fff,#fff);">
      <div class="row col-md-12 ">
        <!--<h2>We
          <i class="fa fa-heart"></i>
          your join!</h2>-->
			<?php
				if($language=="TW"){?>
				<div class="btm-word-out">
					<h2 class="btm-word ">
					<i style="font-family: 'Times New Roman';font-weight: 500;">Gift Karma </i>
					傳善計畫-以代幣傳遞引發友善的實踐，並創造有溫度的社會連結。<br>
					現在，邀請您停下腳步，分享當下受助的感受，讓代幣形成不斷延續的故事鏈。開始<i style="font-family: 'Times New Roman';font-weight: 500;"> Gift Karma </i>傳善行動！</h2>
				<div>
				<?}else if($language=="EN"){?>
				<div class="btm-word-out">
					<h2 class="btm-word ">
					<span style="font-weight: 700;">Pay Kindness Forward, <i style="font-family: 'Times New Roman';">Gift Karma</i> Project</span><br>
					Making everyday kindness in the world visible. Create warmth and connection. Now, we invite you to write a bit about the kind act you received and the feelings around that. Let’s pass
kindness forward!</h2>
				<div>
				<?}else if($language=="ES"){?>
				<div class="btm-word-out">
					<h2 class="btm-word ">Sé bondadoso,
					<i style="font-family: 'Times New Roman';font-weight: 500;">Gift Karma Project</i>
					<br>
					Haciendo que la bondad esté más presente en el mundo. Crea lazos con otras personas. Ahora, te invitamos a que escribas sobre el acto de bondad que recibiste y como te hizo sentir. Sé bondadoso!</h2>
				<div>
			<?}?>
		</div>
		<a href="http://fb.com/giftkarmaplan" target="_blank">
		  <i style="font-size:40px; color:#3b5998; margin: 0 10px;" class="fab fa-facebook-square"></i>
		</a>

		<a href="https://www.instagram.com/Gift_karma/" target="_blank">
			<img style="width:38px; position:relative; top:-10px; margin: 0 10px;" src="img/ig.png">
		</a>
			
		<a href="https://www.youtube.com/channel/UCgxQXHKoHyafFAuRI2LlYJg" target="_blank">
		  <i style="font-size:40px; color:#ff0000; margin: 0 10px;" class="fab fa-youtube"></i>
		</a>
      
    </section>

    <footer>
      <div class="container">
        <p>&copy; Gift Karma 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="http://giftkarma.com">imdr</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>
<?}?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
