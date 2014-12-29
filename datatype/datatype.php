<?
header("Content-type: text/html; charset=utf-8");
/*
注意：
1. header函数前面不能有任何其他语句了
2. 文件必须用编译器重新保存为utf-8编码
*/


/*
	双引号里面对转义字符支持
	单引号不支持转义字符
*/

/*
	声明自定义变量的第一个字母
	$_
	$a-z
	$A-Z
*/

$boolean_flag = TRUE;  //定义boolean型  >0的所有值都认为是真， TRUE大小写不敏感，写成true也可以
echo "true:" + $boolean_flag;

echo "\n"; //换行
print "<br/>";

$boolean_flag = FALSE;  //定义boolean型
echo "false:" + $boolean_flag;

echo "\n"; //换行，好像是tab，不是换行
print "<br/>";

$int_one = 123; //定义整型

echo $int_one;

echo "\n"; //换行，好像是tab，不是换行
print "<br/>";

$float_one=1.01;
$float_two=3.1415926;

echo $float_one;
echo "\n"; //换行，好像是tab，不是换行
print "<br/>";
echo $float_two;


echo "\n"; //换行，好像是tab，不是换行
print "<br/>";

$array_one=array(1,2,3,4);
$array_two=array("A"=>1, "B"=>2);

echo $array_one;
echo "\n"; //换行，好像是tab，不是换行
print "<br/>";
echo $array_two;

echo "\n"; //换行，好像是tab，不是换行
print "<br/>方式一：只能输出值value不能输出key";
//方式一：只能输出值value不能输出key
foreach($array_two as $item)
print "<br/>".$item;


echo "\n"; //换行，好像是tab，不是换行
print "<br/>方法二：value与key都可输出";
//方法二：value与key都可输出
foreach($array_two as $key=>$value)
echo "<br/>".$key."=>".$value;

echo "\n"; //换行，好像是tab，不是换行
print "<br/>方法三：value与key都可输出";
//方法三：value与key都可输出
while($color=each($array_two)){
	echo $color['key'];
}


echo "\n"; //换行，好像是tab，不是换行
print "<br/>array (1, 2, array (\"a\", \"b\", \"c\"))<br/>";
$a = array (1, 2, array ("a", "b", "c"));
var_dump ($a);


echo "\n"; //换行，好像是tab，不是换行
print "<br/>";
echo "\n"; //换行，好像是tab，不是换行
print "<br/>";

$str_test="你好\r\n宝贝";
$str_test_two='你好\r\n宝贝!';
echo $str_test;
echo "\n"; //换行，好像是tab，不是换行
print "<br/>";
echo $str_test_two;

?>

<font color=red>hello tony!</font>