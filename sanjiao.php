<html>
	<head>
		<title>图形</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="tuxing.php" method="post">
		输入层数：<input tpye="text" name="num"/>
		<input type="submit"/>
		</form>
	</body>
</html>
<?php

@$n=$_REQUEST['num'];

	for($i=1;$i<=$n;$i++){
		for($k=1;$k<=($n-$i);$k++){
			echo '&nbsp';
		}
		for($j=1;$j<=$i;$j++){
			echo "*".'&nbsp';
			
		}
		echo '<br>';
	}

?>
