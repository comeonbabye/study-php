<?php
/*
 * Created on 2014-12-28
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

header("Content-type: text/html; charset=utf-8");

$array_two=array("A"=>1, "B"=>2);

$array_two["A"]="你好";
$array_two["B"]="宝贝";


echo "\n"; //换行，好像是tab，不是换行
print "<br/>方法二：value与key都可输出";
//方法二：value与key都可输出
foreach($array_two as $key=>$value)
echo "<br/>".$key."=>".$value;

print "<br/>数组常用函数";
echo "<br/>数据大小：".count($array_two);
echo "<br/>是否是数组：".is_array($array_two)."<br/>";
print_r($array_two);   //专门打印数组的函数
echo "<br/>";
echo($array_two["A"]);

?>
