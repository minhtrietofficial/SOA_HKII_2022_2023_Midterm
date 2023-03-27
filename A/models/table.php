<?php
class table
{
    public $id;
    public $table_id;
    public $max_capacity;
    public $table_status;


    function  __construct($id, $table_id, $max_capacity, $table_status)
    {
        $this->id = $id;
        $this->table_id = $table_id;
        $this->max_capacity = $max_capacity;
        $this->table_status = $table_status;
       
    }
    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $reg = $db->query('select * from table_info');
        foreach ($reg->fetchAll() as $item) {
            $list[] = new table($item['id'],$item['table_id'], $item['max_capacity'], $item['table_status']);
        }
        return $list;
    }
    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM table_info WHERE id = :id');
        $req->execute(array('id' => $id));

        $item = $req->fetch();
        if (isset($item['Id'])) {
            return new table($item['id'],$item['table_id'], $item['max_capacity'], $item['table_status']);
        }return null;
    }

    static function add($table_id, $max_capacity, $table_status)
    {
        $db =DB::getInstance();
        $reg =$db->query('INSERT INTO table_info(table_id,max_capacity,table_status) VALUES ("' . $table_id . '","' . $max_capacity . '","' . $table_status . '")      ');


        header('location:index.php?controller=table&action=manage');
    }
    static function update($id,$table_id,$max_capacity)
    {
        $db = DB::getInstance();
        $reg =$db->query('UPDATE table_info SET table_id ="'.$table_id.'",max_capacity ="'.$max_capacity.'"  WHERE id='.$id);
        header('location:index.php?controller=table&action=manage');
    }
    static function delete($id)
    {
        $db = DB::getInstance();
        $reg =$db->query('DELETE FROM table_info WHERE id='.$id);
        header('location:index.php?controller=table&action=manage');
    }
    static function update_statuts($id,$table_status)
    {
        $db = DB::getInstance();
        $reg =$db->query('UPDATE table_info SET table_status ="'.$table_status.'"  WHERE id='.$id);
    }

}
