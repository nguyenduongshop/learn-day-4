
<?php
    $read = file('users.txt');
    foreach ($read as $line) {
     $iparr = split (",", $line);     
    $doc_json =  "[$line]";
    }
?>
<!DOCTYPE html>
<html lang="vi"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<h2><strong><font color = red>Danh sách đăng ký.</font></strong></h2> 
<head>
    <style type="text/css"> 
    table, th, td {  
    border: 2px solid blue;
    border-collapse: collapse;
}
    </style>
    
    <title>DANH SÁCH ĐĂNG KÝ</title>
    <meta charset="utf-8">
</head>

<body>
    <thead>
    <table border="1">
        <tr>
            <th style="width: 120px;">Username</th>
            <th style="width: 100px;">Password</th>
            
        </tr>
    </thead>
<tr>
<?php


$decoded = json_decode($doc_json, true);

foreach($decoded as $k => $v){
    $name = $v['userName'];
    $pass = $v['password'];
   echo "<td><font color = red>$name</font></td>"; 
   echo "<td><font color = red>$pass</font></td></tbody>";  
}

?>

</tr>
        
    </table>
</body>
<br>
<a href="https://thietkewebgiare.xyz/">Quay lại trang đăng ký</a>
</html>