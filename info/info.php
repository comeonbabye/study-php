<?
header("Content-type: text/html; charset=utf-8"); 

$dbc= mysql_connect("127.0.0.1","root","root");
if(!$dbc) {
    echo"数据库链接错误!";
}else{
		//定义变量
		$info_str = "mysql测试连接成功！";
		//第一种打印方式
    echo $info_str;
    //第二种打印方式
    print $info_str;
}
mysql_close();

phpinfo();


//display_errors=on才能显示错误
    
?>