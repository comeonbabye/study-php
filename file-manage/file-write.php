<?php
/*
 * Created on 2014-12-29
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

  header("Content-type: text/html; charset=utf-8");

	$fp  = fopen("test.txt", "a");
	fwrite($fp, "this is a test.\n");

	if(fclose($fp)) {
		echo "关闭文件成功！";
	}
?>
