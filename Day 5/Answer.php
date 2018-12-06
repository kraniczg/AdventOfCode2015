<?php
error_reporting("0");
/**
 * Created by PhpStorm.
 * Date: 2018. 12. 05.
 */
$Input=file_get_contents("Input.txt");
$Array=explode("\n",$Input);
$NiceString=0;
$SecondRuleNiceString=0;
foreach( $Array as $MyArray)
{
    $AllCharacters=str_split($MyArray);
    $VowelCount=substr_count($MyArray,"a")+substr_count($MyArray,"e")+substr_count($MyArray,"i")+substr_count($MyArray,"o")+substr_count($MyArray,"u");
    $ThreeOrMoreVowels=false;
    $DeniableChars=false;
    $DoubleChar=false;
    $RepeaterLetter=false;
    $TwiceAppear=false;
    if($VowelCount>=3) $ThreeOrMoreVowels=true;
    if(strpos($MyArray,"ab")!==false||strpos($MyArray,"cd")!==false||strpos($MyArray,"pq")!==false||strpos($MyArray,"xy")!==false) $DeniableChars=true;
    foreach($AllCharacters as $KeyLetter => $ActualLetter)
    {
        if($KeyLetter===0)continue;
        if($ActualLetter==$AllCharacters[$KeyLetter-1])
        {
            $DoubleChar=true;
            break;
        }
    }
    foreach($AllCharacters as $KeyLetter => $ActualLetter)
    {
        if($KeyLetter===0||$KeyLetter===1)continue;
        if($ActualLetter==$AllCharacters[$KeyLetter-2])
        {
            $RepeaterLetter=true;
            break;
        }
    }
    foreach($AllCharacters as $KeyLetter => $ActualLetter)
    {
        if($ActualLetter===count($AllCharacters)-1) continue;
        if(substr_count($MyArray,$ActualLetter.$AllCharacters[$KeyLetter+1])>1)
        {
            $TwiceAppear=true;
            break;
        }
    }
    if($ThreeOrMoreVowels==true&&$DoubleChar==true&&$DeniableChars==false) $NiceString++;
    if($TwiceAppear==true&&$RepeaterLetter==true) $SecondRuleNiceString++;
}
echo "Number of Nice Strings by the first rule: ";
echo $NiceString;
echo "</br>";
echo "Number of Nice String by the second rule: ";
echo $SecondRuleNiceString;
?>