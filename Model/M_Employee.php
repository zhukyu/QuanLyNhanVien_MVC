<?php
include_once("E_Employee.php");
class Model_Employee
{
    public function __construct()
    {
    }

    public function getAllEmployee()
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM NHANVIEN");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
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
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE IDNV = '$emid'");
        while ($row = mysqli_fetch_array($rs)) {
            $IDNV = $row['IDNV'];
            $Hoten = $row['Hoten'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['Diachi'];
            $Employee = new Entity_Employee($IDNV, $Hoten, $IDPB, $Diachi);
        }
        return $Employee;
    }

    public function addEmployee($IDNV, $Hoten, $IDPB, $Diachi)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "INSERT INTO NHANVIEN (IDNV, Hoten, IDPB, Diachi) VALUES ('$IDNV', '$Hoten', '$IDPB', '$Diachi')");
        mysqli_close($link);
    }

    public function updateEmployee($IDNV, $Hoten, $IDPB, $Diachi)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "UPDATE NHANVIEN SET `IDNV` = '" . $IDNV . "', Hoten = '" . $Hoten . "', IDPB = '" . $IDPB . "', Diachi = '" . $Diachi . "' WHERE IDNV = '" . $IDNV . "'");
        mysqli_close($link);
    }

    public function deleteEmployee($id)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "DELETE FROM NHANVIEN WHERE IDNV = '" . $id . "'");
        mysqli_close($link);
    }

    public function searchEmployee($option, $searchValue)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);

        if ($option == "IDNV") {
            $queryStr = "SELECT * FROM NHANVIEN WHERE IDNV = '$searchValue'";
        } else if ($option == "Name") {
            $queryStr = "SELECT * FROM NHANVIEN WHERE Hoten LIKE '%$searchValue%'";
        } else if ($option == "IDPB") {
            $queryStr = "SELECT * FROM NHANVIEN WHERE IDPB LIKE '%$searchValue%'";
        } else if ($option == "Diachi") {
            $queryStr = "SELECT * FROM NHANVIEN WHERE DIACHI LIKE LIKE '%$searchValue%'";
        }
        $rs = mysqli_query($link, $queryStr);
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDNV = $row['IDNV'];
            $Hoten = $row['Hoten'];
            $IDPB = $row['IDPB'];
            $Diachi = $row['Diachi'];
            $Employees[$i++] = new Entity_Employee($IDNV, $Hoten, $IDPB, $Diachi);
        }
        mysqli_free_result($rs);
        mysqli_close($link);
        return $Employees;
    }
}
