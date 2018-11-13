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
	<?php $i=0 ?>
	<div class="container">
		<ul>
			@foreach($cauhoi as $ch)
			<li>
				<span>Câu <?php echo $i ?>:{{$ch->noiDungCH}}</span><br>
				<span>A: {{$ch->ansA}}</span><br> 
				<span>B: {{$ch->ansB}}</span><br> 
				<span>C: {{$ch->ansC}}</span><br> 
				<span>D: {{$ch->ansD}}</span><br> 
			</li>
			@endforeach
		</ul>
	</div>
</body>
</html>