<?php
/**
 * Consider Share prices for a N number of companies given for each month since year 1990 in a CSV file. Format of the file is as below with first line as header.
 * @category  Consider Share prices for a N number of companies given for each month since year 1990 in a CSV file. Format of the file is as below with first line as header.
 * @package    PackageName
 * @author     Original Author <Atul kumar sharma>
 * @copyright  2015 Atul kumar sharma
 * @since      File available since Release 1.0
 * @deprecated File deprecated in Release 1.0
 */
 $file = fopen("1990.csv","r");
//print_r(fgetcsv($file));
echo '<table border="1">';

while(! feof($file))
  {
$data=fgetcsv($file);
// print_r(fgetcsv($file));

echo '<tr>';
echo '<td>';
echo $data[0];
echo '</td>';

echo '<td>';
echo $data[1];
echo '</td>'; 

echo '<td>';
echo $data[2];
 echo '</td>'; 

echo '<td>';
echo $data[3];
 echo '</td>'; 

echo '<td>';
echo $data[4];
 echo '</td>'; 

echo '<td>';
echo $data[5];
 echo '</td>'; 

echo '<td>';
echo $data[6];
 echo '</td>'; 

echo '<td>';
echo $data[7];
 echo '</td>'; 

echo '<td>';
echo $data[8];
 echo '</td>'; 

echo '<td>';
echo $data[9];
 echo '</td>'; 
echo '<td>';
echo $data[10];
 echo '</td>'; 
echo '<td>';
echo $data[11];
 echo '</td>';
 echo '<td>';
echo $data[12];
 echo '</td>';
 
echo '</tr>'; 






  }
echo '<table>';
fclose($file); 



?>
