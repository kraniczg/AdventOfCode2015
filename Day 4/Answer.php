<?php
/**
 * Created by PhpStorm.
 * Date: 2018. 12. 05.
 */
$Input=file_get_contents("Input.txt"); //fopen there will not works
$Hash;
$i=0;
$Correct=false;
while(!$Correct)
{
    $Hash=md5("$Input".$i);
    if(substr($Hash,0,5)==="00000") $Correct=true;
    else $i++;
}
echo "The Correct MD5 hash with 5 zeroes was ";
echo $Hash;
echo "</br>";
echo "The lowest number which produces this hash: ";
echo $i;
echo "</br>";
$Correct=false;
$i=0;
while(!$Correct)
{
$Hash=md5("$Input".$i);
if(substr($Hash,0,6)==="000000") $Correct=true;
else $i++;
}
echo "The Correct MD5 hash with 6 was ";
echo $Hash;
echo "</br>";
echo "The lowest number which produces this hash: ";
echo $i;
?>