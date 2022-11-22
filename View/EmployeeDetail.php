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
    echo "<p>Name: <b>" .$Employee->name ."</b></p>";
    echo "<p>Age: " .$Employee->age ."</p>";
    echo "<p>University: " .$Employee->university ."</p><br>";
    ?>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>