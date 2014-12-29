<?php
/*
 * Created on 2014-12-28
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
header("Content-type: text/html; charset=utf-8");

function hello($name) {

	echo "hello ".$name.", how are you.";
}

function add($a, $b=1000) {
	return $a + $b;
}

echo function_exists("date");
echo "\n"; //换行，好像是tab，不是换行
print "<br/>";
echo function_exists("md5");

print "<br/>";
echo function_exists("hello");


print "<br/>";
echo hello("宝贝");

print "<br/>";
echo add(100,10);

print "<br/>";
echo add(100);

print "<br/>";
echo md5("123456");

/*

PHP Date() 函数
PHP Date() 函数把时间戳格式化为更易读的日期和时间。
语法
date(format,timestamp)
参数	描述
format	必需。规定时间戳的格式。
timestamp	可选。规定时间戳。默认是当前时间和日期。

获得简单的日期
date() 函数的格式参数是必需的，它们规定如何格式化日期或时间。
下面列出了一些常用于日期的字符：
d - 表示月里的某天（01-31）
m - 表示月（01-12）
Y - 表示年（四位数）
1 - 表示周里的某天
其他字符，比如 "/", "." 或 "-" 也可被插入字符中，以增加其他格式。

获得简单的时间
下面是常用于时间的字符：
h - 带有首位零的 12 小时小时格式
i - 带有首位零的分钟
s - 带有首位零的秒（00 -59）
a - 小写的午前和午后（am 或 pm）
**/
print "<br/>";
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l");
print "<br/>";
echo date("Y-m-d h:i:s");
print "<br/>";
echo date("Y-m-d h:i:sa");
?>
