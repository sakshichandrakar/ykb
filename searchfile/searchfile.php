<?php
ini_set('memory_limit','256M'); 
ini_set('max_execution_time', 0); 

$pathname    = "";
$searchcont  = "";
$replacecont = "";
$optionshow  = "1";
$srchin      = array('php','html','htm','txt','js','css');

if(isset($_POST['submit']))
{
	$pathname    = $_POST['pathname'];
	$searchcont  = $_POST['searchcont'];
	$replacecont = $_POST['replacecont'];
	$optionshow  = $_POST['optionshow'];
	
	if(isset($_POST['srchin']))
	$srchin = $_POST['srchin'];
}
?>
<html>
<head>
<title>Search content in file</title>

<script>
function funshowhide(val)
{
	if(val==0)
	{
		document.getElementById('advopt').style.display="table-row";
		document.getElementById('advopttxt').style.display="none";
		document.getElementById('replace').style.display="none";
	}
	else
	{
		document.getElementById('advopt').style.display="none";
		document.getElementById('advopttxt').style.display="table-row";
		document.getElementById('replace').style.display="block";
	}
}
</script>

</head>
<body>

<div style="position:absolute; top:10px; background-color:#FFF3EC; width:95%; height:150px; border:1px solid #666; padding:10px; margin:5px;">
<form action="" method="post">

<table>
<tr>
<td>Enter Path : </td>
<td><input type="text" name="pathname" required value="<?php echo $pathname; ?>" size="50" /></td>
</tr>

<tr>
<td>Enter search Content : </td>
<td><input type="text" name="searchcont" required value="<?php echo $searchcont; ?>" size="50" /></td>
</tr>

<tr>
<td>In File : </td>
<td><input type="radio" name="optionshow" id="avail" value="1" checked>Available
<input type="radio" name="optionshow" id="navail" value="2" <?php if($optionshow==2) { ?> checked <?php } ?>>Not Available</td>
</tr>

<tr>
<td>Search In File : </td>
<td>
<input type="checkbox" name="srchin[]" id="php" value="php" <?php if(in_array('php',$srchin)){?>checked<?php }?>>PHP
<input type="checkbox" name="srchin[]" id="html" value="html" <?php if(in_array('html',$srchin)){?>checked<?php }?>>HTML
<input type="checkbox" name="srchin[]" id="htm" value="htm" <?php if(in_array('htm',$srchin)){?>checked<?php }?>>HTM
<input type="checkbox" name="srchin[]" id="txt" value="txt" <?php if(in_array('txt',$srchin)){?>checked<?php }?>>TXT
<input type="checkbox" name="srchin[]" id="js" value="js" <?php if(in_array('js',$srchin)){?>checked<?php }?>>JS
<input type="checkbox" name="srchin[]" id="css" value="css" <?php if(in_array('css',$srchin)){?>checked<?php }?>>CSS
</td>
</tr>


<tr id="advopt">
<td><a style="cursor:pointer; color:#03C" onClick="funshowhide(1)">Advanced Option</a></td>
<td></td>
</tr>

<tr id="advopttxt" style="display:none">
<td>Enter Replace Content : </td>
<td><input type="text" name="replacecont" value="<?php echo $replacecont; ?>" size="50" />
<a style="cursor:pointer; color:#03C" onClick="funshowhide(0)">Hide Option</a>
</td>
</tr>

<tr>
<td></td>
<td>
<table><tr><td><input type="submit" name="submit" value="Search" /></td>
<td><input type="submit" name="replace" value="Replace" onClick="return checksure();" id="replace" /></td>
<td><input type="button" value="Clear" onClick="location='searchfile.php'" /></td>
</tr></table>
</td>
</tr>
</table>
</form>
</div>

<script>
function checksure()
{
	if(!confirm("Are you sure you want to replace this?"))
	{
		return false;
	}
}
</script>

<br /><br /><br /><br /><br /><br /><br><br><br>

<?php if($replacecont!="") { ?>
<script>funshowhide(1);</script>
<?php } else { ?>
<script>funshowhide(0);</script>
<?php } ?>

<?php
if(isset($_POST['submit']) || isset($_POST['replace']))
{
	$pathname    = $_POST['pathname'];
	$searchcont  = $_POST['searchcont'];
	$replacecont = $_POST['replacecont'];
	$optionshow  = $_POST['optionshow'];
	
	if(isset($_POST['srchin']))
	$srchin = $_POST['srchin'];
	
	$path = realpath($pathname);
	$searchfor = $searchcont;
	
	$readfileOnly = $srchin; //array('php','html','htm','txt','js','css');
	
	$found     = 0;
	$totalFile = 0;
	$totalDire = 0;
	$continFil = 0;
	$replaced  = 0;
	
	echo "<ol type='1'>";
	
	$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
	foreach($objects as $name => $object)
	{
		if(!is_dir($name))
		{
			$totalFile++;
			$ext = pathinfo($name, PATHINFO_EXTENSION);
			$ext = strtolower($ext);
	
			if(in_array($ext,$readfileOnly))
			{
				$lines = file($name); 
				$c=1;
				if(count($lines) > 0)
				{
					if($optionshow==1) // if in file available checked //
					{
						$b=0;
						foreach($lines as $line) 
						{
							if(strpos($line, $searchfor) !== false)
							{
								if($b == 0)
								{
									echo "<li>$name";
									echo '<ul style="list-style:decimal">';
									$continFil++;
								}
								 
								echo "<li style='color:#f00'>Line No. ($c) - ".htmlspecialchars($line)."</li>";
								
								$found++;
								$b++;
							}
							$c++;
						}
						echo "</ul>";
						echo "</li>";
						
						if(isset($_POST['replace']) && $b > 0)
						{
							file_put_contents($name,str_replace($searchfor,$replacecont,file_get_contents($name)));
						}
					}
					else if($optionshow==2) // if in file not available checked //
					{
						$fileContAvailable = 0;
						foreach($lines as $line) 
						{
							if(strpos($line, $searchfor) !== false)
							{
								$fileContAvailable = 1;
								break;
							}
							$c++;
						}
						
						if($fileContAvailable==0)
						{
							$continFil++;
							$found++;
							echo "<li>$name</li>";
						}
					}
				}
			}
		}
		else
		$totalDire++;
	}
	echo "</ol>";
	
	?>
    <div style="position:absolute; top:16px; right:20px; background-color:#FFF3EC; width:40%;">
    <h1>Total Found : <?php echo $found; ?></h1>
    <p>Total Directory : <?php echo $totalDire; ?>, Total Files : <?php echo $totalFile; ?>, Found In File : <?php echo $continFil; ?></p>
    </div>
    <?php
}
?>

</body>
</html>