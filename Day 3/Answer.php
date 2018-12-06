<?php
error_reporting("0");
/**
 * Created by PhpStorm.
 * Date: 2018. 12. 04.
 */
$Input=file_get_contents("Input.txt");
$x=0;
$y=0;
$SantaX=0;
$SantaY=0;
$RoboSantaX=0;
$RoboSantaY=0;
$Coordinates=['0x0'];
$SantaCoordinates['0x0'];
$RoboSantaCoordinates['0x0'];
$HowManyLocations=0;
$HowManyLocationsTogether=0;
$HowManyLocationsTogetherAnswer=0;
for($i=0;$i<strlen($Input);$i++)
{
    $Directions=$Input[$i];
    switch($Directions)
    {
        case"<":$y--;
            break;
        case ">":$y++;
            break;
        case "^":$x++;
            break;
        case"v":$x--;
            break;
        default:
            break;
    }
    $Coordinates[]=$x.'x'.$y;
}
$HowManyLocations=sizeof(array_unique($Coordinates));
echo "Santa Delivered at least one present to ";
echo $HowManyLocations;
echo " houses.";
echo "</br>";
for($i=0;$i<strlen($Input);$i++)
    {
        $Directions=$Input[$i];
        if($i%2==0)
        {
            switch ($Directions)
            {
                case"<":$SantaY++;
                    break;
                case ">":$SantaY--;
                    break;
                case "^":$SantaX++;
                    break;
                case"v":$SantaX--;
                    break;
                default:
                    break;
            }
            $SantaCoordinates[]=$SantaX."x".$SantaY;
        }

        if($i%2==1)
        {
            switch ($Directions)
            {
                case"<":$RoboSantaY++;
                    break;
                case ">":$RoboSantaY--;
                    break;
                case "^":$RoboSantaX++;
                    break;
                case"v":$RoboSantaX--;
                    break;
                default:
                    break;
            }
            $RoboSantaCoordinates[]=$RoboSantaX."x".$RoboSantaY;
        }
    }
    $HowManyLocationsTogether=array_merge($SantaCoordinates,$RoboSantaCoordinates);
$HowManyLocationsTogetherAnswer=sizeof(array_unique($HowManyLocationsTogether));
echo "Santa and RoboSanta delivered at least one present to ";
echo $HowManyLocationsTogetherAnswer;
echo " houses.";
?>