<?php
/**
 * Created by PhpStorm.
 * Date: 2018. 12. 06.
 */

$Input=file("Input.txt",FILE_IGNORE_NEW_LINES);
$NumberOfCharacters=0;
$NumberOfCharactersInMemory=0;
$NumberOfCharactersSlash=0;
foreach($Input as $Chars)
{
    $NumberOfCharacters+=strlen($Chars);
    eval("\$String=".$Chars.";");
    echo $String;
    $NumberOfCharactersSlash+=strlen('"'.addslashes($Chars).'"');
    $NumberOfCharactersInMemory+=strlen($String);
}
echo "Number of Characters(Total): ";
echo $NumberOfCharacters;
echo "</br>";
echo "Number of Characters in Memory: ";
echo $NumberOfCharactersInMemory;
echo "</br>";
echo "Difference: ";
echo $NumberOfCharacters-$NumberOfCharactersInMemory;
echo "</br>";
echo "The newly encoded strings(total): ";
echo $NumberOfCharactersSlash;
echo "</br>";
echo "Difference: ";
echo $NumberOfCharactersSlash-$NumberOfCharacters;
?>