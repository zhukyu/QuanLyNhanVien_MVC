<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
</head>
<body>
    <h2>Danh sách nhân viên:</h2>
    <?php
    foreach($EmployeeList as $Employee) {
        echo"<p><a href='?stid=" .$Employee ->id ."'>".$Employee->name ."</a></p>";
    }
    ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>