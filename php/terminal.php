<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $terminal_code = $_POST['terminal-code'];
  exec('rm -f ../output/*');
}
//file_put_contents($filename, '*「ここはイムルのむらです。');
$ruby = '../ruby/sample.rb';
file_put_contents($ruby, $terminal_code);
$file = fopen($ruby, 'w+');
fwrite($file, $terminal_code);
fclose($file);
exec('ruby ../ruby/sample.rb > ../output/output.txt 2>../output/error.txt');
header("Location: /terminal/php/webeditor.php");
?>
