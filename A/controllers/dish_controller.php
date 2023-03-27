<?php
require_once ('controllers/base_controller.php');
require_once ('models/dish.php');
class DishController extends BaseController
{
    function  __construct()
    {
        $this->folder = 'dish';
    }
    public function index()
    {
        $dish = dish::all();
        $data =array('dish'=> $dish);
        $this->render('index',$data);
    }
    public function  insert()
    {
        $this->render('insert');
    }
    public function edit()
    {
        $dish = dish::find($_GET['id']);
        $data = array('dish'=>$dish);
        $this->render('edit',$data);
    }
    public function dish_cate()
    {
        $dish = dish::dish_cate($_GET['id']);
        $data = array('dish'=>$dish);
        $this->render('index',$data);
    }
}
