<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_7_1.php</title>
</head>
<body>
    <?php
    //運算子
$chinese=90;
$english=80;
$math=70;

$sum=$chinese+$english+$math;
$avg=$sum/3;

 ?>
<p>
<table border="1">
<tr>
<td style="width:200px;">國文
</td>
<td style="width:200px;"><?=$chinese?>
</td></tr>
<tr>
<td style="width:200px;">英文
</td>
<td style="width:200px;"><?=$english?>
</td></tr>
<tr>
<td style="width:200px;">數學
</td>
<td style="width:200px;"><?=$math?>
</td></tr>
<tr>
<td style="width:200px;">總分
</td>
<td style="width:200px;"><?=$sum?>
</td></tr>
<tr>
<td style="width:200px;">平均
</td>
<td style="width:200px;"><?=$avg?>
</td></tr>
</table>

</p>

<hr/>

</body>
</html>