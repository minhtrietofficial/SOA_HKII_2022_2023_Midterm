<?php
require_once('models/invoice.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Layout</title>
    <!-- Poppin font family -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Font Awesone for Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- CSS file from user -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="message free_msg">
        <i class="fa-solid fa-circle-exclamation"></i>
        <h1>Confirm</h1>
        <p>Are you sure want to open <strong>Table T-01</strong>?</p>
        <div>
            <button id="yes">Yes, Open it</button>
            <button id="cancel">Cancel</button>
        </div>
    </div>
    <div class="message occupied_msg">
        <h1>Table T-01</h1>
        <a href="">Edit ORDER</a>
        <a href="">View ORDER</a>
        <a href="">Move TABLE</a>
    </div>
    <!-- <div id="overlay"></div> -->
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="Assets/img/logo.png" alt="">
            </div>
            <nav>
                <a href="index.php?controller=table"><i class="fa-solid fa-table-cells-large"></i>TABLE LAYOUT</a>
                <a href=""><i class="fa-solid fa-clipboard-list"></i>ORDER LIST</a>
            </nav>
        </div>
        <div class="main">
            <div class="header">
                <i class="fa-solid fa-user"></i>
                <p>Nguyen Truong Thinh </p>
                <a href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
            <div class="content">
                <div class="table_container">
                    <?php
                    foreach ($invoice as $item) {
                ?>
                    <div class="table status" tablestatus="<?= $item->invoice_id ?>">
                        <div class="table_header">
                            <p class="table_name"><?= $item->invoice_status ?></p>
                            <div class="table_pax_ctn">
                                <i class="fa-solid fa-user"></i>
                                <p class="table_pax"><?= $item->arrive_time ?></p>
                            </div>
                        </div>
                        <div class="table_status"><?= $item->leave_time?></div>
                        <div class="table_footer">
                            <div class="arrive_time_ctn">
                                <i class="fa-solid fa-clock"></i>
                                <p class="arrive_time"><?= $item->pay_id?></p>
                            </div>

                            <div tablestatus="<?= $item->table_status?>"><a
                                    href="index.php?controller=session&action=insert&table_id=<?= $item->id ?>"><?= $item->pay_method ?></a>
                            </div>
                            <div tablestatus="<?= $item->table_status?>"><a
                                    href="index.php?controller=session&action=detail_session&table_id=<?= $item->id ?>"><?= $item->pay_amount ?></a>
                            </div>
                            <div tablestatus="<?= $item->table_status?>"><a
                                    href="index.php?controller=session&action=detail_session&table_id=<?= $item->table_id ?>"><?= $item->table_id ?></a>
                            </div>

                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</body>

</html>