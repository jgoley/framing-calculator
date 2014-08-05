<?
$plexi= 75;
$frame= 1.15;
$mat = 7;
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Framing Cost Calculator</title>
</head>

<body>


<form method="post" action="framingResult.php" >
<div style="width:105px; float:left"><p>Length of Piece:</p><p>Width of Piece:</p></div>
<div style="width:200px; float:left">
<p> <input type="text" name="length" /></p>
<p> <input type="text" name="width" /></p>
</div>
<div style="clear:both"></div>
<div style="width:190px; float:left"><p>Cost Plexiglass 4x8 sheet:</p><p>Cost of Frame per linear foot:</p><p>Cost of matboard:</p></div>
<div style="width:200px; float:left">
<p> <input type="text" name="plexi" value="<?php echo $plexi; ?>" /></p>
<p> <input type="text" name="frame" value="<?php echo $frame; ?>" /></p>
<p> <input type="text" name="mat" value="<?php echo $mat; ?>" /></p>
</div>
<div style="clear:both"></div>
<input type="submit" value="Calculate"/>
</form>



</body>
</html>
