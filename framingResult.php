
<?php

$length = $_POST['length'];
$width = $_POST['width'];

$plexi = $_POST['plexi'];
$frame = $_POST['frame'];
$mat = $_POST['mat'];

$plexC = (4608/$plexi);

$frameTotal = (($length*2) + ($width*2))/12;

$matC = (1280/$mat);

$area = $length*$width;

$plexCost = $area/$plexC;
$frameCost = $frameTotal*$frame;
if ( ($length <= 32  && $width > 40) ||  ($width <= 32  && $length > 40 ) || ($width > 32  && $length > 40 )){$matCost = "at least $".$mat." - the piece is larger than a single sheet of matboard!"; $yes = 2;  }
else {$matCost = $area/$matC; $matCost = round($matCost, 2);} 

$plexCost = round($plexCost, 2);
$frameCost = round($frameCost, 2);

$grandTotal= $plexCost+$frameCost+$matCost;

echo "The cost of the plex is: $".$plexCost."<br>";
echo "The cost of the frame is: $".$frameCost."<br>";
if ($yes != 2)echo "The cost of the mat is: $".$matCost."<br><br>";
else echo "The cost of the mat is ".$matCost."<br><br>";

echo "The grand total is: $".$grandTotal;

?>