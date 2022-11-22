<?php
class Entity_PhongBan
{
    public $IDPB;
    public $TenPB;
    public $Mota;

    public function __construct($IDPB, $TenPB, $Mota)
    {
        $this->IDPB = $IDPB;
        $this->TenPB = $TenPB;
        $this->Mota = $Mota;
    }
}
?>