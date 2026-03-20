<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_12a.php</title>
</head>
<body>
<p>
<?php
      $A=0;
      $B=0;
      While ($A<=5) {
       $A=$A+1; //$A++ 也可
       $B=$B+$A;
       print "\$B=$B<br>";
      }
 ?>
</p>

<hr/>

</body>
</html>