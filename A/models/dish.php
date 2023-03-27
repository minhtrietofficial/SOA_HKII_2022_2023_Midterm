<?php
class dish{

    public $dish_id;
    public $dish_name;
    public $dish_cate;

    public $dish_dsc;
    public $dish_img;
    public $unit_price;    
    public $dish_status;
    function __construct($dish_id,$dish_name,$dish_cate,$dish_dsc, $dish_img,$unit_price,$dish_status)
    {
        $this->dish_id = $dish_id;
        $this->dish_name= $dish_name;
        $this->dish_cate= $dish_cate;

        $this->dish_dsc= $dish_dsc;
        $this->dish_img= $dish_img;
        $this->unit_price= $unit_price;
        $this->dish_status= $dish_status;
    }
    static function all()
    {
        $list = [];
        $db =DB::getInstance();
        $reg = $db->query('select * from dish');
        foreach ($reg->fetchAll() as $item){
            $list[] =new dish($item['dish_id'],$item['dish_name'],$item['dish_cate'],$item['dish_dsc'],$item['dish_img'],$item['unit_price'],$item['dish_status']);
        }
        return $list;
    }
    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM dish WHERE dish_id = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['id'])) {
            return new dish($item['dish_id'],$item['dish_name'],$item['dish_cate'],$item['dish_dsc'],$item['dish_img'],$item['unit_price'],$item['dish_status']);
        }
        
        return null;
    }
    static function dish_cate($id)
    {
        $list = [];
        $db = DB::getInstance();
        $reg = $db->query('SELECT * FROM dish WHERE dish_cate='.$id);

        foreach ($reg->fetchAll() as $item){
            $list[] = new dish($item['dish_id'],$item['dish_name'],$item['dish_cate'],$item['dish_dsc'],$item['dish_img'],$item['unit_price'],$item['dish_status']);
        }
        return $list;
    }
   
    static function add($dish_name,$dish_cate,$dish_dsc,$dish_img,$unit_price,$dish_status)
    {
        $db =DB::getInstance();
        $reg =$db->query('INSERT INTO dish(dish_name,dish_cate,dish_dsc,dish_img,unit_price,dish_status) VALUES ("'.$dish_name.'","'.$dish_cate.'","'.$dish_dsc.'","'.$dish_img.'","'.$unit_price.'","'.$dish_status.'" )');
        header('location:index.php?controller=dish&action=index');
    }
    static function update($dish_id,$dish_name,$dish_cate,$dish_dsc,$dish_img,$unit_price,$dish_status)
    {
        $db = DB::getInstance();
        $reg =$db->query('UPDATE dish SET cate_name ="'.$cate_name.'" , dish_cate="'.$dish_cate.'" ,dish_dsc ="'.$dish_dsc.'" , dish_img ="'.$dish_img.'" ,unit_price ="'.$unit_price.'" , dish_status ="'.$dish_status.'"  WHERE dish_id='.$dish_id);
        header('location:index.php?controller=dish&action=index');
    }
    static function delete($dish_id)
    {
        $db =DB::getInstance();
        $reg =$db->query('DELETE FROM dish WHERE dish_id='.$dish_id);
        header('location:index.php?controller=dish&action=index');
    }
}
