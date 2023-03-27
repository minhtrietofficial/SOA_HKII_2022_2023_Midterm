<?php
require_once('controllers/base_controller.php');

class TrangChuController extends BaseController
{
    function __construct()
    {
        $this->folder = 'trangchu';
    }

    public function index()
    {
        $this->render('home');
    }

    public function error()
    {
        $this->render('error');
    }


    public function logout()
    {
        $this->render('logout');
    }
}
