<?php
include_once("../Model/M_PhongBan.php");
class Ctrl_PhongBan
{
    public function __invoke()
    {
        if (isset($_GET['emid'])) {
            $modelPhongBan = new Model_PhongBan();
            $PhongBan = $modelPhongBan->getPhongBanDetail($_GET['emid']);
            include_once("../View/PhongBanDetail.php");
        }

        // Thêm phòng ban

        else if (isset($_GET['mod1'])) {
            $PhongBan = new Model_PhongBan();
            $IDPBList = $PhongBan->getAllIDPB();
            include_once("../View/PhongBanAdd.php");
        } else if (isset($_POST['insert'])) {
            $IDPB = $_REQUEST['IDPB'];
            $TenPB = $_REQUEST['TenPB'];
            $Mota = $_REQUEST['Mota'];
            $PhongBan = new Model_PhongBan();
            $PhongBan->addPhongBan($IDPB, $TenPB, $Mota);
            header("Location: C_PhongBan.php");
        } else {
            $modelPhongBan = new Model_PhongBan();
            $PhongBanList = $modelPhongBan->getAllPhongBan();
            include_once("../View/PhongBanList.php");
        }
    }
};
$C_PhongBan = new Ctrl_PhongBan();
$C_PhongBan->__invoke();
