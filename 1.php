<?php

$i;//行数
$j;
$k;

$n=15;
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
