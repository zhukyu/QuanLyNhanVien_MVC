<?php
include_once("../Model/M_Employee.php");
class Ctrl_Employee
{
    public function __invoke()
    {
        if(isset($_GET['stid']))
        {
            $modelEmployee = new Model_Employee();
            $Employee = $modelEmployee->getEmployeeDetail($_GET['stid']);
            include_once("../View/EmployeeDetail.php");
        }



        // Thêm nhân viên

        else if(isset($_GET['mod1']))
        {
            include_once("../View/EmployeeAdd.php");
        }  
        else if(isset($_POST['insertt']))
        {
            $name = $_REQUEST['namee'];
            $age = $_REQUEST['agee'];
            $university = $_REQUEST['universityy'];
            $Employee = new Model_Employee();
            $Employee->addEmployee($name, $age, $university);
            header("Location: C_Employee.php");
        }


        // Sửa nhân viên

        else if(isset($_GET['mod2']))
        {
            $modelEmployee = new Model_Employee();
            $EmployeeList = $modelEmployee->getAllEmployee();
            include_once("../View/PickEmployeeToUpdate.php");
        }  
        else if(isset($_POST['updatee']))
        {
            $id = $_REQUEST['idd'];
            $name = $_REQUEST['namee'];
            $age = $_REQUEST['agee'];
            $university = $_REQUEST['universityy'];
            $Employee = new Model_Employee();
            $Employee->updateEmployee($id, $name, $age, $university);
            $EmployeeList = $Employee->getAllEmployee();
            include_once("../View/EmployeeList.php");
        }
        else if(isset($_POST['chooseToUpdatee']))
        {
            $id = $_REQUEST['idd'];
            $modelEmployee = new Model_Employee();
            $Employee = $modelEmployee->getEmployeeDetail($id);
            include_once("../View/EmployeeUpdate.php");
        }



        // Xóa nhân viên

        else if(isset($_GET['mod3']))
        {
            $modelEmployee = new Model_Employee();
            $EmployeeList = $modelEmployee->getAllEmployee();
            include_once("../View/PickEmployeeToDelete.php");
        }  
        else if(isset($_POST['chooseToDeletee']))
        {
            $id = $_REQUEST['idd'];
            $Employee = new Model_Employee();
            $Employee->deleteEmployee($id);
            $EmployeeList = $Employee->getAllEmployee();
            include_once("../View/EmployeeList.php");
        }




        //Tìm kiếm nhân viên



        else
        {
            $modelEmployee = new Model_Employee();
            $EmployeeList = $modelEmployee->getAllEmployee();
            include_once("../View/EmployeeList.php");
        }   
    }
};
$C_Employee = new Ctrl_Employee();
$C_Employee->__invoke();
?>