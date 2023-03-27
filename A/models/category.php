<?php
class category{

    public $cate_id;
    public $cate_name;

    function __construct($cate_id,$cate_name)
    {
        $this->cate_id = $cate_id;
        $this->cate_name = $cate_name;
    }
    static function all()
    {
        $list = [];
        $db =DB::getInstance();
        $reg = $db->query('select *from category');
        foreach ($reg->fetchAll() as $item){
            $list[] =new category($item['cate_id'],$item['cate_name']);
        }
        return $list;
    }
    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM category WHERE cate_id = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return new category($item['cate_id'],$item['cate_name']);
        }
        return null;
    }
    static function add($ten)
    {
        $db =DB::getInstance();
        $reg =$db->query('INSERT INTO category(cate_name) VALUES ("'.$ten.'")');
        header('location:index.php?controller=category&action=index');
    }
    static function update($cate_id,$cate_name)
    {
        $db = DB::getInstance();
        $reg =$db->query('UPDATE category SET cate_name ="'.$cate_name.'" WHERE cate_id='.$cate_id);
        header('location:index.php?controller=category&action=index');
    }
    static function delete($cate_id)
    {
        $db =DB::getInstance();
        $reg =$db->query('DELETE FROM category WHERE cate_id='.$cate_id);
        header('location:index.php?controller=category&action=index');
    }
}
