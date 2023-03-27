<?php
class account
{
    public $Id;
    public $IdNV;
    public $pincode;
    public $IdQuyen;


    function  __construct($Id, $IdNV, $pincode, $IdQuyen)
    {
        $this->Id = $Id;
        $this->IdNV = $IdNV;
        $this->pincode = $pincode;
        $this->IdQuyen = $IdQuyen;
       
    }
    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $reg = $db->query('select * from account');
        foreach ($reg->fetchAll() as $item) {
            $list[] = new account($item['Id'], $item['IdNV'], $item['pincode'], $item['IdQuyen']);
        }
        return $list;
    }
    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM account WHERE pincode = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['Id'])) {
            return new account($item['Id'], $item['IdNV'], $item['pincode'], $item['IdQuyen']);
        }
        return null;
    }

}
