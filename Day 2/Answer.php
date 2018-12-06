<?php
error_reporting("0");
/**
 * Created by PhpStorm.
 * Date: 2018. 12. 04.
 */
$Input=fopen("Input.txt","r");
$Array=$Input;
$FullSize=0;
$Ribbons=0;
while(!feof($Array))
{
    $Size=fgets($Array);
    $BoxDimensions=explode("x",$Size);
    list($Length,$Width,$Height)=$BoxDimensions;
    $BoxSizes=
    [
        $Length*$Width,
        $Width*$Height,
        $Height*$Length
    ];
    $RibbonLength=
    [
        $Length+$Width,
        $Width+$Height,
        $Height+$Length
    ];
    $FullSize+=2*array_sum($BoxSizes)+min($BoxSizes);
    $Ribbons+=2*min($RibbonLength)+($Length*$Width*$Height);
}
fclose($Input);
echo "How Many Wrapping Paper they should order: ";
echo $FullSize;
echo"</br>";
echo " How Many Ribbons they should order: ";
echo $Ribbons;
?>

