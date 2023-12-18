
<?php
$fd = fopen("ip.txt",'r') or die('Error');
$fdq = fopen("input.txt",'w+') or die('Error');
$line = fgets($fd);
preg_match_all("/(\b(\d|\d\d|1\d\d|2[0-4]\d|2[0-5][0-5])(\.\d|\.\d\d|\.1\d\d|\.2[0-4]\d|\.2[0-5][0-5]){3}\b)|(\b(\d|\d\d|\d\d\d|\d\d\d\d|[A-F]|[A-F]\d|[A-F]\d\d|[A-F]\d\d\d|\d[A-F]|\d[A-F]\d|\d[A-F]\d\d|\d\d[A-F]|\d\d[A-F]\d|\d\d\d[A-F]|[A-F][A-F]|[A-F][A-F]\d|[A-F][A-F]\d\d|[A-F]\d[A-F]|[A-F]\d[A-F]\d|[A-F]\d\d[A-F]|\d[A-F][A-F]|\d[A-F][A-F]\d|\d[A-F]\d[A-F]|\d\d[A-F][A-F]|[A-F][A-F][A-F]\d|[A-F]\d[A-F][A-F]|[A-F][A-F]\d[A-F]|[A-F][A-F][A-F]\d|\d[A-F][A-F][A-F]|[A-F][A-F][A-F][A-F])(\:\d|\:\d\d|\:\d\d\d|\:\d\d\d\d|\:[A-F]|\:[A-F]\d|\:[A-F]\d\d|\:[A-F]\d\d\d|\:\d[A-F]|\:\d[A-F]\d|\:\d[A-F]\d\d|\:\d\d[A-F]|\:\d\d[A-F]\d|\:\d\d\d[A-F]|\:[A-F][A-F]|\:[A-F][A-F]\d|\:[A-F][A-F]\d\d|\:[A-F]\d[A-F]|\:[A-F]\d[A-F]\d|\:[A-F]\d\d[A-F]|\:\d[A-F][A-F]|\:\d[A-F][A-F]\d|\:\d[A-F]\d[A-F]|\:\d\d[A-F][A-F]|\:[A-F][A-F][A-F]\d|\:[A-F]\d[A-F][A-F]|\:[A-F][A-F]\d[A-F]|\:[A-F][A-F][A-F]\d|\:\d[A-F][A-F][A-F]|\:[A-F][A-F][A-F][A-F]){7}\b)/i", $line, $result);
foreach ($result as $arr) {
    $regexp = $arr[0];
    break;
}
if($regexp != null){
    fwrite($fdq, $regexp);
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
