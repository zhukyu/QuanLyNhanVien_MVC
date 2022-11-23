<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phòng ban</title>
</head>
<body>
    <h2>Danh sách phòng ban:</h2>
    <?php
    foreach($PhongBanList as $PhongBan) {
        echo"<p><a href='?emid=" .$PhongBan->IDPB ."'>".$PhongBan->TenPB ."</a></p>";
    }
    ?>
    <br>
    <p><a href="../View/T3.php">Home page</a></p>
</body>
</html>