<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>ch02_7_2b.php</title>
</head>
<body>
   <table border="1">
    <?php
    $i=0;
    $A=0;
    do {
        $i=$i+1; //$i++也可
        $A=$A+$i;
        print "\$A=$A<br>";
        }while ($i<100)
        ?>
    
           <tr>
       <td style="width:200px;">i
        </td>
        <td style="width:200px;"><?=$i?>
       </td>
       </tr>

</table>
<hr/>

</body>
</html>