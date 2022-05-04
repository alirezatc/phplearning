<?php 

$remote_files = [
  'uri' => 'yahoo.com',
  'size' => 600,
  'abbr' => 'KB',
  'lang' => 'English',
  'ext' => 'pdf',
];

$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(0 => 'zero_b', 1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
$result2 = array_merge($array1, $array2);
var_dump($result);
var_dump($result2);




// $combined_files = $media_files + $remote_files;
// $c_f = array_merge($media_files, $remote_files);

print_r($combined_files);
?>
