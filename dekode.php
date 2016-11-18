<?php
#Include the class
require_once 'classVigenere.php';

#Istance theclass
$cVigenere = new classVigenere('THISismykey');
?>
<h1>Masukkan hasil enkripsi yang mau di ubah jadi plainteks</h1>
<form action="dekode.php" method="POST">
    <input type="text" name="crpt"/>
    <input type="submit" name="submit">
</form>
<?php
error_reporting(0);
$cprt = $_POST['crpt'];
echo 'Sekarang enkripsi "';
echo $cprt;
echo '"';
?>

<?php
#Encode my text

$dencoded_text = $cVigenere->decrypt($cprt);

echo 'Menjadi -> '. $dencoded_text;
echo "<br/><br/>";
?>