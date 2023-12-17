<?php
$fd = fopen("ip.txt",'r') or die('Error');
$fdq = fopen("input.txt",'w+') or die('Error');
$line = trim(fgets($fd));
$V4 = preg_match_all("/\b(((\d)|(\d\d)|(1\d\d)|(2[0-4]\d)|(25[0-5])).){3}((\d)|(\d\d)|(1\d\d)|(2[0-4]\d)|(25[0-5]))\b/", $line);
$V6 = preg_match_all("/\b(((\d|[A-F]){4}):){7}((\d|[A-F]){4})\b/", $line);
if($V4 != null || $V6 != null){
    fwrite($fdq, $line);
} else {
    fwrite($fdq, "IP фигня");
}
fclose($fd);
fclose($fdq);
?>
<html>
<head>
    </head>
    <body>
    </body>
</html>

