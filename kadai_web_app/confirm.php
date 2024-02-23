<?php
  $name = $_POST['employee_name'];
  $age = $_POST['employee_age'];
  $department = $_POST['department'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員情報入力フォーム確認画面</title>
</head>
<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
  <table border="1">
    <thead>
      <tr>
        <th scope="col">項目</th>
        <th scope="col">入力内容</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">社員名</th>
        <td><?php echo $name; ?></td>
      </tr>
      <tr>
        <th scope="row">年齢</th>
        <td><?php echo $age; ?></td>
      </tr>
      <tr>
        <th scope="row">所属部署</th>
        <td><?php echo $department; ?></td>
      </tr>
    </tbody>
  </table>
  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>
</html>