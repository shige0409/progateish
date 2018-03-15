<?php
$filename = 'ruby/sample.rb';
$output = 'output/output.txt';
$error = 'output/error.txt';
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>RUBY学習</title>
  <link rel="stylesheet" href="terminal.css">
</head>

<body>
  <div class="container flex-box">
    <div class="questions">
      <p>コンソール</p>
      <textarea  class="console" name="console"><?php
      if(file_exists($output)){
       readfile($output);
      }
      if(file_exists($error)){
       readfile($error);
     }
       ?>
      </textarea>
    </div>
    <div class="terminal-container">
      <p>ウェブエディタ</p>
      <form class="" action="php/terminal.php" method="post">
        <textarea class="terminal" name="code"><?php
          if(file_exists($filename))
           readfile($filename);
           ?></textarea>
        <div class="terminal-btns">
          <input type="submit" class="execution-btn" value="実行する">
        </div>
      </form>
    </div>
  </div>
</body>
<script type="text/javascript" src="terminal.js"></script>

</html>
