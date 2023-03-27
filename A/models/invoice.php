<?php
require_once("models/table.php");
class invoice
{
    public $invoice_id;
    public $invoice_status;
    public $arrive_time;
    public $leave_time;
    public $pay_id;
    public $pay_method;
    public $pay_amount;
    public $id_table;

    function  __construct($invoice_id, $invoice_status, $arrive_time, $leave_time, $pay_id, $pay_method, $pay_amount, $id_table)
    {
        $this->invoice_id = $invoice_id;
        $this->invoice_status = $invoice_status;
        $this->arrive_time = $arrive_time;
        $this->leave_time = $leave_time;
        $this->pay_id = $pay_id;
        $this->pay_method = $pay_method;
        $this->pay_amount = $pay_amount;
        $this->id_table = $id_table;
    }
    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $reg = $db->query('select * from invoice');
        foreach ($reg->fetchAll() as $item) {
            $list[] = new invoice($item['invoice_id'],$item['invoice_status'], $item['arrive_time'], $item['leave_time'],$item['pay_id'],$item['pay_method'], $item['pay_amount'], $item['id_table']);
        }
        return $list;
    }
    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM invoice WHERE table_id = :id');
        $req->execute(array('id' => $id));
        $item = $req->fetch();
        if (isset($item['invoice_id'])) {
            return new invoice($item['invoice_id'],$item['invoice_status'], $item['arrive_time'], $item['leave_time'],$item['pay_id'],$item['pay_method'], $item['pay_amount'], $item['id_table']);
        }return null;
    }
    static function find_session($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT iv.invoice_id, iv.invoice_status, iv.arrive_time, iv.leave_time, iv.pay_id, iv.pay_method, iv.pay_amount, tb.table_id FROM invoice iv JOIN table_info tb ON tb.id = iv.id_table WHERE id_table = :id');
        $req->execute(array('id' => $id));
        $item = $req->fetch();
        if (isset($item['invoice_id'])) {
            return new invoice($item['invoice_id'],$item['invoice_status'], $item['arrive_time'], $item['leave_time'],$item['pay_id'],$item['pay_method'], $item['pay_amount'], $item['table_id']);
        }else{
            return null;
        }
    }
    static function add($table_id)
    {
        $db = DB::getInstance();
        $id_num = rand(0000, 9999);
        $today = date_create()->format('d');
        $pay_id = "SOA" ."$today". "$id_num";
        $reg =$db->query('INSERT INTO invoice(invoice_status, pay_id,id_table)
        VALUES ("1","' . $pay_id . '","' . $table_id . '")      ');
        $table_status = "Occupied";
        table::update_statuts($table_id,$table_status);
        header('location:index.php');

    }
    static function update($id,$table_id,$max_capacity)
    {
        $db = DB::getInstance();
        $reg =$db->query('UPDATE table_info SET table_id ="'.$table_id.'",max_capacity ="'.$max_capacity.'"  WHERE id='.$id);
        header('location:index.php?controller=invoice&action=manage');
    }
    static function delete($id)
    {
        $db = DB::getInstance();
        $reg =$db->query('DELETE FROM invoice WHERE invoice_id='.$id);
        header('location:index.php?controller=invoice');
    }
    static function update_pay($invoice_id, $invoice_status)
    {
        $db = DB::getInstance();
        $reg =$db->query('UPDATE invoice SET invoice_status ="'.$invoice_status.'"  WHERE invoice_id='.$invoice_id);
    }

}

