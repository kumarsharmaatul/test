<?php
/**
 * Function for anagram sting
 * @category   php Anagram sting
 * @package    PackageName
 * @author     Original Author <Atul kumar sharma>
 * @author     Another Author <another@example.com>
 * @copyright  2015 Atul kumar sharma
 * @since      File available since Release 1.0
 * @deprecated File deprecated in Release 1.0
 */
 
$Inputstring1= "Upshot Tech";

$Inputstring2 = "Hutches Top";

 
 function anagram($Inputstring1, $Inputstring2)//function will{
	  $status = false;
	$array1= str_split(strtolower(str_replace(" ","",$Inputstring1)));

	$array2= str_split(strtolower(str_replace(" ","",$Inputstring2)));


		$array11=asort($array1);
		$array12=asort($array2); 
		if($array11==$array12){
			
			echo $status = true;
			
		}
	 
	 return $status;
 }
 
anagram($Inputstring1, $Inputstring2);
?>

