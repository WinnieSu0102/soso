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
	<link rel="stylesheet" href="./static/css/signup.css">
	<script src="./static/js/signup.js"></script>
	<link rel="icon" href="./static/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon" />
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
					<li><a href="/about">關於</a></li>
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
			<div class="header-right-before">
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
						<li><a href="" style="margin-right:25px;"><img id="mail" src="./static/mail.png"></a></li>
						<li><img id="user" src="./static/user.png"></li>
						<li><a href="" style="margin-left:5px;"><img id="triangle" src="./static/triangle.png"></a>
							<ul>
								<li><a href="/member">個人設定</a></li>
								<li><a href="">團隊設定</a></li>
								<li><a href="">追蹤計畫</a></li>
								<li><a href="">贊助紀錄</a></li>
								<li><a href="">提案紀錄</a></li>
								<li><a href="/logout">　登出　</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<hr align=center width=80% color=#e6e6e6 SIZE=1>
	<div class="container">
		<div class="title"><span>註冊</span></div>
		<div class="login-area">
			<div class="lable">
				<p>▌會員帳號</p>
			</div>
			<form action="signup.php?act=signup" method="POST" class="login-block">
				<div id="a">
					<label>姓名</label>
					<input placeholder="使用者名稱 / 暱稱" name="name" type="text" required>
				</div>
				<div id="a">
					<label>電子信箱</label>
					<input placeholder="E-mail" name="email" type="email" required>
				</div>
				<div id="a">
					<label>密碼</label>
					<input placeholder="至少 8 位包含數字及英文大小寫" name="password" id="password" type="password" required pattern="[a-zA-Z\d]{8,}">
				</div>
				<div id="a">
					<label>確認密碼</label>
					<input placeholder="再次輸入密碼" name="password_check" id="password_check" type="password" required>
				</div>
				<!--
				<div>
					<span>手機號碼</span>
					<input placeholder="09xxxxxxxx" name="phonenumber" type="tel" style="width:230px;height:25px;" required pattern="09\d{8}">
				</div>
				-->
				<div class="rememberme">
					<div class="rem">
						<input name="remember" type="checkbox" checked>追蹤搜搜電子報
					</div>
				</div>
				<div class="button">
					<button class="login" onClick="validateForm(this.form)">註冊</button>
				</div>
			</form>
			<div class="notice">
				<span>按下註冊即表示同意</span>
				<a href="">服務條款</a>
			</div>
			<br>
			<hr align=center width=320px color=#e6e6e6 SIZE=1>
			<div class="social">
				<div>
					<button class="google">　　　　<img src="./static/google.png" style="width: 20px;">　使用 Google 帳號登入</button>
				</div>
				<div>
					<button class="facebook">　　　　<img src="./static/facebook.png" style="width: 20px;">　使用 Facebook 帳號登入</button>
				</div>
			</div>
		</div>
	</div>
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
				<a href="/">搜搜</a>
			</div>
		</div>	
	</div>
</body>
</html>