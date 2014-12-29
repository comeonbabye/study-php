<?php
/*
 * Created on 2014-12-28
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
header("Content-type: text/html; charset=utf-8");

$connect= mysql_connect("127.0.0.1","root","root");
if(!$connect) {
    echo"数据库链接错误!";
    die('Could not connect: ' . mysql_error());
}else{
    echo"数据库连接成功！";
}
//选择数据库
$db_selected = mysql_select_db("tony", $connect);
mysql_query("set names 'utf8'"); //使用GBK中文编码;
$sql = "select * from user ";
$result= mysql_query($sql,$connect) or die (mysql_error());

echo "<br/>mysql_fetch_row:<br/>";
print_r(mysql_fetch_row($result));

$result= mysql_query($sql,$connect) or die (mysql_error());
echo "<br/>mysql_fetch_array:<br/>";
print_r(mysql_fetch_array($result));

$result= mysql_query($sql,$connect) or die (mysql_error());
echo "<br/>mysql_num_rows:";
print_r(mysql_num_rows($result));
$result= mysql_query($sql,$connect) or die (mysql_error());
echo "<br/>mysql_insert_id:";
print_r(mysql_insert_id());

$result= mysql_query($sql,$connect) or die (mysql_error());
echo "<br/>循环输出row:";
while($row=mysql_fetch_array($result)) {
	echo "<br/>".$row['id']."<br/><hr>";
	echo "<br/>".$row['name']."<br/><hr>";
	echo "<br/>".$row['password']."<br/><hr>";
	echo "<br/>".$row['email']."<br/><hr>";
	echo "<br/>".$row['create_time']."<br/><hr>";
}



mysql_close();
?>
