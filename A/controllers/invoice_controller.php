<?php
require_once('controllers/base_controller.php');
require_once ('models/invoice.php');

class InvoiceController extends BaseController
{
    function __construct()
    {
        $this->folder = 'invoice';
    }


    public function index()
    {
        $invoice = invoice::all();
        $data = array('invoice' => $invoice);
        $this->render('index', $data);
    }
    public function detail()
    {
        $this->render('detail');
    }


    public function manage()
    {
        $invoice = invoice::all();
        $data = array('invoice' => $invoice);
        $this->render('manage', $data);
    }
    public function insert()
    {
        $this->render('insert');
    }
    public function edit()
    {
        $invoice = invoice::find($_GET['id']);
        $data =array('invoice'=> $invoice);
        $this->render('edit',$data);
    }
}
