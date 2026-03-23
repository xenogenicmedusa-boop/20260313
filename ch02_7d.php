<?php
$sid=$_POST['sid'];
$Pass=$_POST['Pass'];
$sname=$_POST['sname'];
$score=$_POST['score'];

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
    <title>作業2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>

<body>
    學號: <?=$sid?><br/>
    密碼: <?=$Pass?><br/>
    姓名: <?=$sname?><br/>
    <?=$result?>

<hr/>
</body>

</html>