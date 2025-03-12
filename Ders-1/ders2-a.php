<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h5>Çarpma İşlemi</h5>
<?php
$sayi1 = 50;
$sayi2 = 13;
$sonuc = $sayi1 * $sayi2;
echo $sonuc;
echo "<br>İşlem Sonucu: $sayi1 * $sayi2 = $sonuc";

echo "<br><br>Atamalı İşlem:";
$deger =120;
$ekdeger = 72;
echo "Sonuç: $deger * $ekdeger = " . $deger *= $ekdeger;

    ?>

    <h5>Mod İşlemi</h5>
    <?php
$sayi1 = 50;
$sayi2 = 10;
$sonuc = $sayi1 % $sayi2;
echo $sonuc;
echo "<br>İşlem Sonucu: $sayi1 % $sayi2 = $sonuc";
?>
  
  <h5>Arttırma İşlemi</h5>
    <?php
$sayi1 = 50;
echo "<br>Arttırma İşlemi yapıldı" . $sayi1++; // Bu satıra hala $sayi değerini yazacaktır fakat bir sonraki değişkeni çağırdığımız satırda//
echo "<br>Sayı:". $sayi1;
?>


<h5>Arttırma İşlemi</h5>
    <?php
$sayi2 = 20;
echo "<br>Arttırma İşlemi yapıldı" . ++$sayi2; // Bu satıra hala $sayi değerini yazacaktır fakat bir sonraki değişkeni çağırdığımız satırda//
echo "<br>Sayı:". $sayi2;
?>

<h6>Temel Uygulama Örneği</h6>

<?php
echo"<br><br><br><br>";
$sayi3 = 6;
echo "<br>Sayı:". $sayi3;
echo"<br>arttırma işlemi" . ++$sayi3;
echo"<br>arttırma işlemi" . ++$sayi3;
echo"<br>arttırma işlemi" . ++$sayi3;
echo"<br>arttırma işlemi" . ++$sayi3;

?>

<?php
echo"<br><br><br><br>";
$sayi3 = 6;
echo "<br>Sayı:". $sayi3;
echo"<br>arttırma işlemi" . $sayi3++;
echo"<br>arttırma işlemi" . $sayi3++;
echo"<br>arttırma işlemi" . $sayi3++;
echo"<br>arttırma işlemi" . $sayi3++;


?>



<?php
echo"<br><br><br><br>";
$sayi3 = 9;
echo "<br>Sayı:". $sayi3;
echo"<br>Azaltma işlemi" . --$sayi3;
echo"<br>Azaltma işlemi" . --$sayi3;
echo"<br>Azaltma işlemi" . --$sayi3;
echo"<br>Azaltma işlemi" . --$sayi3;

?>

<?php
echo"<br><br><br><br>";
$sayi3 = 9;
echo "<br>Sayı:". $sayi3;
echo"<br>Azaltma işlemi" . $sayi3--;
echo"<br>Azaltma işlemi" . $sayi3--;
echo"<br>Azaltma işlemi" . $sayi3--;
echo"<br>Azaltma işlemi" . $sayi3--;


?>
</body>
</html>