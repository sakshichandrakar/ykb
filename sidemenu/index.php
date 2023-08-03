<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery-1.8.0.js"></script>
<script>
function show()
{
	//document.getElementById('leftmenu').style.left="0px";
	//alert(document.getElementById('leftmenu').style.left);
	if(document.getElementById('leftmenu').style.left=="-180px")
	$("#leftmenu").animate({left: '-2px'});
	
	
}

function hide()
{
	//document.getElementById('leftmenu').style.left="-180px";
	$("#leftmenu").animate({left: '-180px'});
}

function display()
{
	if(document.getElementById('leftmenu').style.left=="-180px")
	show();
	else
	hide();
}

</script>

</head>

<body>
<div id="leftmenu" onclick="display()" style="float:left; width:200px; height:200px; position:fixed; top:200px; left:-180px; border:1px solid #30F; background-color:#CCC">
<div style="float:left; width:170px; height:200px; border:1px solid #30F; overflow:auto">
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />
<a href="http://www.google.co.in">This is test.</a><br />

</div>
<div style="float:left; width:20px; border:1px solid #F00; height:inherit; cursor:pointer; background-color:#F30"></div>
</div>

<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>
<p>fdsfsdfs</p>

</body>
</html>