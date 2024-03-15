<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == 'admin' && $password == 'admin') {
    echo "<span style='color:purple; font-weight:bold;'>Dang nhap thanh cong</span> ";
  } else {
    echo "<span style='color:red; font-weight:bold;'>Tên däng nhâp/Mât khau sai. Vui long nhâp lai </span> ";
  }
?>
</body>

</html>