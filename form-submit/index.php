<?php
header("Content-Type: text/html;charset=utf-8");
?>

<script type="text/javascript">
<!--
	function checkName() {
		var name = document.getElementById("name").value;
		if(name == '') {
			alert('姓名不能为空！');
			return false;
		}
		return true;
	} 
//-->
</script>

  <form action="info.php" method="get">
	<lable>姓名：</label>
  <input type="text" name="name" id="name" value=""/>

  <input type="submit" name="ok" value="提交" onClick="javascript:return checkName();"/>
  </form>
