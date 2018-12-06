<?php
/**
 * Created by PhpStorm.
 * Date: 2018. 12. 04.
 */
$Input=fopen("Input.txt","r"); //No Need if you choose the solution below
$Array=fgets($Input);                         //or $Array=file_get_contents("Input.txt");
$WhichFloor=0;
$FirstChar=0;
$WhichIsBasementFloor=0;
$FirstBasementEnter=false;
foreach(str_split($Array) as $MyArray)
{
    if($WhichFloor!=-1&&$FirstBasementEnter==false) $FirstChar++;
    if($WhichFloor==-1) $FirstBasementEnter=true;
    if($MyArray=="(") $WhichFloor++;
    else $WhichFloor--;
    //or if($MyArray==")" $WhichFloor--;
}
fclose($Input);                             //No Need if you choose the file_get_contents solution
echo "The Number of Floor where is he will be at the end: " ;
echo $WhichFloor;
echo "</br>";
echo "First TIme when Santa reaches the basement: ";
echo $FirstChar;
?>