<?php

$newName = 'Jessy Doe';

file_put_contents('./data.txt',$newName."\n",FILE_APPEND);

$data = file_get_contents('./data.txt');

echo nl2br($data);