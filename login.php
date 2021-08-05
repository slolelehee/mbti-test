<?php
echo "username : {$_POST['username']}<br>";
echo "password : {$_POST['passoword']}";

&lt;?php
/*** login.php 파일과 같은 폴더에 '아이디.txt' 이름으로 저장 ***/
$filename = "{$_POST['username']}.txt";
$txt = <<< EOF
username : {$_POST['username']}
password : {$_POST['password']}
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
