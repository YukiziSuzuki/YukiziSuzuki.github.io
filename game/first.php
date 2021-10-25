<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link href="sample.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="title">
		<img src="../picture/number/title.png" width="800" height="400">
	</div>
		<p>難易度設定</p>
	
	<ul class="nannido">
	<li><form action="easy.php" method="get" >
		<input type="submit" value="やさしい" class="botan">
		<input type="hidden" name="rand" value=<?php echo rand(10,100); ?> >
		<input type="hidden" name="level" value=2 >
	</form></li>
		
	<li><form action="test1.php" method="get">
		<input type="submit" value="普通" class="botan">
		<input type="hidden" name="rand" value=<?php echo rand(100, 999); ?> >
		<input type="hidden" name="level" value=3 >
	</form></li>
	
	<li><form action="test1.php" method="get">
		<input type="submit" value="難しい" class="botan">
		<input type="hidden" name="rand" value=<?php echo rand(1000, 9999) ?> >
		<input type="hidden" name="level" value=4 >
		</form></li>
	
	</ul>
		
</body>
</html>