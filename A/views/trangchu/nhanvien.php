<?php
require_once('models/sanpham.php');
require_once('models/task.php');
require_once('models/nhanvien.php');
require_once('models/setting.php');

$alltask = nhanvien::count_all_task($_SESSION['idnhanvien']);
$donetask = nhanvien::count_done_task($_SESSION['idnhanvien']);
if($alltask == 0 && $donetask == 0){
    $alltask = 0;
    $donetask = 0;
}

if ($alltask != 0 && $donetask != 0) {
    $tile_per = $donetask / $alltask * 100;
} else {
    $tile_per = 0;
}


date_default_timezone_set('Asia/Ho_Chi_Minh');
$db = DB::getInstance();
$reg = $db->query('SELECT COUNT(*) FROM task where TrangThai = 2');
$countalltaskpending = $reg->fetchColumn();

$today = date_create()->format('d-m-Y');

$todaysql = date_create()->format('dmY');
$db = DB::getInstance();

$reg = $db->query('SELECT SUM(Tong) FROM donban where TrangThai = 3 and Datesale = '.$todaysql);
$total_sale_today = $reg->fetchColumn();
$reg1 = $db->query('SELECT SUM(ThanhTien) FROM donmua where TrangThai = 3 and Datebuy = '.$todaysql);
$total_buy_today = $reg1->fetchColumn();
if(is_null($total_sale_today))
{
    $total_sale_today = 0;
}
if(is_null($total_buy_today))
{
    $total_buy_today = 0;
}

$setting = setting::find(3);
$ithonsp = $setting -> Soluong;
$reg2 = $db->query('SELECT COUNT(*) FROM sanpham where SoLuong < '.$ithonsp);
$total_tonkho = $reg2->fetchColumn();
if(is_null($total_tonkho))
{
    $total_tonkho = 0;
}
$reg3 = $db->query('SELECT COUNT(*) FROM sanpham ');
$allsp = $reg3->fetchColumn();
if(is_null($allsp))
{
    $allsp = 0;
}
$tilesanphamtonkho = $total_tonkho / $allsp;

$tilephantramsanphamtonkho = $total_tonkho / $allsp * 100;

$reg3 = $db->query('SELECT sum(SoLuong) FROM attendance where TrangThai = 3 and IdNv = '.$_SESSION['idnhanvien']);
$songaydanghiphep = $reg3->fetchColumn();
if(is_null($songaydanghiphep))
{
    $songaydanghiphep = 0;
}
$setting = setting::find(1);
$totalnghiphep = $setting -> Soluong;
$songayconlai = $totalnghiphep - $songaydanghiphep;
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 ">Trang tổng quan</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Bán hàng hôm nay </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= number_format($total_sale_today, 0, ".", ",")?> VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Nhập kho hôm nay</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($total_buy_today, 0, ".", ",")?> VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <a style="text-decoration: none" class="col-xl-3 col-md-6 mb-4 block_admin" href="?controller=task&action=mytask&id=<?= $_SESSION['idnhanvien'] ?>">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Việc làm
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$alltask ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $tile_per ?>%" aria-valuenow="<?= $tile ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Ngày nghỉ phép còn lại: </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$songayconlai?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>