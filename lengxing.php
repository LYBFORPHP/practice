<doctype html>
<html>
	<head>
		<title>空心棱形</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="lengxing.php" method="post">
			请输入层数：<input type="text" name="num"/><br>
			<input type="submit" value="提交"/>
		</form>
	</body>
</html>





<?php
$n = $_REQUEST['num'];
$i;//行数
$j;
$k;


for($i=1;$i<=$n;$i++)
{
	for($j=1;$j<=$n-$i;$j++)
	{
		echo '&nbsp';
	}
		for($k=1;$k<=(2*$i-1);$k++)
		{
			if($k==1||$k==(2*$i-1))
			{
				echo '*';
			}
			else{
				echo '&nbsp';
			}
		}
	
	echo'<br/>';
}
for($i=$n-1;$i>=0;$i--)
{
	for($j=1;$j<=$n-$i;$j++)
	{
	echo '&nbsp';
	}
	for($k=1;$k<=(2*$i-1);$k++)
	{
	if($k==1||$k==(2*$i-1))
	{
	echo '*';
	}
	else{
	echo '&nbsp';
	}
	}echo'<br/>';
}


?>
