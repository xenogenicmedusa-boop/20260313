<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_12b1.php</title>
</head>
<body>
<p>
<?php
$r=$_GET['r'];
      for ($i=1;$i<=$r;$i=$i+1){
            echo "這是迴圈 $i <br>\n";
      }
 ?>
</p>

<hr/>

</body>
</html>