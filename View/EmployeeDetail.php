<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết nhân viên</title>
</head>
<body>
    <h2>Chi tiết nhân viên: </h2>
    <?php
    echo "<p>IDNV: <b>" .$Employee->IDNV ."</b></p>";
    echo "<p>Họ tên: <b>" .$Employee->Hoten ."</b></p>";
    echo "<p>IDPB: " .$Employee->IDPB ."</p>";
    echo "<p>Địa chỉ: " .$Employee->Diachi ."</p><br>";
    ?>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>