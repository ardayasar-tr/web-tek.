<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!--
      ceil: Herhangi bir ondalık sayıyı yukarı yuvarlamak için kullanılır.
      floor: Herhangi bir ondalık sayıyı aşağı yuvarlamak için kullanılır.
      round: Herhangi bir ondalı sayıyı en yakına yuvarlamak için kullanılır.
    -->

  <h5>Ceil İşlemi</h5>
  <?php
  $sayi1 = 14.28563;
  echo "Sonuç= " . ceil($sayi1);
  ?>

  <h5>Floor İşlemi</h5>
  <?php
  $sayi1 = 24.546563;
  echo "Sonuç= " . floor($sayi1);
  ?>

  <h5>Ceil İşlemi</h5>
  <?php
  $sayi1 = 30.28563;
  echo "\$sayi1 değişkeninin değeri: $sayi1 yukarı yuvarlama işleminin sonucu: " . ceil($sayi1);
  ?>

  <h5>Round İşlemi</h5>
  <?php
  $sayi1 = 57.313;
  echo "Sonuç= " . round($sayi1);
  echo "<br>";
  $sayi1 = 57.513;
  echo "Sonuç= " . round($sayi1);

  echo "<hr><br>İlk iki hanenin sabit tutularak 3.haneye göre yukarı yada aşağı yuvarlaması işleminin uygulanması:";
  $sayi1 = 57.3239;
  echo "<br>\$sayi1 değişkeninin değeri: $sayi1 Round işleminin sonucu: " . round($sayi1, 2);
  $sayi1 = 57.3298;
  echo "<br>\$sayi1 değişkeninin değeri: $sayi1 Round işleminin sonucu: " . round($sayi1, 2);


  echo "<hr><br>Son 2 haneyi 0 yapar 3.haneyi 2. haneye göre round işleminin uygulanması:";
  $sayi1 = 257.3239;
  echo "<br>\$sayi1 değişkeninin değeri: $sayi1 Round işleminin sonucu: " . round($sayi1, -1);
  $sayi1 = 557.3298;
  echo "<br>\$sayi1 değişkeninin değeri: $sayi1 Round işleminin sonucu: " . round($sayi1, -2);
  ?>


  <h5>Number Format İşlemi</h5>
  <?php
  $sayi1 = 98464.28563;
  echo "<br>\$sayi1 değişkeninin değeri $sayi1 işlem sonucu " . number_format($sayi1);
  echo "<br>\$sayi1 değişkeninin değeri $sayi1 işlem sonucu " . number_format($sayi1, 2);
  echo "<br>\$sayi1 değişkeninin değeri $sayi1 işlem sonucu " . number_format($sayi1, 2, ",", ".");
  echo "<br>\$sayi1 değişkeninin değeri $sayi1 işlem sonucu " . number_format($sayi1, 0, ",", ".") . "TL";
  ?>





</body>

</html>