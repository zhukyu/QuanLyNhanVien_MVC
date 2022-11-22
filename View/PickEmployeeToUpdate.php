<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật nhân viên</title>
</head>

<body>
    <h2>Chọn nhân viên:</h2>
    <form action="C_Employee.php" method="post">
        <table>
            <tr>
                <td>Chọn ID nhân viên cần cập nhật: </td>
                <td>
                    <select name="id">
                        <option value="" hidden>Chọn ID nhân viên</option>
                        <?php 
                            foreach($EmployeeList as $Employee) {
                                echo "<option value='$Employee->IDNV'>$Employee->IDNV</option>";
                            }
                        ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="1" align="center"><input type="submit" name="chooseToUpdate" value="Chọn"></td>
            </tr>
        </table>
    </form>

</body>

</html>