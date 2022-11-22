<?php
include_once("E_Employee.php");
class Model_Employee
{
    public function __construct(){}
    
    public function getAllEmployee()
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:' .mysqli_error());
        mysqli_select_db($link,'DULIEU999');
        $rs = mysqli_query($link,"SELECT * FROM NHANVIEN");
        $i = 1;
        while($row = mysqli_fetch_array($rs))
        {
            $IDNV = $row['IDNV'];
            $Hoten = $row['Hoten'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['Diachi'];
            $Employees[$i++] = new Entity_Employee($IDNV, $Hoten, $IDPB, $Diachi);
        }
        return $Employees;
    }

    public function getEmployeeDetail($emid)
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:' .mysqli_error());
        mysqli_select_db($link,'DULIEU999');
        $rs = mysqli_query($link,"SELECT * FROM NHANVIEN");
        $i = 1;
        while($row = mysqli_fetch_array($rs))
        {
            $IDNV = $row['IDNV'];
            $Hoten = $row['Hoten'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['Diachi'];
            $Employees[$i++] = new Entity_Employee($IDNV, $Hoten, $IDPB, $Diachi);
        }
        return $Employees;
    }

    public function addEmployee($name, $age, $university)
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:'.mysqli_error());
        mysqli_select_db($link,'DULIEU999');
        $rs = mysqli_query($link,"INSERT INTO NHANVIEN (`name`, age, university) VALUES ('$name', $age ,'$university')");
        mysqli_close($link);
    }

    public function updateEmployee($id, $name, $age, $university)
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:'.mysqli_error());
        mysqli_select_db($link,'DULIEU999');
        $rs = mysqli_query($link,"UPDATE NHANVIEN SET `name` = '".$name."', age = '".$age."', university = '".$university."' WHERE id = '".$id."'");
        mysqli_close($link);
    }

    public function deleteEmployee($id)
    {
        $link = mysqli_connect('localhost','root','') or die('Could not connect:'.mysqli_error());
        mysqli_select_db($link,'DULIEU999');
        $rs = mysqli_query($link,"DELETE FROM NHANVIEN WHERE id = '".$id."'");
        mysqli_close($link);
    }
}
?>