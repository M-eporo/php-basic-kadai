<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員情報入力フォーム</title>
</head>
<body>
  <h2>社員情報入力フォーム</h2>
  <form action="confirm.php" method="POST">
    <table>
      <tr>
        <th scope="row">社員名</th>
        <td>
          <input type="text" name="employee_name">
        </td>
      </tr>
      <tr>
        <th scope="row">年齢</th>
        <td>
          <input type="text" name="employee_age">
        </td>
      </tr>
      <tr>
        <th scope="row">所属部署</th>
        <td>
          <select name="department">
            <option value="開発部" selected>開発部</option>
            <option value="営業部">営業部</option>
            <option value="人事部">人事部</option>
          </select>
        </td>        
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>
</html>