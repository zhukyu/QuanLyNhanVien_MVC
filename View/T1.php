<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
        }
        .content {
            margin-top: 15px;
            padding: 0 20px;
        }

        a {
            text-decoration: none;
            font-family: sans-serif;
            margin: 10px;
            font-weight: bold;
            color: #333;
        }

        .header {
            display: flex;
            justify-content: space-between;
        }

        .header img {
            margin-left: 0 !important;
        }

        .searchbar {
            display: flex;
            align-items: flex-start;
            align-content: space-between
        }

        .searchbar {
            margin-top: 5px;
        }

        .searchbar input {
            border-radius: 15px;
            padding: 4px 10px;
            border: #757575 1px solid;
        }

        .search-icon {
            margin: 3px;
            width: 20px;
            position: relative;
            transform: translateX(-150%);
        }

        .search-icon:hover {
            cursor: pointer;
        }

        .content-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            padding: 10px
        }
        .navbar {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="../images/logo.png" style="margin: 10px; width: 340px;">
        <div class="content-right">
            <div class="searchbar">
                <input type="input" class="search" placeholder="Tìm kiếm thông tin">
                <img src="../images/search-512.png" alt="search-icon" class="search-icon">
            </div>
            <div class="navbar">
                <a href="">HOME</a>
                <a href="">GIỚI THIỆU</a>
                <a href="">TUYỂN SINH</a>
                <a href="">ĐÀO TẠO</a>
                <a href="">NGHIÊN CỨU</a>
                <a href="">HỢP TÁC</a>
                <a href="">SINH VIÊN</a>
                <a href="">HỖ TRỢ</a>
            </div>
            
        </div>
        
    </div>
    
</body>

</html>