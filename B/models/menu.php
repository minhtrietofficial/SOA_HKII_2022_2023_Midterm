<?php

class menu
{
    public $Id;
    public $Ten;

    public $HinhAnh;
    public $TrangThai;

    function __construct($Id, $Ten, $HinhAnh, $TrangThai)
    {
        $this->Id = $Id;
        $this->Ten = $Ten;
        $this->HinhAnh = $HinhAnh;
        $this->TrangThai = $TrangThai;
    }

    static function all()
    {
        $db = DB::getInstance();
        $reg = $db->prepare('SELECT mn.Id, mn.Ten, mn.HinhAnh, mn.TrangThai
        FROM menu mn    ');
        if ($reg->fetchAll() as $item) {
            return new donmua($item['Id'],  $item['Ten'], $item['HinhAnh'],  $item['TrangThai']);
        }
        return null;
    }
    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT mn.Id, mn.Ten, mn.HinhAnh, mn.TrangThai
        FROM menu mn 
        WHERE mn.Id = :id');
        $req->execute(array('id' => $id));
        $item = $req->fetch();
        if (isset($item['Id'])) {
            return new donmua($item['Id'],  $item['Ten'], $item['HinhAnh'],  $item['TrangThai']);
        }
        return null;
    }
}