<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_12.php</title>
</head>
<body>
<p>
<?php
 	   $i=0;
       $sum=0;
        do {
         $i=$i+1; //$i++ 也可
         $sum=$sum+$i;
         print "\$SUM=$sum<br>";
        }while ($i<100) 
 
 ?>
</p>

<hr/>

</body>
</html>