<?php
include_once("../Model/M_Employee.php");
include_once("../Model/M_PhongBan.php");
class Ctrl_Employee
{
    public function __invoke()
    {
        if (isset($_GET['emid'])) {
            $modelEmployee = new Model_Employee();
            $Employee = $modelEmployee->getEmployeeDetail($_GET['emid']);
            include_once("../View/EmployeeDetail.php");
        }



        // Thêm nhân viên

        else if (isset($_GET['mod1'])) {
            $PhongBan = new Model_PhongBan();
            $IDPBList = $PhongBan->getAllIDPB();
            include_once("../View/EmployeeAdd.php");
        } else if (isset($_POST['insert'])) {
            $IDNV = $_REQUEST['IDNV'];
            $Hoten = $_REQUEST['Hoten'];
            $IDPB = $_REQUEST['IDPB'];
            $Diachi = $_REQUEST['Diachi'];
            $Employee = new Model_Employee();
            $Employee->addEmployee($IDNV, $Hoten, $IDPB, $Diachi);
            header("Location: C_Employee.php");
        }

        // Cập nhật nhân viên

        else if (isset($_GET['mod2'])) {
            $modelEmployee = new Model_Employee();
            $EmployeeList = $modelEmployee->getAllEmployee();
            include_once("../View/PickEmployeeToUpdate.php");
        } else if (isset($_POST['update'])) {
            $IDNV = $_REQUEST['IDNV'];
            $Hoten = $_REQUEST['Hoten'];
            $IDPB = $_REQUEST['IDPB'];
            $Diachi = $_REQUEST['Diachi'];
            $Employee = new Model_Employee();
            $Employee->updateEmployee($IDNV, $Hoten, $IDPB, $Diachi);
            $EmployeeList = $Employee->getAllEmployee();
            include_once("../View/EmployeeList.php");
        } else if (isset($_POST['chooseToUpdate'])) {
            $id = $_REQUEST['id'];
            $modelEmployee = new Model_Employee();
            $Employee = $modelEmployee->getEmployeeDetail($id);
            $PhongBan = new Model_PhongBan();
            $IDPBList = $PhongBan->getAllIDPB();
            include_once("../View/EmployeeUpdate.php");
        }

        // Xóa nhân viên

        else if (isset($_GET['mod3'])) {
            $modelEmployee = new Model_Employee();
            $EmployeeList = $modelEmployee->getAllEmployee();
            include_once("../View/PickEmployeeToDelete.php");
        } else if (isset($_POST['delete'])) {
            $id = $_REQUEST['id'];
            $Employee = new Model_Employee();
            $Employee->deleteEmployee($id);
            $EmployeeList = $Employee->getAllEmployee();
            include_once("../View/EmployeeList.php");
        }

        //Tìm kiếm nhân viên

        else if (isset($_GET['mod4'])) {
            include_once("../View/SearchEmployee.php");
        } else if (isset($_POST['search'])) {
            $option = $_POST['option'];
            $searchValue = $_POST['search_field'];
            $Employee = new Model_Employee();
            $EmployeeList = $Employee->searchEmployee($option, $searchValue);
            include_once("../View/EmployeeList.php");
        } else {
            $modelEmployee = new Model_Employee();
            $EmployeeList = $modelEmployee->getAllEmployee();
            include_once("../View/EmployeeList.php");
        }
    }
};
$C_Employee = new Ctrl_Employee();
$C_Employee->__invoke();
