<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri</title>
</head>

<body>

    <!-- Html Açıklama satırı..-->

    <?php

    /* Çoklu satırlı açıklama satırı 
    oluşturmak için kullanılır */

    // Tek satırlı açıklama yazmak için kullanılır

    //  phpinfo(); /* Bu fonksiyon yüklü olan php versiyonu ve kurulu paketlerin bilgisini yazdıırır . */

    echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";
    // Php içerisinde html etiketleri kullanılabilir.

    echo "<br> Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı";

    $metin = "<br> Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı";

    echo $metin;

    // Değişken içerisindeki metinsel ifadenin büyük küçük harf dönüşümleri.
    echo strtoupper($metin);


    echo $bharf = strtoupper($metin);
    echo $kharf = strtoupper($bharf);


    echo $bharf2 = mb_strtoupper($metin);
    echo $kharf2 = mb_strtoupper($metin);






    ?>


</body>

</html>