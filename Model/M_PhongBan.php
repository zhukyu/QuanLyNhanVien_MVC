<?php
include_once("E_PhongBan.php");
class Model_PhongBan
{
    public function __construct()
    {
    }

    public function getAllPhongBan()
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM PHONGBAN");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDPB = $row['IDPB'];
            $TenPB = $row['TenPB'];
            $Mota = $row['Mota'];
            $PhongBans[$i++] = new Entity_PhongBan($IDPB, $TenPB, $Mota);
        }
        return $PhongBans;
    }

    public function getAllIDPB()
    {
        $link = mysqli_connect('localhost', 'root', '') or die('Could not connect:' . mysqli_error($link));
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT IDPB FROM PHONGBAN");
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) {
            $IDPBList[$i++] = $row['IDPB'];
        }
        return $IDPBList;
    }


    public function getPhongBanDetail($pbid)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "SELECT * FROM PHONGBAN WHERE IDPB = '$pbid'");
        while ($row = mysqli_fetch_array($rs)) {
            $IDPB = $row['IDPB'];
            $TenPB = $row['TenPB'];
            $Mota = $row['Mota'];
            $PhongBan = new Entity_PhongBan($IDPB, $TenPB, $Mota);
        }
        return $PhongBan;
    }

    public function addPhongBan($IDPB, $TenPB, $Mota)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "INSERT INTO PHONGBAN (IDPB, TenPB, Mota) VALUES ('$IDPB', '$TenPB', '$Mota')");
        mysqli_close($link);
    }

    public function updatePhongBan($IDPB, $TenPB, $Mota)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "UPDATE PHONGBAN SET `IDPB` = '" . $IDPB . "', TenPB = '" . $TenPB . "', Mota = '" . $Mota . "' WHERE IDPB = '" . $IDPB . "'");
        mysqli_close($link);
    }

    public function deletePhongBan($id)
    {
        $link = new mysqli('localhost', 'root', '', 'dulieu999') or die('Could not connect: ' . $link->connect_error);
        mysqli_select_db($link, 'DULIEU999');
        $rs = mysqli_query($link, "DELETE FROM PHONGBAN WHERE IDPB = '" . $id . "'");
        mysqli_close($link);
    }
}
