<html>
<head>
<title>Dosya yükleme</title><meta charset="utf-8">
</head>
<body> <center>
<?php
$dizin = 'yuklenendosyalar/';
$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
 
if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
{
    echo '<img src="tamam.jpg" width="100"><br>';
echo "Dosya başarıyla yüklendi.<br>";
 
} else {
    echo "Dosya yüklenemedi!\n";
}
?>
</center>
</body>
</html>