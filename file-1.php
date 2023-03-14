
<?php
//Reading data from files
$fileName = "C:\Users\lenovo\Desktop\module-6(OOP-file)\mars.txt";
$fp = fopen($fileName, 'r');//File pointer--->for read - r, for write - w, for append - a, if bianry(jpeg/png file) --- rb
$Line = fgets($fp);
echo $Line;
$Line = fgets($fp);
echo $Line;
fclose($fp); // if i want to close file