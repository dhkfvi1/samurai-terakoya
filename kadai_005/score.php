<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>合計点と平均点の計算</title>
</head>
<body>
    <p>
      <?php
      $numbers = array(80,60,55,40,100,25,80,95,30,60);
      $total = array_sum($numbers);
      $average = $total / count($numbers);

      echo "合計点: " . $total . "<br>";
      echo "平均点: " . $average;
      ?>
    </p>
</body>
</html>