<?php
$sid=$_GET['sid'];
$sname=$_GET['sname'];
$score=$_GET['score'];

if($score>=100){
    $result="學期成績超高標";
}elseif($score>=80){
     $result="學期成績高標";
}elseif($score>=60){
     $result="學期成績中標";
}else{
     $result="學期成績低標";
}


 ?>
<!DOCTYPE html>
<html>

<head>
    <title>作業1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>

<body>
    <h3>學號: <?=$sid?></h3><br>
    <h3>姓名: <?=$sname?></h3><br>
    <h3><?=$result?></h3>

<hr/>
</body>

</html>