<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  
  function sort_2way(array $array, bool $order){

    if($order){
      echo '「昇順にソートします。」<br>';
      asort($array);

      foreach($array as $value){
        echo $value . '<br>';
      }
    } else {
      echo '「降順にソートします。」<br>';
      arsort($array);

      foreach($array as $value){
        echo $value . '<br>';
      }
    }
  }

  $nums = [15, 4, 18, 23, 10];

  sort_2way($nums, true);
  sort_2way($nums, false);
  ?>
</body>
</html>