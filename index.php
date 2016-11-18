<?php
#Include the class
require_once 'classVigenere.php';

#Istance theclass
$cVigenere = new classVigenere('THISismykey');
?>
<h1>Masukkan pesan yang mau di enkripsi</h1>
<form action="index.php" method="POST">
    <input type="text" name="crpt"/>
    <input type="submit" name="submit">
</form>
<?php
error_reporting(0);
$cprt = $_POST['crpt'];
echo 'Sekarang mengenkripsi "'. $cprt . '"';
?>

<?php
#Encode my text
$encoded_text = $cVigenere->encrypt($cprt);

echo 'Menjadi -> '. $encoded_text;
echo "<br/><br/>";
?>
Class ini didapat dari http://www.phpclasses.org/package/6773-PHP-Encrypt-and-decrypt-text-using-the-Vigen-re-cypher.html