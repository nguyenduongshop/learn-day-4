<?php

	$username = $_POST["username"];
	$password = $_POST["password"];

echo "<br>Cảm ơn bạn $username đã đăng ký thành công!<br>";
$fileName = "users.txt";
$fs = fopen($fileName, 'a') or die("can't open file");

$str = array(userName=>$username, password=>$password);
$luu_json = json_encode($str);
fwrite($fs, ",");
fwrite($fs, $luu_json);

fclose($fs);


$encodedString = json_encode($str);

//Save the JSON string to a text file.
file_put_contents('json_array.txt', $encodedString);
?>