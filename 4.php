<?php
for($i=0;$i<100;$i++){$mas[]=rand(0,10);}
for($i=0;$i<99;$i++){ if($mas[$i]==$mas[$i+1]){$array[]=$mas[$i];$i+=1;}}
echo "\n Исходный массив:\n";
foreach($mas as $row)echo "$row"." ";
//for($i=0;$i<100;$i++){print $mas[$i];print" ";}
echo "\n Парные элементы массива:\n";
foreach($array as $row)
echo $row . " ";
echo "\n";