<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
<title>Domain Checker 1.0</title>
<style>
body {
  background-color: #212121;
  text-align: center;
  color: #fff000;
  font-family: Arial, Helvetica, sans-serif;
}

.domainphp {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
}

a.backbtn {
  background-color: #fff000;
  color: #000;
  font-weight: bold;
  border: none;
  padding: 8px 16px;
  border-radius: 4px;
  cursor: pointer;
}

a.backbtn:hover {
  background-color: #000;
  color: #fff;
  font-weight: bold;
}
</style>
</head>
<body>
<h1>Domain Checker 1.0</h1>
<p>By Jan Cordeiro</p><br />
<div class="domainphp">
<?php
if(isset($_POST['submit'])) {
    $domain = $_POST['domain'];
    $recordTypes = array("A", "MX", "NS", "SOA", "TXT");

    foreach ($recordTypes as $recordType) {
        if (checkdnsrr($domain, $recordType)) {
            echo "<p style='color:red;'>The <u>$domain</u> domain is not available!</p>";
            exit();
        }
    }

    echo "<p style='color:green;'>The <u>$domain</u> domain is available to register!</p>";
}
?>
</div>
<p><a class="backbtn" href="javascript:history.back()">VOLTAR</a></p><br /><br />
<p><a href="https://github.com/jancordeiro" target="_blank"><img src="github-mark-white.png" width="35" height="35" alt="Github Logo"></a></p>
</body>
</html>