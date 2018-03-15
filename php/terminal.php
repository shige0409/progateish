<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $code = $_POST['code'];
}
//file_put_contents($filename, '*「ここはイムルのむらです。');
$filename = '../ruby/sample.rb';
$file = fopen($filename, 'w+');
fwrite($file, $code);
fclose($file);
exec('ruby ../ruby/sample.rb > ../output/output.txt 2>../output/error.txt');
header("Location: /terminal");
?>
