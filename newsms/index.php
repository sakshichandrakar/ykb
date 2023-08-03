<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function getRec()
{
	var mob = document.getElementById('mobile').value;
	var msg = document.getElementById('msg').value;
	if(navigator.appName=="Microsoft Internet Explorer")
	obj=new ActiveXObject("Msxml2.XMLHTTP")
	else
	obj=new XMLHttpRequest()
	obj.open("post","sendsms.php?mob="+mob+"&msg="+msg,true)
	obj.send(null)
	obj.onreadystatechange=function(){
		if(obj.readyState==4)
		{
			//alert(obj.responseText);
			document.getElementById('div1').innerHTML=obj.responseText
		}
	}
	
}
</script>

</head>

<body>
<input type="text" name="mobile" id="mobile" />
<input type="text" name="msg" id="msg" />
<input type="button" onclick="getRec()" value="Send" />
<br /><br />
<div id="div1" style="width:100%; height:300px; border:1px solid #003"></div>
</body>
</html>