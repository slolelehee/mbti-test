<?php
echo "name : {$_POST['name']}<br>";
echo "ID : {$_POST['ID']}";

&lt;?php
/*** searchforpassword.php 파일과 같은 폴더에 '이름.txt' 이름으로 저장 ***/
$filename = "{$_POST['name']}.txt";
$txt = <<< EOF
name : {$_POST['name']}
ID : {$_POST['ID']}
EOF;
$fp = fopen($filename, "w");
fwrite($fp, $txt);
fclose($fp);

/*** 텍스트 파일 불러오기 ***/
$fp = fopen($filename, "r");
while($line = fgets($fp)){
echo nl2br($line);
}
fclose($fp);
?>
