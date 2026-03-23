<?php
$sid=$_GET['sid'];
$sname=$_GET['sname'];
$score=$_GET['score'];

if($score>=100){
    echo "學號:"."$sid<br>"."姓名:"."$sname<br>"."學期成績超高標";
}elseif($score>=80){
    echo "學號:"."$sid<br>"."姓名:"."$sname<br>"."學期成績高標";
}elseif($score>=60){
    echo "學號:"."$sid<br>"."姓名:"."$sname<br>"."學期成績中標";
}else{
    echo "學號:"."$sid<br>"."姓名:"."$sname<br>"."學期成績低標";
}


 ?>


<hr/>
