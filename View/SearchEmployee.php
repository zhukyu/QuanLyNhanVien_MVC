<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sp1 {
            width: 100px;
        }
    </style>
</head>

<body>
    <form name="f1" action="C_Employee.php" method="post">

        </table>
        <div style="display: flex; flex-direction: column;">
            <div style="margin: auto;">
                <h2 style="text-align: center;">Tìm kiếm nhân viên</h2>
                <div style="display: flex; margin-bottom: 10px;">
                    <input type="radio" name="option" id="IDNV" value="IDNV">
                    <label for="IDNV">IDNV</label>
                    <input type="radio" name="option" id="Name" value="Name">
                    <label for="Name">Họ tên</label>
                    <input type="radio" name="option" id="IDPB" value="IDPB">
                    <label for="IDPB">IDPB</label>
                    <input type="radio" name="option" id="Diachi" value="Diachi">
                    <label for="Diachi">Địa chỉ</label>
                </div>
                <div style="display: flex;">
                    <p style="min-width: 75px; margin: 0; padding-left: 5px;">Input</p>
                    <input type="text" name="search_field">
                </div>
                <div style="display: flex; justify-content: center; margin-top: 10px;">
                    <input type="submit" name="search" value="Search">
                </div>
            </div>
        </div>
    </form>

</body>

</html>