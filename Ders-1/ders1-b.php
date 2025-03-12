<!DOCTYPE html>
<html lang="tr">

<head>
</head>

<body>
    <h3>Sık kullanılan Hazır Fonksiyonlar</h3>

    <?php


    $metin = "<b> aydın adnan menderes üniversitesi </b>";
    $byazi = strtoupper($metin); // Yazıyı büyük harfe dönüştürür.
    $kyazi = strtolower($byazi); // Yazıyı küçük harfe dönüştürür.
    $mb_byazi = mb_strtoupper($kyazi); // Yazıyı büyük harfe dönüştürür.
    $mb_kyazi = mb_strtolower($mb_byazi); // Yazıyı küçük harfe dönüştürür.
    $ilkharf_buyuk_paragraf = ucfirst($mb_byazi); // Gelen metnin ilk harflerini büyütür.
    $ilkharf_buyuk_kelime = ucwords($mb_kyazi); // Gelen metnin kelimelerinin baş harflerini büyütür.

    echo " <br> Karakter Sayısı:" . strlen($metin);
    echo "<br> Metnin Belirli Bir Karakter Sayısı:" . substr($metin, 0, 10);
 ?>

<h4>Uygulama Lorem Metninin ilk 100 Karakterini Alın  Devamında bir buton yerleştirerek Adü Web sitesine yönlendirin.</h4>



<?php
   $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
   Consequatur atque qui iure quisquam tempore facere at, voluptate, non minima nihil perferendis corrupti praesentium similique. 
   Fuga fugit tempora cumque sunt unde!";

echo  substr($lorem, 0, 98) . "...";
echo '<br> <a href ="https://www.adu.edu.tr/" target="_blank"> Devamını  Oku </a> ';

?>



</body>

</html>