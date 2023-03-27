<?php
require_once('controllers/base_controller.php');
require_once ('models/table.php');
require_once ('models/invoice.php');
require_once ('models/order.php');
require_once ('models/order_detail.php');
require_once ('models/dish.php');
require_once ('models/category.php');


class SessionController extends BaseController
{
    function __construct()
    {
        $this->folder = 'session';
    }
    public function index()
    {
        $session = session::all();
        $data = array('session' => $session);
        $this->render('index', $data);
    }
    public function insert()
    {
        $invoice = invoice::add($_GET['table_id']);
    }
    public function menu()
    {
        $this->render('menu');
    }
    public function detail()
    {
        $invoice = invoice::find($_GET['id']);
        $data = array('invoice'=> $invoice);
        $this -> render('detail',$data);
    }
    public function detail_session()
    {
        $session = invoice::find_session($_GET['table_id']);
        $data = array('session' => $session);
        $this -> render('detail', $data);
    }
    public function menu_dish_cate()
    {
        $dish = dish::dish_cate($_GET['cate_id']);
        $data = array('dish'=>$dish);
        $this->render('menu_dish_cate',$data);
    }
}
