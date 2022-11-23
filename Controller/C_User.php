<?php
include_once("../Model/M_User.php");
class Ctrl_User
{
    public function __invoke()
    {
        if (isset($_POST['login'])) {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];

            $modelUser = new Model_User();
            $user = $modelUser->login($username, $password);
            if ($user != null) {
                header("Location: ../index_loggedIn.php");
            }
        } else {
            header("Location: ../View/Login.php");
        }
    }
};
$C_User = new Ctrl_User();
$C_User->__invoke();
