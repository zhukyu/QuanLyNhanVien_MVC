<?php
    echo '<form action="C_Employee.php" method="post">'; 
    echo '<table border="1" width="100%">';
    echo '<caption>DỮ LIỆU BẢNG NHÂN VIÊN</caption>';
    echo '<tr><th>IDNV</th><th>Họ tên</th><th>IDPB</th><th>Địa chỉ</th><th>Xóa</th></tr>';
    foreach($EmployeeList as $Employee) {
        echo "<tr>
                <td>$Employee->IDNV</td>
                <td>$Employee->Hoten</td>
                <td>$Employee->IDPB</td>
                <td>$Employee->Diachi</td>
                <td><input type='checkbox' name='$Employee->IDNV' value='$Employee->IDNV'>
            </tr>";
    }
    echo '</table>';
    echo '<input type="submit" name="delete_all" value="Xóa tất cả" style="margin: 5px">';
    echo '</form>';
?>