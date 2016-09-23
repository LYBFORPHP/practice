<html>
	<head>
		<title>计算器</title>
	</head>
	<body>
	<?php
	@$num1 = $_REQUEST["num1"];
	@$num2 = $_REQUEST["num2"];
	@$oper = $_REQUEST["oper"];
	$res;

	switch($oper){
		case "+":
		$res=$num1+$num2;
		break;
		case "-":
		$res=$num1-$num2;
		break;
		case "*":
		$res=$num1*$num2;
		break;
		case "/":
		$res=$num1/$num2;
		break;
		default:"输入错误！";
	}
	?>
		 <h1>实现一个计算器</h1>
		 <form action="calculator.php" method="post">
			第一个数：<input type="text" name="num1">
			<br>
			 <input type="radio" name="oper" value="+"/>+
			 <input type="radio" name="oper" value="-"/>-
			 <input type="radio" name="oper" value="*"/>*
			 <input type="radio" name="oper" value="/"/>/
			<br>
			 第二个数：<input type ="text" name="num2" />
			<br>
		<input type="submit" value=提交>
			<br>
			计算结果是：<?php 
			echo @"$num1 $oper $num2= $res";	
?>

		</form>
	</body>

