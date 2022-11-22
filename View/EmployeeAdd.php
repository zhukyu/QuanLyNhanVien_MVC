<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên</title>
</head>

<body>
    <h2>Thêm nhân viên: </h2>
    <form action="C_Employee.php" method="post">
        <table>
            <tr>
                <td>IDNV: </td>
                <td><input type="text" name="IDNV"></td>
            </tr>
            <tr>
                <td>Họ tên: </td>
                <td><input type="text" name="Hoten"></td>
            </tr>
            <tr>
                <td>IDPB: </td>
                <td>
                    <select name='IDPB'>
                        <?php
                        foreach ($IDPBList as $IDPB)
                            echo "<option value=$IDPB>$IDPB</option>";
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td><input type="text" name="Diachi"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="insert" value="Insert"></td>
            </tr>
        </table>
    </form>
</body>

</html>