<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $console_code = $_POST['console-code'];
  exec('rm -f output/*');
}
$console = '../output/console.txt';
$output = '../output/output.txt';
file_put_contents($console, $console_code);
//file_put_contents($filename, '*「ここはイムルのむらです。');
if($console_code){
  exec($console_code,$out);
  $out = join('  ', $out);
  file_put_contents($output, $out);
}
header("Location: /terminal/php/webeditor.php");
?>
