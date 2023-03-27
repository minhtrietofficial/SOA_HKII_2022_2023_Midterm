<?php
require_once('models/sanpham.php');
require_once('models/task.php');
require_once('models/setting.php');

date_default_timezone_set('Asia/Ho_Chi_Minh');
$db = DB::getInstance();
$reg = $db->query('SELECT COUNT(*) FROM task where TrangThai = 2');
$countalltaskpending = $reg->fetchColumn();

$today = date_create()->format('d-m-Y');

$todaysql = date_create()->format('dmY');
$db = DB::getInstance();

$reg = $db->query('SELECT SUM(Tong) FROM donban where TrangThai = 3 and Datesale = ' . $todaysql);
$total_sale_today = $reg->fetchColumn();
$reg1 = $db->query('SELECT SUM(ThanhTien) FROM donmua where TrangThai = 3 and Datebuy = ' . $todaysql);
$total_buy_today = $reg1->fetchColumn();
if (is_null($total_sale_today)) {
    $total_sale_today = 0;
}
if (is_null($total_buy_today)) {
    $total_buy_today = 0;
}

$setting = setting::find(3);
$ithonsp = $setting->Soluong;
$reg2 = $db->query('SELECT COUNT(*) FROM sanpham where SoLuong < ' . $ithonsp);
$total_tonkho = $reg2->fetchColumn();
if (is_null($total_tonkho)) {
    $total_tonkho = 0;
}
$reg3 = $db->query('SELECT COUNT(*) FROM sanpham ');
$allsp = $reg3->fetchColumn();
if (is_null($allsp)) {
    $allsp = 0;
}


///////////////////////
$countalldonbanpending = 0;
$reg4 = $db->query('SELECT COUNT(*) FROM donban where TrangThai = 1');
$countalldonbanpending = $reg4->fetchColumn();
if (is_null($countalldonbanpending)) {
    $countalldonbanpending = 0;
}

$countalldonmuapending = 0;
$reg5 = $db->query('SELECT COUNT(*) FROM donmua where TrangThai = 1');
$countalldonmuapending = $reg5->fetchColumn();
if (is_null($countalldonmuapending)) {
    $countalldonmuapending = 0;
}

$countallphieuchipending = 0;
$reg5 = $db->query('SELECT COUNT(*) FROM phieuchi where trangthai = 1');
$countallphieuchipending = $reg5->fetchColumn();
if (is_null($countallphieuchipending)) {
    $countallphieuchipending = 0;
}
?>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 ">Tổng quan</h1>
    </div>
    <div class="row">
        <a href="index.php?controller=donban&action=today" style="text-decoration: none" class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Bán hàng hôm nay</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($total_sale_today, 0, ".", ",") ?> VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?controller=donmua&action=today" style="text-decoration: none" class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nhập kho hôm nay
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= number_format($total_buy_today, 0, ".", ",") ?> VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?controller=phieuchi&action=pending" style="text-decoration: none" class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Phiếu chi chờ duyệt
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $countallphieuchipending ?> VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="index.php?controller=sanpham&action=atleast&id=<?= $ithonsp ?>" style="text-decoration: none" class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Số sản phẩm tồn kho ít hơn <?= $ithonsp ?>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total_tonkho ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $tilesanphamtonkho ?>%" aria-valuenow="<?= $tilesanphamtonkho ?>" aria-valuemin="0" aria-valuemax="100"></div>
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
        <a href="?controller=task&action=task_pending" style="text-decoration: none" class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Các nhiệm vụ chờ duyệt</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countalltaskpending ?></div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-solid fa-bars-progress fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a href="?controller=donban&action=donban_pending" style="text-decoration: none" class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Đơn hàng bán chờ duyệt</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countalldonbanpending ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="?controller=donmua&action=donmua_pending" style="text-decoration: none" class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Đơn hàng mua chờ duyệt</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countalldonmuapending ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>