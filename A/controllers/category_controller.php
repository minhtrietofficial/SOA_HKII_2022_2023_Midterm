<?php
require_once ('controllers/base_controller.php');
require_once ('models/category.php');
class CategoryController extends BaseController
{
    function  __construct()
    {
        $this->folder = 'category';
    }
    public function index()
    {
        $category = category::all();
        $data =array('category'=> $category);
        $this->render('index',$data);
    }
    public function  insert()
    {
        $this->render('insert');
    }
    public function edit()
    {
        $category = category::find($_GET['id']);
        $data = array('category'=>$category);
        $this->render('edit',$data);
    }
}
