<?php
$hostname = "localhost";//ชื่อHost
$database = "db_wb";//ชื่อฐานข้อมูล
$username = "root";//username ของฐานข้อมูลของท่าน
$password = "";//รหัสผ่านของฐานข้อมูลของท่าน
$connectdb = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database);
mysql_query("SET character_set_results=utf8");
mysql_query("SET collation_connection=utf8");
mysql_query("SET NAMES 'utf8'");


/*$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
);*/

/*$namehost = 'localhost';
$root = 'root';
$password = 'root';
$dbname = 'db_wb';
$dbcon = mysqli_connect($namehost,$root,$password,$dbname);
if((mysqli_connect_errno())){
	echo "Fail".mysqli_connect_error();
}
mysqli_set_charset($dbcon, 'utf8');*/
?>