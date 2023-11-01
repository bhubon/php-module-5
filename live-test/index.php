<!-- Task 1 -->
<?php


$file = './data.txt';


$handle = fopen($file, 'r');

$content = fread($handle, filesize($file));

fclose($handle);

echo nl2br($content);
?>

<!-- Task 2 -->
<?php



$file2 = './data.txt';
$data = 'Jenny Doe';

$handle2 = fopen($file2, 'a');

file_put_contents($file2, $data . "\n", FILE_APPEND);

fclose($handle2);

?>