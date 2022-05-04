<?php 

class File {
	public $name;
	public $url;
	public $size;
	public $language;
	private $classNumber=3;
}

$file1 = new File();
$file1->name = 'learning to learn';
$file1->url = '/files/file1.pdf';
$file1->size = '/files/file1.pdf';
$file1->language = 'EN';

$file2 = new File();
$file2->name = 'apprendre à apprendre';
$file2->url = '/files/file2.pdf';
$file2->size = '/files/file2.pdf';
$file2->language = 'FR';

// print_r($file1->classNumber);

$files = [];
array_push($files, $file1, $file2);

foreach ($files as $key => $value) {
	print_r($value);
}

// to see contents of a class:
var_dump(File);

// get_class_vars('[name of the class as string']) show class available variables
// print_r(get_class_vars('File'));

// get_classMethods('name of the class') //show class available methods

var_dump(substr('https://www.ontario.ca/page/covid', 6));
?>

