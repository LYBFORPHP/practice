<?php
$mysqli=new MYSQLI("localhost","root","19920514","bbs"); 
    if(!$mysqli)
        {
        	die($mysqli->connect_error);
}

$sql="select * from `message`";
$res=mysqli_query($mysqli,$sql);
//var_dump($res);
while ($row=mysqli_fetch_object($res))
{
	
	var_dump($res);
	/*foreach ($row as $key=>$val){
	echo "--$val";
	}*/
	echo "<br/>";
}
$res->free();
$mysqli->close();