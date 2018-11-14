<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo asset('') ?>">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css">
</head>
<body>
	<header class="td">
			<div class="row">
				<div class="col-md-5 header_left">
					<span>TRƯỜNG ĐẠI HỌC TÀI NGUYÊN VÀ MÔI TRƯỜNG</span><br>
					<span>THÀNH PHỐ HỒ CHÍ MINH</span><br>
					<span style="text-transform: uppercase; font-weight:bold; ">KHOA {{$nganh->tenNganh}}</span>
					
				</div>
				<div class="col-md-5  header_right">
					<span style="font-weight: bold;">ĐỀ KIỂM TRA HỌC PHẦN</span><br>
					<span>Môn thi: </span>
					<span>{{$monhoc->tenMH}}</span><br>
					<span>Thời gian làm bài: </span>
					<span>60 phút</span>
				</div>
			</div>
	</header>
	<div class="made" style="text-align: center;">
		<span style="font-weight: bold; font-size: 18px;">ĐỀ SỐ {{$made}} </span>
	</div>
	<?php $i=1 ?>
	<div class="container">
		<ul style="list-style: none;">
			@foreach($chitietdethi as $ct)
			@foreach($cauhoi as $ch)
			@if($ct->idCH==$ch->idCH)
			<li style="margin-top: 10px;font-size: 16px;">
				<span style="font-weight: bold;">Câu <?php echo $i++ ?>:</span>
				<span>{{$ch->noiDungCH}}</span><br>
				<span>A: {{$ch->ansA}}</span><br> 
				<span>B: {{$ch->ansB}}</span><br> 
				<span>C: {{$ch->ansC}}</span><br> 
				<span>D: {{$ch->ansD}}</span><br> 
			</li>
			@endif
			@endforeach
			@endforeach
		</ul>
	</div>

</body>
</html>