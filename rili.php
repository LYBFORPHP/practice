<?php
	
	$current = getdate();//获取当前时间信息

	//如果$_GET['m']不存在，取默认当前年份
	$year = isset($_GET['y'])?$_GET['y']:$current['year'];

	//如果 $_GET['m'] 不存在，取默认 当前月份
	$month = isset($_GET['m'])?$_GET['m']:$current['mon'];

	//当用户按下一个月时大于12，将重置为 1月，并且年份+1
	if($month>12){
		$month = 1;
		$year++;
	}
	if($month<1){
		$month = 12;
		$year--;
	}


	//1号
	$day = 1;

	//生成时间戳
	$strDate = strtotime("{$year}/{$month}/{$day}");

	//获取当前月份天数
	$t_day = date('t',$strDate);
	$w = date('w',$strDate);

	/*
		表格
			1.明确指定月份共有几天  9月
			2.要知道1号是星期几
			3.换行应该是 空格+星期几
	*/

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style>
			table td{
				border:1px solid #ccc;
				padding:10px;
			}

		</style>
	</head>
	<body>
		<table>
			<caption><?php echo "{$year}年{$month}月";?></caption>
			<col align="left"/>
			<tr>
				<td>日</td>
				<td>一</td>
				<td>二</td>
				<td>三</td>
				<td>四</td>
				<td>五</td>
				<td>六</td>
			</tr>
			<tr>
				<!-- 输出空格 -->
				<?php for($k = 1;$k <=$w;$k++): ?>
					<td></td>
				<?php endfor;?>
				
				<!--输出日期  -->
				<?php for($i = 1;$i<=$t_day; $i++):?>
					
					<td><?php echo $i; ?></td>
					<?php
						//必须是空格+天数
						if(($i+$w)%7==0){
							echo '</tr><tr>';
						}
					?>
					<?php endfor;?>	
			</tr>
		</table>
		<a href="./6-1.php?y=<?php echo $year;?>&m=<?php echo $month - 1;?>">上一月</a>
		<a href="./6-1.php?y=<?php echo $year;?>&m=<?php echo $month + 1;?>">下一月</a>
	</body>
</html>
