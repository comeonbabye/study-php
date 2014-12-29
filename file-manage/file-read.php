<?php
/*
 * Created on 2014-12-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 header("Content-type: text/html; charset=utf-8");

	$myFile = fopen("readme.txt", "r");

	if($myFile) {
		echo "打开文件成功1！<br>";
		while(!feof($myFile)) {
			$line = fgets($myFile);
			echo $line."<br>";
		}
	} else {
		echo "打开文件失败！";
	}

	if(fclose($myFile)) {
		echo "关闭文件成功！";
	}
	echo "<br>";
	echo "一次性读取整个文件，然后再关闭这个文件<br />";
	$all = readfile("readme.txt");

	echo "<br>";
	echo "<br>";
	$content = file("readme.txt");
	foreach($content as $item) {
		echo $item."<br>";
	}


?>
