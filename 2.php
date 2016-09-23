<?php


$i;
$j;
$k;
$l;
$n=5;
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

?>
