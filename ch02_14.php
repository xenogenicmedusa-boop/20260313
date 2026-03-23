<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_12.php</title>
</head>
<body>
<p>
<?php
       $sum=0;
       for ($i=1;$i<=100;$i=$i+1) {
         $sum=$sum+$i;
         print "\$SUM=$sum<br>";
        }
 
 ?>
</p>

<hr/>

</body>
</html>