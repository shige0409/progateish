<?php
$ruby = '../ruby/sample.rb';
$output = '../output/output.txt';
$error = '../output/error.txt';
$console = '../output/console.txt';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>RUBY学習</title>
  <link rel="stylesheet" href="../css/terminal.css">
</head>

<body>
  <div class="container flex-box">
    <div class="questions">
      <form class="" action="console.php" method="post">
        <p>コンソール</p>
        <textarea  class="console" name="console-code"><?php
        if(file_exists($console)){
          readfile($console);
        }
          ?></textarea>
        <input type="submit" class="execution-btn" value="実行する">
      </form>
      <p>出力</p>
      <textarea class="output" readonly><?php
      if(file_exists($error) && !empty(readfile($error))){
        readfile($error);
      }
      else {
        if(file_exists($output)){
        readfile($output);
      }
      }
      ?></textarea>
    </div>

    <div class="terminal-container">
      <form action="terminal.php" method="post">
        <p>ウェブエディタ</p>
        <textarea class="terminal" name="terminal-code"><?php
          if(file_exists($ruby)){
            readfile($ruby);
          }
          ?></textarea>
        <div class="terminal-btns">
          <input type="submit" class="execution-btn" value="実行する">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
