<?php

$fp = fopen('./data.txt','r');

$data = fgets($fp,5);

echo $data;