<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=devide-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Domain Checker 1.0</title>
</head>
<body>
	<div class="container">
		<div class="box">
		<h1>Domain Checker 1.0</h1>
		<br><br>
			<div class="domainphp">

				<?php
				if(isset($_POST['submit'])) {
					$domain = $_POST['domain'];
					$recordTypes = array("A", "MX", "NS", "SOA", "TXT");
					$disponivel = true;

					foreach ($recordTypes as $recordType) {
						if (checkdnsrr($domain, $recordType)) {
							$disponivel = false;
							break;
						}
					}

					if($disponivel){
						echo "<p style='color:green;'>The <u>$domain</u> domain is available to register!</p><br>";
					}else{
						echo "<p style='color:red;'>The <u>$domain</u> domain is not available!</p><br>";
					}
				}
				?>
				
				<p><a class="backbtn" href="javascript:history.back()">BACK</a></p><br />
			</div>
		</div>
		<a href="https://github.com/jancordeiro" target="_blank" class="github"><i class="fa-brands fa-github"></i></a>
	</div>	
</body>
</html>
