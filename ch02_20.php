<?php
// foreach ($_POST as $key=>$value){
//     echo $key.":".$value."<br>";
// }
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$score=$_POST['score'];

if ($score >= 100){
    $result="學期成績超高標";
}
elseif ($score>=80){
    $result="學期成績高標";
}
else {
    $result="學期成績低標";
}


?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>結果</title>
</head>
<body>
    <h1>
        <?php 
        echo "學號:".$sid."<br>".
    "姓名:".$sname."<br>".
    $result."<br>";
?></h1>
</body>
</html>