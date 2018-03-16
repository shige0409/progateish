<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
<style type="text/css" media="screen">
    #editor {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 50%;
        height: 50%;
    }
    .btn {
      position: absolute;
      top: 50%;
      height: 50%;
    }
</style>
</head>
<body>
<form action="php/terminal.php" method="post">
  <div name="terminal-code" id="editor"><textarea name="terminal-code" rows="8" cols="80"></textarea></div>
  <input class="btn"type="submit" value="送信">
</form>

<script src="ace/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/ruby");
</script>
</body>
</html>
