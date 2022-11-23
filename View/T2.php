<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        a {
            text-decoration: none;
            font-family: roboto, sans-serif;
            color: white;
        }

        .wrap-navigation {
            width: 100%;
        }

        .navigation {
            width: 100%;
            border: 1px #e6e6e6 solid;
            padding: 0;
            margin: 0;
        }

        .wrap-navigation .title {
            width: 100%;
            color: #106cb2;
            font-weight: bold;
            border: 1px #e6e6e6 solid;
            border-bottom: 1px transparent;
            height: 43px;
            line-height: 43px;
        }

        .title span {
            margin-left: 15px;
        }

        .navigation ul {
            padding: 0;
            width: 100%;
        }

        .navigation li {
            font-size: 14px;
            width: 100%;
        }

        .navigation a {
            display: block;
            margin: 0 15px;
            padding: 13px 0;
            border-bottom: 1px dashed #c9c9c9;
        }

        .navigation a.visited {
            color: #106cb2;
        }

        .navigation li:hover {
            background-color: #5E62A0;
            border-bottom: 1px dashed #c9c9c9;
        }

        .navigation li:hover a {
            border: none;
            color: #fff;
        }
    </style>
</head>

<body bgcolor="8E93F1">
    <div class="wrap-navigation">
        <ul class="navigation">
            <li>
                <a class="destination" href="T3.php" target="fr3">Trang chủ</a>
            </li>
            <li>
                <a class="destination" href="../Controller/C_Employee.php" target="fr3">Nhân viên</a>
            </li>
            <li>
                <a class="destination" href="../Controller/C_PhongBan.php" target="fr3">Phòng ban</a>
            </li>
            <li>
                <a class="destination" href="../Controller/C_Employee.php?mod4='1'" target="fr3">Tìm kiếm</a>
            </li>
            <li>
                <a class="destination" href="../Controller/C_User.php" target="fr3">Đăng nhập</a>
            </li>
        </ul>
    </div>
</body>

</html>