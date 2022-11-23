<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết phòng ban</title>
</head>
<body>
    <h2>Chi tiết phòng ban: </h2>
    <?php
    echo "<p>IDPB: <b>" .$PhongBan->IDPB ."</b></p>";
    echo "<p>Tên phòng ban: <b>" .$PhongBan->TenPB ."</b></p>";
    echo "<p>Mô tả: " .$PhongBan->Mota ."</p><br>";
    ?>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>