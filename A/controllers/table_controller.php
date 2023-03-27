<?php
require_once('controllers/base_controller.php');
require_once ('models/table.php');

class TableController extends BaseController
{
    function __construct()
    {
        $this->folder = 'table';
    }
    public function index()
    {
        $table = table::all();
        $data = array('table' => $table);
        $this->render('index', $data);
    }
    public function detail()
    {
        $this->render('detail');
    }
    public function manage()
    {
        $table = table::all();
        $data = array('table' => $table);
        $this->render('manage', $data);
    }
    public function insert()
    {
        $this->render('insert');
    }
    public function edit()
    {
        $table = table::find($_GET['id']);
        $data = array('table'=> $table);
        $this->render('edit',$data);
    }
}
