<!DOCTYPE html>
<html>

<head>
    <title>ch02_7b.php</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
</head>

<body>
        <form action="" name="f1" method="get">
        <?php
        $math=$_POST['m'];
        $chinese=$_POST['c'];
        $english=$_POST['e'];

        if (is_numeric($math)&& is_numeric($chinese)&&is_numeric($english)){
            $sum=($chinese+$english+$math);
        $avg=$sum/3;
            echo"數學成績:". "$math<br>"."國文成績:"."$chinese<br>"."英文成績:"."$english<br>"."成績總分:"."$sum<br>"."平均成績:"."$avg<br>";} else print "請輸入數字<br>";
        
        ?>
        
    </form>
    
</body>

</html>

            