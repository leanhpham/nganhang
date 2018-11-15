<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<base href="{{asset('')}}}">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css">
	<script type="text/javascript" src="js/function.js"></script>
</head>
<body>
	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 header-top-left">
						<div class="list-info">
							<ul>
								<li>
									<i class="fas fa-phone top-icon"></i>
									+123 456 789
									
								</li>
								<li>
									<i class="fa fa-envelope top-icon"></i>
									abcdef@gmail.com
									
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 header-top-right">
						<div class="list-info">
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-user-plus top-icon"></i>
										Sign up
										
									</a>
								</li>
								<li>
									<a href="http://localhost:8080/nganhang/public/login">
										<i class="fa fa-lock top-icon"></i>
										Login
										
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="main">
		<div class="main-top">
			<div class="container fix">
				<div class="row">
					<div class="col-sm-2">
						<a href="#">
							<img src="img/logo1.png" alt="">
						</a>
					</div>
					<div class="col-sm-10 menu">
						<ul>
							<li><a class="active" href="#">TRANG CHỦ</a></li>
							<li><a class="" href="http://localhost:8080/nganhang/public/nganhangcauhoi">NGÂN HÀNG CÂU HỎI</a>

							</li>
							<li><a class="" href="http://localhost:8080/nganhang/public/nganhangde">NGÂN HÀNG ĐỀ THI</a></li>
							<li><a class="" href="#">LIÊN HỆ</a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
		<div class="main-slide">
			<img class="hinh" src="img/slider-01.jpg">
			<img class='hinh' src="img/slider-02.jpg" alt="">
			<button class="button display-left" onclick="plusDivs(-1)">&#10094;</button>
			<button class="button display-right" onclick="plusDivs(1)">&#10095;</button>
		</div>
		<div class="slider-content-bottom">	
			<div class="container">
				<div class="row kc">
					<div class="col-sm-4 slide-cont-box-01">
						<div class="noidung-box">
							<img class="avar " src="img/box1.png" alt="">
							<h3>Tạo Đề</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
							<a href="taode.html" style="font-size: 20px;color: white;">
								Đọc Ngay
							</a>
						</div>
					</div>


					<div class="col-sm-4 slide-cont-box-02">
						<div class="noidung-box">
							<img class="avar" src="img/slide-bottom-02.png


							" alt="">
							<h3>Thêm Câu Hỏi</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
							<a href="themcauhoi.html" style="font-size: 20px;color: white;">
								Đọc Ngay
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="Welcome-area">

			<div class="container"> 

				<div class="row">

					<div class="col-sm-6 Welcome-area-text">

						<div class="row">

							<div class="col-sm-12 section-header-box">

								<div class="section-header section-header-l">

									<h2>Welcome to LearnPro</h2>

								</div><!-- ends: .section-header -->

							</div>

						</div>

						<p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet. Pede enim nunc ultricies quis rhoncus penatibus tincidunt integer felis quam neque ridiculus.
							<br><br>
						Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et. </p>  



						<a class="read_more-btn fa fa-long-arrow-right">đọc tiếp </a>    

					</div><!-- Ends: . -->



					<div class="col-sm-6 welcome-img">

						<img src="img/welcome.png" alt="" class="img-responsive">

					</div><!-- Ends: . -->          

				</div>

			</div>

		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 leftf">
					<h3>Về chúng tôi</h3>
					<li>Liên hệ</li>
					<li>Giới thiệu</li>
				</div>
				<div class="col-md-4 centerf">
					<h3>Điều khoản sử dụng</h3>
					<ul>
						<li>Điều khoản sử dụng</li>
						<li>Điều khoản chung</li>
						<li>Chính sách bảo mật</li>
						<li>Câu hỏi thường gặp</li>
					</ul>
				</div>
				<div class="col-md-4 rightf">
					<h3>Chăm sóc khách hàng</h3>
					<ul>
						<li>Hotline : xx24144</li>
						<li>Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</li>
						<li>Email hỗ trợ: sd-asd-@gmail.com</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Recipient's username">
				<div class="input-group-append">
					<button class="btn btn-subscriber" type="submit"> <i class="far fa-paper-plane"></i> </button>
				</div>
			</div>
			<div class="copyRight">	
				<h5>© 2018 H.A.H Team</h5>
			</div>
		</div>
	</footer>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("hinh");
			if (n > x.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = x.length}
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					x[slideIndex-1].style.display = "block";  
				}
			</script>
			<script>
				var myIndex = 0;
				carousel();

				function carousel() {
					var i;
					var x = document.getElementsByClassName("hinh");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>

	