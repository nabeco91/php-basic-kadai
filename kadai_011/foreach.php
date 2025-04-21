<!DOCTYPE html>
<html lang="jn">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
<p>
  <?php
  $item_data = ['名前'=>'玉ねぎ', '値段'=>'200', '産地'=>'北海道'];

  foreach ($item_data as $key => $value){
    echo "{$key};{$value} <br>";
  }
  ?>
</p>  
</body>

</html>