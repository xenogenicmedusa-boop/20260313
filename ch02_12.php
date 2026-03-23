<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_12.php</title>
</head>
<body>
<p style="padding:30px;">
<?php
      $i=0;
      $sum=0;
      While ($i<100) {
       $i=$i+1; //$i++ 也可
       $sum=$sum+$i;
       print "\$SUM=$sum<br>";
      }
 ?>
</p>

<hr/>

</body>
</html>