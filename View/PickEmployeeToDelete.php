<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa nhân viên</title>
</head>
<body>
    <h2>Chọn nhân viên:</h2>
    <form action="C_Employee.php" method="post">
        <table>
            <tr>
                <td>Chọn ID nhân viên cần xóa: </td>
                <td>
                <?php
                    $link = mysqli_connect('localhost','root','') or die('Could not connect:' .mysql_error());
                    $db_selected = mysqli_select_db($link,'DULIEU999');
                ?>
                <select name="idd">
                <option value="" hidden>Chọn ID nhân viên</option>
                <?php
                    $query = "SELECT ID FROM NHANVIEN";
                    $result = $link->query($query);
                    if ($result->num_rows > 0) {
                        while ($optionData = $result->fetch_assoc())
                        {
                            $option = $optionData['ID'];
                ?>
                            <option ><?php echo $option;?> </option>
                <?php
                    }
                }
                ?>
            </select>
                </td>
            </tr>
            <tr>
                <td colspan="1" align="center"><input type="submit" name="chooseToDeletee" value="Xóa"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>