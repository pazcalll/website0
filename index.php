<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
</head>
<body>
	<h1>Lorem Ipsum Dolor Sit amet</h1>
	<p style="color: red">asd wow oopai</p>
	<iframe src="https://www.youtube.com/watch?v=Yf-dfwYWTOw&list=RDYf-dfwYWTOw&start_radio=1">budi doremi tolong</iframe>
	<form method="post">
		<input type="submit" value="lampu1" name="asdfgh">
		<input type="submit" value="lampu2" name="qwerty">
		
	</form>
	 <?php

	session_start();
	if(isset($_POST['reset'])){session_unset();}
	$filename = "lampu1.txt";
	if(isset($_POST['asdfgh'])){
		$_SESSION['number1']++;
	}
	if($_SESSION['number1']>1){
		$_SESSION['number1']=0;
	}
	$filename1 = "lampu2.txt";
	if(isset($_POST['qwerty'])){
		$_SESSION['number2']++;
	}
	if($_SESSION['number2']>1){
		$_SESSION['number2']=0;
	}
	$hasil=$_SESSION['number1'];
	$hasil1=$_SESSION['number2'];
	file_put_contents($filename,$hasil);
	file_put_contents($filename1,$hasil1);
	print_r($hasil);
	print_r($hasil1);
?>

</body>
</html>
