<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: block;
            font-size: 15px;
            margin: 0;
        }

        .header {
            background-color: #0A67AF;
            height: 38px;
            display: flex;
            justify-content: space-between;
            padding-left: 10px;
            padding-right: 10px;
        }

        .list-menu {
            margin: 0;
            padding: 6px 8px;
        }

        .list-menu li:first-child {
            background: none;
        }

        .list-menu li {
            list-style-type: none;
            display: inline-block;
            padding: 4px 3px 9px 10px;
            background: url(../images/icon-dotted.png) no-repeat left center;
        }

        .menu {
            margin: 0;
            padding: 6px 8px;
        }

        .menu li {
            list-style-type: none;
            float: left;
            padding: 4px 0;
            background: #0a5a99;
            margin: 0 6px;
            width: 70px;
            text-align: center;
            border-radius: 5px;
        }

        .menu img {
            padding-left: 5px;
            margin-top: 5px;
        }

        .menu img:hover {
            cursor: pointer;
        }

        .menu span {
            font-size: 13px;
            color: #fff;
            position: relative;
            margin-left: 5px;
            font-family: sans-serif;
        }

        .header a {
            margin: 0;
            padding: 0 2px;
            font-size: 13px;
            color: white;
            font-weight: normal;
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

        .logo {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .logo img {
            margin-left: 0 !important;
        }

        .searchbar {
            display: flex;
            align-items: flex-start;
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

        .navbar {
            display: flex;
            flex-wrap: wrap;
        }

        .wrap-breadcrumb {
            padding: 0;
            margin-bottom: 20px;
            list-style: none;
            background-color: #e8e8e8;
            border-radius: 4px;
        }

        .breadcrumb {
            padding: 8px 10px;
        }

        .breadcrumb li {
            list-style-type: none;
            display: inline-block;
        }

        .breadcrumb a {
            font-size: 13px;
            font-weight: lighter;
        }

        .slideshow img {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="header">
        <ul class="list-menu">
            <li><a href="">Tin t???c & S??? ki???n</a></li>
            <li><a href="">Th??ng b??o</a></li>
            <li><a href="">V??n b???n</a></li>
            <li><a href="">L???ch tu???n</a></li>
            <li><a href="">Danh b???</a></li>
            <li><a href="">Li??n h???</a></li>
        </ul>
        <ul class="menu">
            <li><a href="">Khoa</a></li>
            <li><a href="">Ph??ng</a></li>
            <img src="../images/flag-english.png" alt="">
            <span class="language">English</span>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="../images/logo-k_cntt.png" style="margin: 10px; width: 340px;">
            <div class="searchbar">
                <input type="input" class="search" placeholder="T??m ki???m th??ng tin">
                <img src="../images/search-512.png" alt="search-icon" class="search-icon">
            </div>
        </div>
        <div class="navbar">
            <a href="">HOME</a>
            <a href="">GI???I THI???U</a>
            <a href="">TUY???N SINH</a>
            <a href="">????O T???O</a>
            <a href="">NGHI??N C???U KHOA H???C</a>
            <a href="">H???P T??C</a>
            <a href="">SINH VI??N</a>
            <a href="">C???U SINH VI??N</a>
            <a href="">LI??N H???</a>
        </div>
        <div class="wrap-breadcrumb">
            <ul class="breadcrumb">
                <li>
                    <a href="" class="homepage">Trang ch???</a>
                </li>
            </ul>
        </div>
        <div class="slideshow">
            <img src="../images/Slider_KhoaCNTT_KN40namCB.jpg">
        </div>
    </div>
</body>

</html>