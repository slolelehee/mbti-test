<?php
echo "name : {$_POST['name']}<br>";
echo "ID : {$_POST['ID']} <br>";
echo "e-mail : {$_POST['e-mail']}<br>";
echo "password : {$_POST['password']}<br>";
echo "profile : {$_POST['profile']}<br>";
echo "club : {$_POST['club']}<br>";
echo "major : {$_POST['major']}";

&lt;?php
/*** join.php 파일과 같은 폴더에 '이메일.txt' 이름으로 저장 ***/
$filename = "{$_POST['e-mail']}.txt";
$txt = <<< EOF
name : {$_POST['name']}
ID : {$_POST['ID']}
e-mail : {$_POST['e-mail']}
password : {$_POST['password']}
profile : {$_POST['profile']}
club : {$_POST['club']}
major : {$_POST['major']}
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
