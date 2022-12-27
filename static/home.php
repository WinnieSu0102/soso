<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>搜搜 soso｜Fund New Things</title>
	<meta name="description" content="搜搜 soso is a Crowdfunding platform in Taiwan. 搜搜 soso 是一個群眾募資平台。我們正在打造一個環境，讓不限領域的創意，能更容易地實踐。">
	<meta name="keywords" content="SOSO, 搜搜, 募資平台, 群眾募資, 預購式專案, 訂購式專案">
	<meta name="author" content="2021 管理學士班戰隊">
	<meta name="copyright" content="2021 管理學士班戰隊">
	<meta http-equiv="Content-Language" content="zh-TW">
	<link rel="stylesheet"  href="css/home.css">
	<link rel="icon" href="./static/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="elements/favicon.ico" type="image/x-icon" />
		<style>
			body{
  				margin: 0;
 		 		font-family: coco, "Microsoft JhengHei", sans-serif;
			}

			@font-face {
				font-family: coco-big;
				src: local("Mamelon-5-Hi-Regular");
			}
			@font-face {
			font-family: coco;
			src: local("Mamelon-3.5-Hi-Regular");
			}
			@font-face {
			font-family: coco-light;
			src: local("Mamelon-3-Hi-Regular"),
			local("msjhbd");
			font-weight: bold;
			}

			header{
			background-color: white;
			height: 80px;
			}
			.header-container{
			width: 80%;
			margin: 0 auto;
			display: flex;
			justify-content: space-between;
			}
			.logo{
			float: left;
			display: flex;
			margin-top: 25px;
			align-items: center;
			padding-top: 3px;
			}
			.logo #bulb{
			width: 35px;
			}
			.logo a{
			letter-spacing:4px;
			font-size: 25px;
			margin-left: 12px;
			color: #45729D;
			text-decoration: none;
			font-family: coco-big;
			}

			ul{
			margin: 0;
			padding: 0;
			list-style: none;
			}
			#left-menu {
			margin:35px 0px 0px 10px;
			display: inline-block;
			font-size: 14px;
			}
			#left-menu li {
			position: relative;
			white-space: nowrap;
			margin-right:-30px;
			}
			#left-menu > li {
			float: left;
			}
			#left-menu a {
			color: #808080;
			display: block;
			padding: 0 30px;
			text-decoration: none;
			}
			#left-menu a:hover {
			color: #45729D;
			}
			#left-menu li:hover > a {
			color: #45729D;
			}
			#left-menu ul {
			position: absolute;
			z-index: 99;
			left: -1px;
			top: 100%;
			box-shadow: 0px 4px 10px rgba(0, 0, 0,.12);
			}
			#left-menu ul li {
			background-color: white;
			line-height: 40px;
			text-align: center;
			border-bottom: #f2f2f2 1px solid;
			}
			#left-menu ul li:last-child {
			border-radius: 0 0 10px 10px;
			}
			#left-menu ul li:first-child {
			padding-top: 20px;
			}
			#left-menu ul {
			visibility: hidden;
			opacity: 0;
			}
			#left-menu li:hover > ul {
			visibility: visible;
			opacity: 1;
			-webkit-transition: opacity 0.4s;
			transition: opacity 0.4s;
			left: -1px;
			border-right: 5px;
			}

			/*登入前*/
			.header-right-before > #before-login > #right-menu{
			margin-top:35px;
			}
			.header-right-before > #before-login > #right-menu li{
			display: inline;
			}
			.header-right-before > #before-login > #right-menu li a{
			text-decoration: none;
			color:#808080;
			font-size:14px;
			}
			.header-right-before > #before-login > #right-menu ul li a:hover{
			color: #45729D;
			}
			.header-right-before > #after-login{
				display: none;
			}

			/*登入後*/
			.header-right-after > #before-login{
				display: none;
			}
			.header-right-after > #after-login > #right-menu {
			margin: 28px 0px 0px 0px;
			display: flex;
			align-items: center;
			font-size: 14px;
			}
			.header-right-after > #after-login > #right-menu li {
			position: relative;
			white-space: nowrap;
			margin-right:-30px;
			}
			.header-right-after > #after-login > #right-menu > li {
			float: left;
			/* 只有第一層是靠左對齊*/
			}
			.header-right-after > #after-login > #right-menu a {
			color: #808080;
			display: block;
			padding: 0 30px;
			text-decoration: none;
			}
			.header-right-after > #after-login > #right-menu a:hover {
			/* 滑鼠滑入按鈕變色*/
			color: #45729D;
			}
			.header-right-after > #after-login > #right-menu li:hover > a {
			/* 滑鼠移入次選單上層按鈕保持變色*/
			color: #45729D;
			}
			.header-right-after > #after-login > #right-menu ul {
			position: absolute;
			z-index: 99;
			left: -1px;
			top: 100%;
			box-shadow: 0px 4px 10px rgba(0, 0, 0,.12);
			}
			.header-right-after > #after-login > #right-menu ul li {
			background-color: white;
			line-height: 40px;
			text-align: center;
			border-bottom: #f2f2f2 1px solid;
			}
			.header-right-after > #after-login > #right-menu ul li:last-child {
			border-radius: 0 0 10px 10px;
			}
			.header-right-after > #after-login > #right-menu ul li:first-child {
			padding-top: 20px;
			border-radius: 10px 10px 0px 0px;
			}
			.header-right-after > #after-login > #right-menu ul {
			visibility: hidden;
			opacity: 0;
			}
			.header-right-after > #after-login > #right-menu li:hover > ul {
			visibility: visible;
			opacity: 1;
			-webkit-transition: opacity 0.4s;
			transition: opacity 0.4s;
			left: -1px;
			border-right: 5px;
			}
			#mail{
			filter: invert(52%) sepia(10%) saturate(12%) hue-rotate(1deg) brightness(95%) contrast(93%);
			width: 15px;
			}
			#user{
			width: 40px;
			height: 40px;
			border-radius: 50%;
			object-fit: cover;
			}
			#triangle{
			filter: invert(52%) sepia(10%) saturate(12%) hue-rotate(1deg) brightness(95%) contrast(93%);
			width: 10px;
			}
			#triangle:hover{
			filter: invert(40%) sepia(67%) saturate(389%) hue-rotate(169deg) brightness(89%) contrast(87%);
			}
			#mail:hover{
			filter: invert(40%) sepia(67%) saturate(389%) hue-rotate(169deg) brightness(89%) contrast(87%);
			}
			nav{
				background: white;
				line-height: 3em;
				padding-top: 10px;
			}
			.select-bar ul{
				display: flex;
				margin: 0 auto;
				justify-content: center;

			}
			.select-bar ul li{
				display: inline;
				margin-right: 50px;
			}
			.select-bar li a{
				text-decoration: none;
				color: #808080;
				font-size: 14px;
			}
			.select-bar li a:hover{
				color: #45729D;
			}

			.container{
				width: 80%;
				margin: 0 auto;
			}
			.bar{
				margin-top: 30px;
				display: flex;
				justify-content: space-between;
				align-items: center;
			}
			.bar-right{
				display: flex;
				align-items: center;
			}
			.bar-right span{
				color: #45729D;
				font-weight: bold;
			}

			select{
				width: 120px;
				padding: 10px;
				margin: 10px;
				border-radius: 10px;
				border: 1px #e6e6e6 solid;
			}

			.search{
				display: flex;
				align-items: center;
			}
			#a{
				margin-right: 2px;
			}

			.bar-left button{
				width: 40px;
				height: 30px;
				font-size: 2px;
				border-radius: 10px;
				border: none;
				cursor: pointer;
			}

			.bar-left button:hover{
			background-color: #45729D;
			color: white; 
			transition-duration: 0.3s;
			}




			.section{
				display: flex;
				justify-content: center;
				flex-wrap: wrap;
			}
			.card{
				width: 238px;
				border-radius: 10px;
				margin: 15px 5px 5px 5px;
				overflow: hidden;
				box-shadow: 0px 4px 6px rgba(0, 0, 0,.12);
			}
			.card-loading{
				width: 238px;
				margin: 15px 5px 5px 5px;
				border-radius: 10px;
				overflow: hidden;
				box-shadow: 0px 4px 6px rgba(0, 0, 0,.12)
			}
			.img{
				height: 150px;
			}
			.img img{
				display: block;
				width: 100%;
				height: 150px;
				object-fit: cover;
			}
			.info{
				margin: 10px;
			}
			.tt a{
				font-size: 16px;
				text-decoration: none;
				line-height: 24px;
				color: black;
				font-family: "Microsoft JhengHei";
				font-weight: bold;
				letter-spacing: .05rem;
			}

			.tt a:hover{
				color: #45729D;
			}

			.author{
				margin-top: 5px;
				display: flex;
				font-size: 10px;
				font-family: "Microsoft JhengHei";
			}
			.author a{
				margin-left: 5px;
				text-decoration: none;
				color: #45729D;

			}
			.description{
				font-family: "Microsoft JhengHei";
				margin-top: 10px;
				font-size: 12px;
				line-height: 22px;
				line-height: 20px;
				letter-spacing: .05rem;
			}
			.bottom{
				display: flex;
				justify-content: center;
			}

			.page a{
				padding-top: 4px;
				padding-bottom: 5px;
				padding-right: 20px;
				padding-left: 20px;
				border-radius: 10px;
				text-decoration: none;
				font-size: 14px;
				text-align: center;
				background-color: #e6e6e6;
				color: black;
			}
			.page a:hover{
				background-color: #45729D;
				color: white;
				transition-duration: 0.3s;
			}

			#now{
				background-color: #45729D;
				color: white;
				border: 1px #45729D solid;
			}
			.footer{
			width: 80%;
			display: flex;
			justify-content: space-between;
			margin: 0 auto;
			margin-bottom: 120px;
			}
			.footer-left{
			display: flex;
			}
			.im{
			margin-right: 120px;
			}
			.im p{
			font-size: 14px;
			}
			.im a{
			display: block;
			text-decoration: none;
			line-height: 24px;
			font-size: 12px;
			color: #808080;
			}
			.im a:hover{
			color: #45729D;
			}
			.logo-footer{
			margin-left: 315px;
			display: flex;
			align-items: center;
			}
			.logo-footer #bulb{
			width: 35px;
			}
			.logo-footer a{
			letter-spacing:4px;
			font-size: 25px;
			color: #45729D;
			margin-left: 12px;
			text-decoration: none;
			font-family: coco-big;
			}
			#copyright{
			margin-top: 10px;
			margin-left: 162px;
			font-size: 12px;
			}
			:root{
				--loading-gray: #ededed;
			}
			.card-loading .img,
			.card-loading .tt,
			.card-loading .author,
			.card-loading .description{
				background-color: var(--loading-gray);
				background: linear-gradient(
					100deg,
					rgba(255, 255, 255, 0) 40%,
					rgba(255, 255, 255, .5) 50%,
					rgba(255, 255, 255, 0) 60%
					) var(--loading-gray);
				background-size: 200% 100%;
				background-position-x: 180%;
				animation: 1s loading ease-in-out infinite;
			}

			@keyframes loading{
				to{
					background-position-x: -20%;
				}
			}
			.tt{
				min-height: 1.8rem;
				border-radius: 4px;
			}
			.author{
				min-height: 1rem;
				border-radius: 4px;
			}
			.description{
				min-height: 5rem;
				border-radius: 4px;
			}
			ul.slides{
				position: relative;
				width: 100%;
				height: 400px;
				list-style: none;
				margin: 0 auto;
				padding: 0;
				overflow: hidden;
			}

			li.slide{
				margin: 0;
				padding: 0;
				width: inherit;
				height: inherit;
				position: absolute;
				top: 0;
				left: 0;
				display: flex;
				justify-content: center;
				transition: .5s transform ease-in-out;
				overflow: hidden;
			}
			.slide:nth-of-type(1){
			}
			.slide:nth-of-type(2){
				left: 100%;
			}
			.slide:nth-of-type(3){
				left: 200%;
			}
			.controls-visible{
				position: absolute;
				width: 100%;
				bottom: 10px;
				text-align: center;
			}

			.controls-visible label{
				display: inline-block;
				width: 10px;
				height: 10px;
				background-color: #fff;
				border-radius: 50%;
				margin: 0 3px;
				border: 2px solid #fff;
			}
			.slides input[type="radio"]:nth-of-type(1):checked ~
			.controls-visible label:nth-of-type(1){
				background-color: #333;
			}
			.slides input[type="radio"]:nth-of-type(2):checked ~
			.controls-visible label:nth-of-type(2){
				background-color: #333;
			}
			.slides input[type="radio"]:nth-of-type(3):checked ~
			.controls-visible label:nth-of-type(3){
				background-color: #333;
			}
			.slides input[type="radio"]:nth-of-type(1):checked ~ .slide{
				transform: translateX(0%);
			}
			.slides input[type="radio"]:nth-of-type(2):checked ~ .slide{
				transform: translateX(-100%);
			}
			.slides input[type="radio"]:nth-of-type(3):checked ~ .slide{
				transform: translateX(-200%);
			}

			.slides input[type="radio"]{
				display: none;
			}
		</style>
</head>
<body>
	<header>
		<div class="header-container">
			<div class="header-left">
				<div class="logo">
					<img id="bulb" src="./static/bulb2.png">
					<a href="/">搜搜</a>
				</div>
				<ul id="left-menu">
					<li><a href="">關於</a></li>
					<li><a href="">提案</a></li>
					<li><a href="">探索</a>
						<ul>
							<li><a href="">生活科技</a></li>
							<li><a href="">漫畫插圖</a></li>
							<li><a href="">影視音樂</a></li>
							<li><a href="">電玩遊戲</a></li>
							<li><a href="">教育專案</a></li>
							<li><a href="">公益計畫</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="<?php 
					if(isset($_SESSION[id])){
						echo 'header-right-after' ;
					}else{
						echo 'header-right-before';
					}	
				?>" >
				<!--登入前-->
				<div id="before-login">
					<ul id="right-menu">
						<li><a href="/login" style="margin-right:25px;">登入</a></li>
						<li><a href="/signup">註冊</a></li>
					</ul>
				</div>
				<!--登入後-->
				<div id="after-login">
					<ul id="right-menu">
						<li><a href="" style="margin-right:25px;"><img id="mail" src="./elements/mail.png"></a></li>
						<li><img id="user" src="elements/user.png"></li>
						<li><a href="" style="margin-left:5px;"><img id="triangle" src="elements/triangle.png"></a>
							<ul>
								<li><a href="/member">個人設定</a></li>
								<li><a href="/member">追蹤計畫</a></li>
								<li><a href="/member">贊助紀錄</a></li>
								<li><a href="/logout">　登出　</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<main class="container">
		<div class="section">
			<div class="card">
				<div class="img">
					<img src="./static/box-1.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">【 Dalin｜達人電動工具組 】12 種匠人工具一包搞定，新時代 Maker 最佳神器！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">Anywash</a>
					</div>
					<div class="description">
						超高頻無痕除漬，時尚便攜、隨髒隨清 ! 市面最輕量超強CP值，一筆解決你的除漬惡夢。衣物隨保潔淨，走路抬頭挺胸！	
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-2.jfif">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">你與毛孩共同的家【享貓小棧】｜大小空間都適用的模組收納架</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">MOODI WOOD</a>
					</div>
					<div class="description">
						一款為毛孩也為你設計，真正兼顧兩方，能當跳台又不犧牲收納空間的模組收納架。打造你與毛孩的質感生活。	
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-3.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">【 Duit the table｜風靡韓國的餐桌型寵物餵食機 】讓你的毛小孩輕鬆上餐桌，定時定量，按時吃飯飯！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">duit</a>
					</div>
					<div class="description">
						韓國最美寵物用品品牌，韓國製，風靡韓國毛孩界！	
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-4.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">LUFT Duo 個人空氣淨化器｜清淨效果加倍、抗菌抗過敏－淨化每一次呼吸</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">LUFTQI</a>
					</div>
					<div class="description">
						雙效合一 雙倍淨化｜實證口鼻風速高於大台清淨機15倍，最貼身的空氣防護罩！和細菌、病毒、異味、過敏說掰掰，專利光觸...
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-5.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">Anywash超聲波洗衣筆 | 30秒即刻救援 輕鬆去漬衣物零損傷</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">Anywash</a>
					</div>
					<div class="description">
						超高頻無痕除漬，時尚便攜、隨髒隨清 ! 市面最輕量超強CP值，一筆解決你的除漬惡夢。衣物隨保潔淨，走路抬頭挺胸！
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-6.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">Biion親水特務鞋｜輕量抗菌、親水快乾，全球熱銷30國，2021最有型全場景鞋登陸台灣！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">Biion X 有設計</a>
					</div>
					<div class="description">
						我們是來自加拿大的Biion親水特務鞋， 晴雨兩用，快乾止滑，吸震好走，顛覆大家對懶人鞋的邋塌印象，不只好穿還很時...
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-7.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">SALU！一起大鬧世界吧！</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">林子竣</a>
					</div>
					<div class="description">
						SALU是創業Youtuber，從事各項公益挑戰。透過訂閱募資作為創作與創業的資本，並持續以公益性的創作回饋社會。
					</div>
				</div>
			</div>
			<div class="card">
				<div class="img">
					<img src="elements/box-8.jpg">
				</div>
				<div class="info">
					<div class="tt">
						<a href="">【枕上人】獨家氣閥調節技術，記憶你每天最舒適的睡眠高度</a>
					</div>
					<div class="author">
						<div>By</div>
						<a href="">優多生活</a>
					</div>
					<div class="description">
						多久沒有好好地睡上一覺?獨創專屬調節設計，讓你滿足所有狀況及需求。因為我，不只要做你的心上人，更要做你的枕上人。
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="bottom">
			<div class="page">
			<a href=""><</a>
			<a href="" id="now">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a>4</a>
			<a href="">5</a>
			<a href="">></a>
			</div>
		</div>		
	</main>
	<br><br><br>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<br><br><br>
	<div class="footer">
		<div class="footer-left">
			<div class="im">
				<p>關於</p>
				<br>
				<a href="">關於我們</a>
				<a href="">人才招募</a>
				<a href="">商標資源</a>
			</div>
			<div class="im">
				<p>協助</p>
				<br>
				<a href="">常見問題</a>
				<a href="">使用條款</a>
			</div>
			<div class="im">
				<p>社群</p>
				<br>
				<a href="">Facebook</a>
				<a href="">Instagram</a>
			</div>
		</div>
		<div class="footer-right">
			<div class="logo-footer">
				<img id="bulb" src="./static/bulb2.png">
				<a href="home.php">搜搜</a>
			</div>
		</div>
	</div>
</body>
</html>