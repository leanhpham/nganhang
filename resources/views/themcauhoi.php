<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo asset('')?>">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css">
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
									<a href="#">
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
	<div class="menu1">
		<ul>
			<li><a href="index.html">Trang chủ</a></li>
			<li><a  href="nganhangcauhoi.html">Ngân hàng câu hỏi</a></li>
			<li><a class="active" href="themcauhoi.html">Tạo câu hỏi</a></li>
			<li><a href="taode.html">Tạo đề và trộn đề</a></li>
			<li><a href="nganhangde.html">Ngân hàng đề thi</a></li>
		</ul>
	</div>

	<div class="tab">
		<button class="tablinks" onclick="chonnganh(event, 'Công Nghệ Thông Tin')">Công Nghệ Thông Tin</button>
		<button class="tablinks" onclick="chonnganh(event, 'KT')">Kinh Tế</button>
		<button class="tablinks" onclick="chonnganh(event, 'NNA')">Ngôn Ngữ Anh</button>
	</div>


	<!-- Tab content -->
	<div class="main1">
		<div class="row">
			<div class="col-md-2">
				<div id="Công Nghệ Thông Tin" class="tabcontent">
					<div class="tab1">
						<button class="tablinks1" onclick="chonmon(event, '1')">Môn 1</button>
						<button class="tablinks1" onclick="chonmon(event, '2')">Môn 2</button>
						<button class="tablinks1" onclick="chonmon(event, '3')">Môn 3</button>
					</div>
				</div>

				<div id="KT" class="tabcontent">
					<div class="tab1">
						<button class="tablinks1" onclick="chonmon(event, '1')">Môn 1</button>
						<button class="tablinks1" onclick="chonmon(event, '2')">Môn 2</button>
						<button class="tablinks1" onclick="chonmon(event, '3')">Môn 3</button>
					</div>
				</div>

				<div id="NNA" class="tabcontent">
					<div class="tab1">
						<button class="tablinks1" onclick="chonmon(event, '1')">Môn 1</button>
						<button class="tablinks1" onclick="chonmon(event, '2')">Môn 2</button>
						<button class="tablinks1" onclick="chonmon(event, '3')">Môn 3</button>
					</div>
				</div>
				
			</div>
			<div class="col-md-4">
				<div id="1" class="tabcontent1">
					<div class="tab1">
						<button class="tablinks2" onclick="chonchuong(event, 'a')">Chương 1</button>
						<button class="tablinks2" onclick="chonchuong(event, 'b')">Chương 2</button>
						<button class="tablinks2" onclick="chonchuong(event, 'c')">Chương 3</button>
					</div>
				</div>
				<div id="2" class="tabcontent1">
					<div class="tab1">
						<button class="tablinks2" onclick="chonchuong(event, 'a')">Chương 1</button>
						<button class="tablinks2" onclick="chonchuong(event, 'b')">Chương 2</button>
						<button class="tablinks2" onclick="chonchuong(event, 'c')">Chương 3</button>
					</div>
				</div>
				<div id="3" class="tabcontent1">
					<div class="tab1">
						<button class="tablinks2" onclick="chonchuong(event, 'a')">Chương 1</button>
						<button class="tablinks2" onclick="chonchuong(event, 'b')">Chương 2</button>
						<button class="tablinks2" onclick="chonchuong(event, 'c')">Chương 3</button>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="a" class="tabcontent2">
					<div class="themcauhoi">
						<div class="container">
							<form action="" class="formthemch">
								<label for="">Nội dung câu hỏi</label>
								<input type="text" name="noidung" class="noidungch" placeholder="Nội dung câu hỏi">
								<label for="">A</label>
								<input type="text" name="dapan1" class="dapan">
								<label for="">B</label>
								<input type="text" name="dapan2" class="dapan">
								<label for="">C</label>
								<input type="text" name="dapan3" class="dapan">
								<label for="">D</label>
								<input type="text" name="dapan4" class="dapan">
								<select name="dokho" size="3" class="dokho" multiple>
									<option value="de">Dễ</option>
									<option value="trungbinh">Trung Bình</option>
									<option value="kho">Khó</option>
								</select>
								<select name="dapan" size="2" class="dokho" multiple>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>

								</select>

								<input type="submit" value="Thêm" class="nut">
							</form>
						</div>
					</div>
				</div>
				<div id="b" class="tabcontent2">
					<div class="themcauhoi">
						<div class="container">
							<form action="" class="formthemch">
								<label for="">Nội dung câu hỏi</label>
								<input type="text" name="noidung" class="noidungch" placeholder="Nội dung câu hỏi">
								<label for="">A</label>
								<input type="text" name="dapan1" class="dapan">
								<label for="">B</label>
								<input type="text" name="dapan2" class="dapan">
								<label for="">C</label>
								<input type="text" name="dapan3" class="dapan">
								<label for="">D</label>
								<input type="text" name="dapan4" class="dapan">
								<select name="dokho" size="3" class="dokho" multiple>
									<option value="de">Dễ</option>
									<option value="trungbinh">Trung Bình</option>
									<option value="kho">Khó</option>
								</select>
								<select name="dapan" size="2" class="dokho" multiple>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>

								</select>

								<input type="submit" value="Thêm" class="nut">
							</form>
						</div>
					</div>
				</div>
				<div id="c" class="tabcontent2">
					<div class="themcauhoi">
						<div class="container">
							<form action="" class="formthemch">
								<label for="">Nội dung câu hỏi</label>
								<input type="text" name="noidung" class="noidungch" placeholder="Nội dung câu hỏi">
								<label for="">A</label>
								<input type="text" name="dapan1" class="dapan">
								<label for="">B</label>
								<input type="text" name="dapan2" class="dapan">
								<label for="">C</label>
								<input type="text" name="dapan3" class="dapan">
								<label for="">D</label>
								<input type="text" name="dapan4" class="dapan">
								<select name="dokho" size="3" class="dokho" multiple>
									<option value="de">Dễ</option>
									<option value="trungbinh">Trung Bình</option>
									<option value="kho">Khó</option>
								</select>
								<select name="dapan" size="2" class="dokho" multiple>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>

								</select>

								<input type="submit" value="Thêm" class="nut">
							</form>
						</div>
					</div>
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
		function chonnganh(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks,tabcontent1;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    	tabcontent[i].style.display = "none";
    }


    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    	tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<script>
	function chonmon(evt, cityName) {
    // Declare all variables
    var i, tabcontent1, tablinks1;

    // Get all elements with class="tabcontent" and hide them
    tabcontent1 = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent1.length; i++) {
    	tabcontent1[i].style.display = "none";
    }


    // Get all elements with class="tablinks" and remove the class "active"
    tablinks1 = document.getElementsByClassName("tablinks1");
    for (i = 0; i < tablinks1.length; i++) {
    	tablinks1[i].className = tablinks1[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<script>
	function chonchuong(evt, cityName) {
    // Declare all variables
    var i, tabcontent2, tablinks2;

    // Get all elements with class="tabcontent" and hide them
    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (i = 0; i < tabcontent2.length; i++) {
    	tabcontent2[i].style.display = "none";
    }


    // Get all elements with class="tablinks" and remove the class "active"
    tablinks2 = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks2.length; i++) {
    	tablinks2[i].className = tablinks2[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>