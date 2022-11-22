<?php
include_once('E_PhongBan.php');
class Model_PhongBan
{
    public function __construct()
    {
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
}
