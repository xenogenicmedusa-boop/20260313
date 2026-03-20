<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_8a2.php</title>
</head>
<body>
<p>
<?php
$A = 70 ;
$B = 78 ;
$C= ($A+$B)/2;

if ($C >= 80) {
    echo "A級分 ";
}elseif($C>=70){
    echo"B級分";
}elseif($C>=60){
    echo"C級分";
}else{
    echo"不及格";
}

 ?>
</p>

<hr/>

</body>
</html>