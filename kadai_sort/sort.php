<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<p>
  <?php
    function sort_2way ($array, $order){
      if ($order) {
        echo '昇順にソートします。<br>';
        asort ($array);
      } else {
        echo '降順にソートします。<br>';
        arsort ($array);
      }

      foreach ($array as $element) {
        echo $element . '<br>';
      }
    }

    $nums = [15, 4, 18, 23, 10 ];
    sort_2way($nums, true);
    sort_2way($nums, false);
  ?>
</p>  
</body>
</html>