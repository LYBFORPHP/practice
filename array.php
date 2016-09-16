<?php
$arr=array(
array(0,0,0,0,0,1),
array(1,1,1,1,1,2),
array(2,2,2,2,2),
array(3,3,3,3,3),
array(4,4,4,4,4)										
);
for ($i=0;$i<count($arr);$i++)
{
	for ($j=0;$j<count($arr[$i]);$j++)
	{	
		echo $arr[$i][$j]."&nbsp;";
	}
	echo "<br/>";
	
}