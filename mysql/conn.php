<?php

/*
 * PHP100Job v1.0
 * Programmer : Msn/QQ haowubai@hotmail.com (925939)
 * www.php100.com Develop a project PHP - MySQL - Apache
 * Window 2003 - Preferences - PHPeclipse - PHP - Code Templates
 */
header("Content-type: text/html; charset=utf-8");
#$conn = @ mysql_connect("localhost", "root", "hejunwei") or die("数据库链接错误");
$conn = @ mysql_connect("localhost", "root", "root") or die("数据库链接错误");
$db = mysql_select_db("php-bbs", $conn);
mysql_query("set names 'utf8'"); //使用GBK中文编码;

function htmtocode($content) {
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

//$content=str_replace("'","‘",$content);
 //htmlspecialchars();
?>
