<html>
<head>
    <h4> REFRESH PAGE </h4>
</head>
<?php session_start();
$fp = fopen("counter.txt","r");
$count= fread($fp,1024);
fclose($fp);

$count=$count+1;
echo "<p> Page views:".$count."</p>";
$fp = fopen("counter.txt","w");
fwrite($fp,$count);
fclose($fp);
?>
</html>