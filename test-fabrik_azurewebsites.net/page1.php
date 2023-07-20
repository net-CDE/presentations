<html>
<head>
<title>Testseite 4 PowerBI-Demo</title>
</head>
<body>

<h2>Testseite 4 PowerBI-Demo</h2>
<br>
Die aktuelle Uhrzeit (UTC) ist:
<?php
echo date('H:i:s');
?>
<br><br>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo "die Client IP-Adresse ist: $ip";
?>
<br><br>
<img src="a12_2sec.gif" alt="a_gif" > 

</body>
</html>
