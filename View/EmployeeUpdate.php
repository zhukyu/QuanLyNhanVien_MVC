<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật nhân viên</title>
</head>

<body>
    <h2>Cập nhật nhân viên: </h2>
    <form action="C_Employee.php" method="post">
        <table>
            <tr>
                <td>IDNV: </td>
                <td><input type="text" name="IDNV" value="<?php echo $Employee->IDNV ?>" readonly ></td>
            </tr>
            <tr>
                <td>Họ tên: </td>
                <td><input type="text" name="Hoten" value="<?php echo $Employee->Hoten ?>"></td>
            </tr>
            <tr>
                <td>IDPB: </td>
                <td>
                    
                    <select name='IDPB' id="IDPB" value="<?php echo $Employee->IDPB ?>">
                        <?php
                        foreach ($IDPBList as $IDPB)
                            echo "<option value=$IDPB>$IDPB</option>";
                        ?>
                    </select>
                    <script>
                        document.getElementById("IDPB").value = '<?php echo $Employee->IDPB ?>';
                    </script>
                </td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td><input type="text" name="Diachi" value="<?php echo $Employee->Diachi ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>