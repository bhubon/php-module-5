<?php


$fp = fopen(".".DIRECTORY_SEPARATOR."storgae".DIRECTORY_SEPARATOR."student.txt",'r');

while($line = fgets($fp)){
    echo $line;
    echo "</br>";
}