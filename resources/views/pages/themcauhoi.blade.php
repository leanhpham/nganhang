<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm câu hỏi</title>
	<base href="<?php echo asset('') ?>">
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
								@if(Session::has('login') && Session::get('login')==true){
								<li>

									<a style="color: white;">
										
										Xin chào, {{Session::get('name')}}
										
									</a>
								</li>
								<li>
									<a href="http://localhost:8080/nganhang/public/logout">
										<i class="fa fa-lock top-icon"></i>
										Đăng Xuất
										
									</a>
								</li>
								@else
								<li>
									<a href="http://localhost:8080/nganhang/public/login">
										<i class="fa fa-lock top-icon"></i>
										Đăng Nhập
										
									</a>
								</li>
								@endif
								
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
			<li><a href="http://localhost:8080/nganhang/public/nganhangcauhoi">Ngân hàng câu hỏi</a></li>
			<li><a  class="active" href="http://localhost:8080/nganhang/public/themcauhoi">Tạo câu hỏi</a></li>
			<li><a  href="http://localhost:8080/nganhang/public/taode">Tạo và trộn đề</a></li>
			<li><a href="http://localhost:8080/nganhang/public/taodetheocauhoi">Tạo và trộn đề theo câu hỏi</a></li>
			<li><a href="http://localhost:8080/nganhang/public/taodetheocautl">Tạo và trộn đề theo câu trả lời</a></li>
			<li><a href="http://localhost:8080/nganhang/public/nganhangdethi">Ngân hàng đề thi</a></li>
		</ul>
	</div>
	
	@if (session('success'))
	<div class="alert alert-success">
		<p>{{ session('success') }}</p>
	</div>
	@endif
	<div class="tab">
		@foreach($nganh as $new)
		<button class="tablinks" onclick="chonnganh(event, '{{$new->tenNganh}}')">{{$new -> tenNganh}}</button>
		@endforeach
	</div>


	<!-- Tab content -->
	<div class="main1">
		<div class="row">
			<div class="col-md-2">
				@foreach($nganh as $new)
				<div id="{{$new->tenNganh}}" class="tabcontent">
					<div class="tab1">
						
						@foreach($monhoc as $new1)
						@if($new1->idNganh == $new->idNganh)
						<button class="tablinks1" onclick="chonmon(event, '{{$new1->tenMH}}')">{{$new1-> tenMH}}</button>
						@endif
						@endforeach
						
					</div>
				</div>
				@endforeach

				
			</div>
			<div class="col-md-10">
				@foreach($monhoc as $new1)
				<div id="{{$new1->tenMH}}" class="tabcontent1">
					<div class="themcauhoi">
						<div class="container">
							<form action="{{route('themcauhoi')}}" method="post" class="formthemch">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<label for="">Nội dung câu hỏi</label>
								<input type="text" name="noidung" class="noidungch" placeholder="Nội dung câu hỏi" required="">
								<label for="">A</label>
								<input type="text" name="dapan1" class="dapan" required="">
								<label for="">B</label>
								<input type="text" name="dapan2" class="dapan" required="">
								<label for="">C</label>
								<input type="text" name="dapan3" class="dapan" required="">
								<label for="">D</label>
								<input type="text" name="dapan4" class="dapan" required="">
								<div class="combobox1">
									<label for="">Chọn độ khó</label>

									<select name="dokho" size="3" class="dokho" required="" multiple>
										<option value="1">Dễ</option>
										<option value="2">Trung Bình</option>
										<option value="3">Khó</option>

									</select>
								</div>
								<div class="combobox1">
									<label for="">Chọn đáp án</label>

									<select name="dapan" size="2" class="dokho" required="" multiple>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
										<option value="D">D</option>

									</select>
								</div>
								<div class="combobox1">
									<label for="">Chọn chương</label>

									<select name="chuong" size="3" class="dokho" required="" multiple>
										@foreach($chuong as $new2)
										@if($new1->idMH == $new2->idMH)
										<option value="{{$new2->idChuong}}">{{$new2->tenChuong}}</option>
										@endif
										@endforeach
									</select>
								</div>


								<input type="submit" value="Thêm" class="btn nut" style="width: 200px;">
							</form>
						</div>
					</div>

				</div>
				@endforeach

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